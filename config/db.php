<?php
/**
 * 数据库配置文件
 */
return [
    //mongodb配置文件
    'mongodb' => [
        'class_name' => \Cute\db\Mongodb::class,
        'options' => [
            'host' => '127.0.0.1',
            'port' => '27017',
            'dbname' => 'qf',
            'options' => [ //创建连接的额外参数
                
            ],
        ]
    ],
    'mysql' => [
        'class_name' => \Cute\db\Mysql::class,
        'options' => [
            'host' => '127.0.0.1',
            'port' => '3306',
            'username' => 'root',
            'password' => 'root',
            'dbname' => 'coffee',
            'options' => [
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            ]
        ]
    ]
];