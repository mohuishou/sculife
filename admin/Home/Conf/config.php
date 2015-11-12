<?php

/**
 * 获取环境变量
 * @param $key
 * @param null $default
 * @return null|string
 */
function env($key, $default = null)
{
    $value = getenv($key);
    if ($value === false) {
        return $default;
    }
    return $value;
}

$serverName =   env("MYSQL_PORT_3306_TCP_ADDR", "localhost");
$databaseName = env("MYSQL_INSTANCE_NAME", "homestead");
$username =     env("MYSQL_USERNAME", "homestead");
$password =     env("MYSQL_PASSWORD", "secret");

return array(
	// 添加数据库配置信息
	'DB_TYPE'=>'mysql',// 数据库类型
	'DB_HOST'=>$serverName,// 服务器地址
	'DB_NAME'=>$databaseName,// 数据库名
	'DB_USER'=>$username,// 用户名
	'DB_PWD'=>$password ,// 密码
	'DB_PORT'=>'3306',// 端口
	'DB_PREFIX'=>'webDesign_',// 数据库表前缀
	'DB_CHARSET'=>'utf8',// 数据库字符集
);

