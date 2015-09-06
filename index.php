<?php
// 检测PHP环境
if(version_compare(PHP_VERSION, '5.3.0','<'))  die('require PHP > 5.3.0 !');

// 站点目录
define('SITE_DIR', dirname(__FILE__));
define('SCRIPT_DIR', (isset($_SERVER['SCRIPT_NAME']) ? rtrim(dirname($_SERVER['SCRIPT_NAME']), '\/\\') : ''));
// ThinkPHP定义
define('APP_DEBUG', true);
define('THINK_PATH', './Core/' );
define('APP_PATH',  './App/' );

require(THINK_PATH.'ThinkPHP.php');