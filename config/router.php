<?php

return [
    '/' => 'IndexController@index',
    'index/index' => 'IndexController@index',
    'index/index2' => 'IndexController@index2',
    'index/index3' => 'IndexController@index3',
    'index/:test/:test2' => 'IndexControlelr@test',
    'index/:test1_:test2_:test3' => 'IndexController@test2',
];
