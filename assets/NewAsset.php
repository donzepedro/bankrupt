<?php


namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class NewAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/fslider.css',
        'css/crmlayout.css',
        'css/imgloadbtn.css',
        'css/front/common_styles.css',                  
        'css/front/desktop_news_read.css',                  
        'css/front/desktop_adress.css',                  
        'css/front/desktop_profile.css',                  
        'css/front/desktop_search_creditor.css',                  
        'css/front/desktop_login.css',                  
        'css/front/desktop_search.css',                  
        'css/front/desktop_main_creditor.css',                  
        'css/front/desktop_manager_card_client.css',                  
        'css/front/desktop_sign_up.css',                  
        'css/front/desktop_manager_card_creditor.css',                  
        'css/front/main.css',                  
        'css/front/desktop_news.css',
        
        'css/front/fonts/fonts_styles.css',
        
        'css/front/fonts/Jost-Black.eot',
        'css/front/fonts/Jost-BlackItalic.eot',
        'css/front/fonts/Jost-BlackItalic.ttf',
        'css/front/fonts/Jost-BlackItalic.woff',
        'css/front/fonts/Jost-BlackItalic.woff2',
        'css/front/fonts/Jost-Black.ttf',
        'css/front/fonts/Jost-Black.woff',
        'css/front/fonts/Jost-Black.woff2',
        'css/front/fonts/Jost-Bold.eot',
        'css/front/fonts/Jost-BoldItalic.eot',
        'css/front/fonts/Jost-BoldItalic.ttf',
        'css/front/fonts/Jost-BoldItalic.woff',
        'css/front/fonts/Jost-BoldItalic.woff2',
        'css/front/fonts/Jost-Bold.ttf',
        'css/front/fonts/Jost-Bold.woff',
        'css/front/fonts/Jost-Bold.woff2',
        'css/front/fonts/Jost-ExtraBold.eot',
        'css/front/fonts/Jost-ExtraBoldItalic.eot',
        'css/front/fonts/Jost-ExtraBoldItalic.ttf',
        'css/front/fonts/Jost-ExtraBoldItalic.woff',
        'css/front/fonts/Jost-ExtraBoldItalic.woff2',
        'css/front/fonts/Jost-ExtraBold.ttf',
        'css/front/fonts/Jost-ExtraBold.woff',
        'css/front/fonts/Jost-ExtraBold.woff2',
        'css/front/fonts/Jost-ExtraLight.eot',
        'css/front/fonts/Jost-ExtraLightItalic.eot',
        'css/front/fonts/Jost-ExtraLightItalic.ttf',
        'css/front/fonts/Jost-ExtraLightItalic.woff',
        'css/front/fonts/Jost-ExtraLightItalic.woff2',
        'css/front/fonts/Jost-ExtraLight.ttf',
        'css/front/fonts/Jost-ExtraLight.woff',
        'css/front/fonts/Jost-ExtraLight.woff2',
        'css/front/fonts/Jost-Italic.eot',
        'css/front/fonts/Jost-Italic.ttf',
        'css/front/fonts/Jost-Italic.woff',
        'css/front/fonts/Jost-Italic.woff2',
        'css/front/fonts/Jost-Light.eot',
        'css/front/fonts/Jost-LightItalic.eot',
        'css/front/fonts/Jost-LightItalic.ttf',
        'css/front/fonts/Jost-LightItalic.woff',
        'css/front/fonts/Jost-LightItalic.woff2',
        'css/front/fonts/Jost-Light.ttf',
        'css/front/fonts/Jost-Light.woff',
        'css/front/fonts/Jost-Light.woff2',
        'css/front/fonts/Jost-Medium.eot',
        'css/front/fonts/Jost-MediumItalic.eot',
        'css/front/fonts/Jost-MediumItalic.ttf',
        'css/front/fonts/Jost-MediumItalic.woff',
        'css/front/fonts/Jost-MediumItalic.woff2',
        'css/front/fonts/Jost-Medium.ttf',
        'css/front/fonts/Jost-Medium.woff',
        'css/front/fonts/Jost-Medium.woff2',
        'css/front/fonts/Jost-Regular.eot',
        'css/front/fonts/Jost-Regular.ttf',
        'css/front/fonts/Jost-Regular.woff',
        'css/front/fonts/Jost-Regular.woff2',
        'css/front/fonts/Jost-SemiBold.eot',
        'css/front/fonts/Jost-SemiBoldItalic.eot',
        'css/front/fonts/Jost-SemiBoldItalic.ttf',
        'css/front/fonts/Jost-SemiBoldItalic.woff',
        'css/front/fonts/Jost-SemiBoldItalic.woff2',
        'css/front/fonts/Jost-SemiBold.ttf',
        'css/front/fonts/Jost-SemiBold.woff',
        'css/front/fonts/Jost-SemiBold.woff2',
        'css/front/fonts/Jost-Thin.eot',
        'css/front/fonts/Jost-ThinItalic.eot',
        'css/front/fonts/Jost-ThinItalic.ttf',
        'css/front/fonts/Jost-ThinItalic.woff',
        'css/front/fonts/Jost-ThinItalic.woff2',
        'css/front/fonts/Jost-Thin.ttf',
        'css/front/fonts/Jost-Thin.woff',
        'css/front/fonts/Jost-Thin.woff2',

        
    ];
    public $js = [
        'js/comagic.js',
        'js/fslider.js',
        'js/manager_delete.js',
        'js/validator.js',
        'js/loadphoto.js',
        'js/front/main.js',
        'js/front/cs.min.js',
       
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}