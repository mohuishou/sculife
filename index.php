<?php

<<<<<<< HEAD
=======
// 应用入口文件
>>>>>>> d338b48a60e35ef738596499a352cf0c50d10d0c

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',True);

// 定义应用目录
<<<<<<< HEAD
define('APP_PATH','./admin/');
=======
define('APP_PATH','./Application/');
>>>>>>> d338b48a60e35ef738596499a352cf0c50d10d0c

// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

<<<<<<< HEAD
// 亲^_^ 后面不需要任何代码了 就是如此简单
=======
>>>>>>> d338b48a60e35ef738596499a352cf0c50d10d0c
