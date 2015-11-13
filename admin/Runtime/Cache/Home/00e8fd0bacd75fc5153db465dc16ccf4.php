<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>login-sculife</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/normalize.css" />
	-->
	<link rel="stylesheet" type="text/css" href="__PULIC__/css/default.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
	<style type="text/css">
	html,
	body {
	    height: 100%;
	}
	html {
	    display: table;
	    margin: auto;
	}
	body {
	    display: table-cell;
	    vertical-align: middle;
	    background-color: #99CCCC;
	}

	.margin {
	  margin: 0 !important;
	}
	</style>
	<!--[if IE]>
	<script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
	<![endif]-->
</head>
<body>

	<div id="login-page" class="row">
		<div class="col s12 z-depth-6 card-panel">
			<form id="form" class="login-form" method="post">
				<div class="row">
					<div class="input-field col s12 center">

						<p class="center login-form-text">SCULIFE</p>

					</div>
				</div>
				<div class="row margin">
					<div class="input-field col s12"> <i class="mdi-social-person-outline prefix"></i>
						<input class="validate" name="username" id="username" type="text">
						<label for="username" data-error="wrong" data-success="right" class="center-align">UserName</label>
					</div>
				</div>
				<div class="row margin">
					<div class="input-field col s12"> <i class="mdi-action-lock-outline prefix"></i>
						<input id="password" name="password" type="password">
						<label for="password">Password</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12 m12 l12  login-text">
						<input type="checkbox" id="remember-me" />
						<label for="remember-me">记住我</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						<button type="submit"
						id="confirm" name="send" value="send" href="" class="btn waves-effect waves-light col s12">登　录</button>
					</div>
				</div>

			</form>
		</div>
	</div>
</div>

<script type="text/javascript" src="http://libs.useso.com/js/jquery/1.11.0/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/Match/sculife/Public/js/jquery.min.js"><\/script>')</script>
<!--materialize js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
<script>
		$(document).ready(function(){ 
			$("input").blur(function(){
			    $("#confirm").css("background-color","#26a69a");
			    $("#confirm").text("登陆");
			});
			$("#form").submit(function(){  //当提交的时候 ajax 验证完就停止
				login();
				return false;
			});

		});

	
		function login(){
			var user= $("#username").val();
			var pass=$("#password").val();
			if (user == "") {    
				$('#confirm').css('background','#FF9999');
				$("#confirm").text("请输入登录用户名");
				return false;
			}
			if(pass == "") {
				$('#confirm').css('background','#FF9999');
				$("#confirm").text("请输入登录密码");
				$("#password").focus();
				return false;
			}

			$.ajax({
				type: "get", 
				url: "/Match/sculife/index.php/Home/Admin/login",
				data: "username="+user+"&password="+pass+'&send=send',
				dataType:"json",
				beforeSend:function(){
					$("#confirm").text("登陆中，请稍后...");
				},
				success:function(msg){
					// alert(msg);
					if(msg.status==1){
						$("#confirm").text(msg.message).delay(2000);
						location.href ="/Match/sculife/index.php/Home/Admin/index";
					}else{
						$('#confirm').css('background','#FF9999');
						$("#confirm").text(msg.message);
						

					}
				},
				error:function(a,b,c){
					alert(b);
				}

			});
		}

	</script>
</body>
</html>