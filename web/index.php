<?php
error_reporting = E_ALL;
display_errors = On;
display_startup_errors = On;
// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');
define('ROOT', str_replace('web', '', __DIR__));
define('HOME', '/arbitr-manager/index?');
define('INTRESTINGPGAES', '/news/intresting-pages/');

define('DOMAIN','http://bankrupt/');

define('DOMAIN','http://atra-centr.ru/');

define('MANAGERS_IMG_FOLDER', '../web/img/managers_profile_img/');

define('VK','https://vk.com/atrabankrotstvo');
define('INSTA','https://www.instagram.com/atra.bankrotstvo/');
define('YOUTUBE','https://www.youtube.com/channel/UCVqUAqStYMznQEt2TuOtyfA');
define('TIKTOK','https://www.tiktok.com/@atra_bankrotstvo?lang=ru-RU');
define('EMAIL','info@atra-centr.ru');
define('PHONE','+7 (812) 603-93-34');

require 'functions.php';

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

$config = require __DIR__ . '/../config/web.php';

(new yii\web\Application($config))->run();
