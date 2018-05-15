<?php

return [
    'gzip_level' => 1, //压缩等级1-9，越大越耗内存 0表示不开启gzip
    'host' => '0.0.0.0',    
    'port' => 9501,
    'start_options' => [ //启动参数
        'worker_num' => 4,
//        'daemonize' => true, //是否守护进程
        'backlog' => 128,
    ],
];

