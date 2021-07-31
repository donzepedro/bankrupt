<?php
// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');
define('ROOT', str_replace('web', '', __DIR__));
define('HOME', '/arbitr-manager/index?');
<<<<<<< HEAD
define('DOMAIN','http://bankrupt/');
=======
define('DOMAIN','http://atra-centr.ru/');
>>>>>>> cc773adba5f53ca318283bc73c3e34d3c453b464
define('MANAGERS_IMG_FOLDER', '../web/img/managers_profile_img/');
require 'functions.php';

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../config/web.php';

(new yii\web\Application($config))->run();
