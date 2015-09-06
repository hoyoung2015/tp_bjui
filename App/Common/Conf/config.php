<?php
return array(
    /* 数据库设置 */
    'DB_TYPE'               => 'mysqli',      // 数据库类型
    'DB_HOST'               => 'localhost',   // 服务器地址
    'DB_NAME'               => 'wd',         // 数据库名
    'DB_USER'               => 'root',        // 用户名
    'DB_PWD'                => '',            // 密码
    'DB_PORT'               => '3306',        // 端口
    'DB_PREFIX'             => '',       // 数据库表前缀

    'TMPL_L_DELIM'          => '<{',         // 模板引擎普通标签开始标记
    'TMPL_R_DELIM'          => '}>',         // 模板引擎普通标签结束标记
    /* 模板解析设置 */
    'TMPL_PARSE_STRING' => array(
        '__PUBLIC__'        => SCRIPT_DIR . '/Public',
        '__STATIC__'        => SCRIPT_DIR . '/static',
    ),
);