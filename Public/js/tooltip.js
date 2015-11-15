/*!
 * Tooltip v0.0.1
 * https://github.com/fengyuanchen/tooltip
 *
 * Copyright (c) 2015 Fengyuan Chen
 * Released under the MIT license
 *
 * Date: 2015-06-10T10:06:26.765Z
 */

(function (factory) {
  if (typeof define === 'function' && define.amd) {
    // AMD. Register as anonymous module.
    define('tooltip', ['jquery'], factory);
  } else if (typeof exports === 'object') {
    // Node / CommonJS
    factory(require('jquery'));
  } else {
    // Browser globals.
    factory(jQuery);
  }
})(function ($) {

  'use strict';

  var $window = $(window),

      // Constants
      NAMESPACE = 'tooltip',

      // Classes
      CLASS_FIXED = NAMESPACE + '-fixed',
      CLASS_RELATIVE = NAMESPACE + '-relative',
      CLASS_ACTIVE = NAMESPACE + '-active',
      CLASS_DISMISSIBLE = NAMESPACE + '-dismissible',
      CLASS_COUNTDOWN = NAMESPACE + '-countdown',

      // Events
      EVENT_CLICK = 'click.' + NAMESPACE,
      EVENT_RESIZE = 'resize.' + NAMESPACE,
      EVENT_SHOW = 'show.' + NAMESPACE,
      EVENT_SHOWN = 'shown.' + NAMESPACE,
      EVENT_HIDE = 'hide.' + NAMESPACE,
      EVENT_HIDDEN = 'hidden.' + NAMESPACE;

  function isString(s) {
    return typeof s === 'string';
  }

  function Tooltip(element, options) {
    this.$element = $(element);
    this.options = $.extend({}, Tooltip.DEFAULTS, $.isPlainObject(options) && options);
    this.active = false;
    this.animating = false;
    this.dismissing = false;
    this.classes = false;
    this.center = false;
    this.middle = false;
    this.isBody = false;
    this.isStatic = false;
    this.init();
  }

  Tooltip.prototype = {
    constructor: Tooltip,

    init: function () {
      var options = this.options,
          $this = this.$element;

      this.initialOptions = $.extend({}, this.options);
      this.isBody = $this.is('body');
      this.isStatic = !this.isBody && $this.css('position') === 'static';
      this.$tooltip = $(Tooltip.TEMPLATE.dialog);

      $this.on(EVENT_CLICK, '[data-dismiss="' + NAMESPACE + '"]', $.proxy(this.dismiss, this));
      $window.on(EVENT_RESIZE, $.proxy(this.resize, this));

      if (options.autoshow) {
        this.show(options.content);
      }
    },

    show: function (content, options) {
      var $tooltip = this.$tooltip,
          showEvent = $.Event(EVENT_SHOW),
          position,
          classes;

      this.$element.trigger(showEvent);

      if (showEvent.isDefaultPrevented()) {
        return;
      }

      if (!options && $.isPlainObject(content)) {
        options = content;
        content = '';
      }

      this.options = options = $.extend({}, this.initialOptions, $.isPlainObject(options) && options);
      content = content || options.content;

      // Type conversion
      options.duration = Number(options.duration) || 3000;
      options.offset = Number(options.offset) || 10;
      options.zIndex = Number(options.zIndex) || 1024;

      if (!isString(content) || !content.length) {
        return;
      }

      position = isString(options.position) ? options.position.split(/\W+/) : ['center', 'top'];
      this.center = $.inArray('center', position) > -1;
      this.middle = $.inArray('middle', position) > -1;

      classes = $.map(position, function (n) {
        return NAMESPACE + '-' + n;
      });

      if (options.fixed && this.isBody) {
        classes.unshift(CLASS_FIXED);
      }

      classes.push($.inArray(options.style, Tooltip.STYLES) > -1 ? (NAMESPACE + '-' + options.style) : options.style);

      if (options.countdown) {
        content += Tooltip.TEMPLATE.countdown;
      }

      if (options.dismissible) {
        classes.push(CLASS_DISMISSIBLE);
        content += Tooltip.TEMPLATE.button;
      }

      $tooltip
      .removeClass(this.classes + ' ' + CLASS_ACTIVE)
      .addClass(this.classes = classes.join(' '))
      .html(content)
      .appendTo(this.$element.toggleClass(CLASS_RELATIVE, this.isStatic));

      if (options.countdown) {
        this.countdown();
      }

      this.active = true;
      this.resize();
      $tooltip.addClass(CLASS_ACTIVE);


      if (this.animating) {
        clearTimeout(this.animating);
      }

      this.animating = setTimeout($.proxy(this.shown, this), 150); // 150ms for fade in
    },

    shown: function () {
      var options = this.options;

      this.animating = false;

      if (options.autohide) {
        if (this.dismissing) {
          clearTimeout(this.dismissing);
        }

        this.dismissing = setTimeout($.proxy(this.hide, this), options.duration);
      }

      this.$element.trigger(EVENT_SHOWN);
    },

    hide: function () {
      var hideEvent = $.Event(EVENT_HIDE);

      this.$element.trigger(hideEvent);

      if (hideEvent.isDefaultPrevented()) {
        return;
      }

      this.active = false;
      this.$tooltip.removeClass(CLASS_ACTIVE);

      if (this.animating) {
        clearTimeout(this.animating);
      }

      this.animating = setTimeout($.proxy(this.hidden, this), 150); // 150ms for fade out
    },

    hidden: function () {
      this.animating = false;
      this.$tooltip.empty().detach();
      this.$element.removeClass(CLASS_RELATIVE).trigger(EVENT_HIDDEN);
    },

    resize: function () {
      var options = this.options,
          $tooltip = this.$tooltip,
          offset = options.offset;

      if (this.active) {
        $tooltip.removeAttr('style').css({
          marginTop: this.middle ? -$tooltip.outerHeight() / 2 : offset,
          marginRight: offset,
          marginBottom: offset,
          marginLeft: this.center ? (offset - $tooltip.outerWidth() / 2) : offset,
          zIndex: options.zIndex
        });
      }
    },

    dismiss: function () {
      if (this.dismissing) {
        clearTimeout(this.dismissing);
      }

      if (this.counting) {
        clearTimeout(this.counting);
      }

      this.dismissing = false;
      this.counting = false;
      this.hide();
    },

    countdown: function () {
      var $countdown = this.$tooltip.find('.' + CLASS_COUNTDOWN),
          seconds = this.options.duration / 1000;

      (function countdown() {
        $countdown.text(' (' + seconds + ') ');

        if (seconds-- > 0) {
          setTimeout(countdown, 1000);
        }
      })();
    },

    destroy: function () {
      this.$element.off(EVENT_CLICK, this.dismiss).removeData(NAMESPACE).removeClass(CLASS_RELATIVE);
      $window.off(EVENT_RESIZE, this.resize);
    }
  };

  Tooltip.DEFAULTS = {
    // Auto hide when timeout
    // Type: Boolean
    autohide: true,

    // Auto show after initialized
    // Type: Boolean
    autoshow: true,

    // Tooltip content
    // Type: String
    content: '',

    // Show countdown view
    // Type: Boolean
    countdown: false,

    // Allow to dismiss the tooltip before it is closed automatically
    // Type: Boolean
    dismissible: false,

    // Define the time of the tooltip showing (3 seconds by default)
    // Type: Number
    duration: 3000,

    // Fix the tooltip (Only available for body element)
    // Type: Boolean
    fixed: true,

    // Offset of the tooltip from its parent
    // Type: Number
    offset: 10,

    // Position of the tooltip (horizontal and vertical)
    // Type: String
    // Options:
    //   'left top',    'center top',    'right top',
    //   'left middle', 'center middle', 'right middle',
    //   'left bottom', 'center bottom', 'right bottom'
    position: 'center top',

    // Style of the tooltip
    // Type: String
    // Options: 'default', 'primary', 'success', 'info', 'warning', 'danger'
    style: 'default',

    // Z index of the tooltip
    // Type: Number
    zIndex: 1024
  };

  Tooltip.setDefaults = function (options) {
    $.extend(Tooltip.DEFAULTS, options);
  };

  Tooltip.STYLES = ['default', 'primary', 'success', 'info', 'warning', 'danger'];

  Tooltip.TEMPLATE = {
    dialog: '<div class="tooltip-dialog"></div>',
    countdown: '<span class="tooltip-countdown"></span>',
    button: '<button type="button" class="tooltip-dismiss" data-dismiss="tooltip" aria-label="Close"><span aria-hidden="true">&times;</span></button>'
  };

  // Save the other tooltip
  Tooltip.other = $.fn.tooltip;

  // Register as jQuery plugin
  $.fn.tooltip = function (options) {
    var args = [].slice.call(arguments, 1);

    return this.each(function () {
      var $this = $(this),
          data = $this.data(NAMESPACE),
          fn;

      if (!data) {
        if (/destroy|hide/.test(options)) {
          return;
        }

        $this.data(NAMESPACE, (data = new Tooltip(this, options)));
      }

      if (isString(options) && $.isFunction((fn = data[options]))) {
        fn.apply(data, args);
      }
    });
  };

  $.fn.tooltip.Constructor = Tooltip;
  $.fn.tooltip.setDefaults = Tooltip.setDefaults;

  // No conflict
  $.fn.tooltip.noConflict = function () {
    $.fn.tooltip = Tooltip.other;
    return this;
  };

});
