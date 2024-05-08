<?php
error_reporting(0);
@date_default_timezone_set('PRC');
@header('Content-Type: text/html; charset=UTF-8');
if (!file_exists(dirname(preg_replace('@\(.*\(.*$@', '', __FILE__)) . '/admin/db.php')) {
	exit('<script language=\'javascript\'>alert(\'您还未安装\');window.location.href=\'/install/index.php\';</script>');
} 
include_once 'libs/360safe/360webscan.php';
include_once 'libs/functions.php';
$mysql = require("admin/db.php");
C($mysql);
include_once 'libs/ez_sql_core.php';
include_once 'libs/ez_sql_mysql.php';
$db = new ezSQL_mysql(C('DB_USER'), C('DB_PWD'), C('DB_NAME'), C('DB_HOST') . ':' . C('DB_PORT'));
$db -> query("set names utf8");
if (!isset($_SESSION['authcode'])) {
	$query = file_get_contents('http://www.xz521.top/check.php?url=' . $_SERVER['HTTP_HOST']);
	if ($query = json_decode($query, true)) {
		if ($query['code'] == 1)$_SESSION['authcode'] = true;
		else exit('<h3>' . $query['msg'] . '</h3>');
	} 
} 
if ($rows = $db -> get_results("select * from " . C('DB_PREFIX') . "webconfigs")) {
	foreach($rows as $row) {
		$webconfig[$row['vkey']] = $row['value'];
	} 
	C($webconfig);
} 
$cookiesid = $_COOKIE['klsf_sid'];
if ($cookiesid && $userrow = $db -> get_row("select * from " . C('DB_PREFIX') . "users where sid ='$cookiesid' limit 1")) {
	C('loginuser', $userrow['user']);
	C('loginuid', $userrow['uid']);
} 
