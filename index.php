<?php

date_default_timezone_set('Asia/Ho_Chi_Minh');
require_once 'define.php';

function __autoload($className)
{
	require_once LIBRARY_PATH . "{$className}.php";
}

Session::init();

$bootstrap = new Bootstrap();
$bootstrap->init();
