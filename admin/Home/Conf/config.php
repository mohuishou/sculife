<?php
$dbhost=$$_MYSQL_PORT_$$;
$dbname=$$_MYSQL_INSTANCE_NAME_$$;
$username=$$_MYSQL_USERNAME_$$;
$password=$$_MYSQL_PASSWORD_$$;
return array(
	// 添加数据库配置信息
	'DB_TYPE'=>'mysql',// 数据库类型
	'DB_HOST'=>$dbhost,// 服务器地址
	'DB_NAME'=>$dbname,// 数据库名
	'DB_USER'=>$username,// 用户名
	'DB_PWD'=>$password,// 密码
	'DB_PORT'=>3306,// 端口
	'DB_PREFIX'=>'webDesign_',// 数据库表前缀
	'DB_CHARSET'=>'utf8',// 数据库字符集
);