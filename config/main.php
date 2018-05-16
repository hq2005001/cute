<?php

return [
    'domain' => 'http://www.test.com', //网站domain
    'charset'=> 'utf-8', //网站语言
    
    'app' => require __DIR__.'/app.php', //app类映射

    'router' => require __DIR__.'/router.php', //路由

//    'db_driver' => 'mongodb', //数据库驱动
    'db_driver' => 'mysql', //数据库驱动
    
    'db' => require __DIR__ . '/db.php', //数据库
    
    'server' => require __DIR__. '/server.php', //服务器配置
    
    'view' => [ //视图
        'template_path' => APP_ROOT . '/view',
        'cache_path' => STORAGE_ROOT . '/view/cache',
    ],

    'session' => [
        'name' => 'CUTESESSID',
        'domain' => 1,
    ]
    
];