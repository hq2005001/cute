<?php

namespace Cute;

define('ROOT', dirname(dirname(__FILE__)));

define('APP_ROOT', ROOT . '/app');

define('CONFIG_ROOT', ROOT . '/config');

define('STORAGE_ROOT', ROOT . '/storage');

define('ASSET_ROOT ', ROOT . '/public/assets');

require ROOT . '/vendor/autoload.php';

\Cute\App::getInstance()->run();

