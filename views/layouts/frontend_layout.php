<?php 
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\NewAsset;
$js1 = <<<JS
         let element = document.getElementById('send')
        element.addEventListener('click', (e)=>{
            let phone = document.getElementById('data').value
            if(phone) {
                    //send a call to coMagick
                    Comagic.sitePhoneCall({phone: phone}, function (resp) {
                        console.log(resp)
                    });
                }
            })
      JS;
$this->registerJs($js1);
NewAsset::register($this);
switch(\Yii::$app->request->url){
    case '/main/creditor/':
        $creditor_page = 'nav-item active';
        $bankrupt_page = 'nav-item';
        $am_page = 'nav-item';
        break;
    case '/main/':
        $creditor_page = 'nav-item';
        $bankrupt_page = 'nav-item active';
        $am_page = 'nav-item';
        break;
    case '/am-login/':
        $creditor_page = 'nav-item';
        $bankrupt_page = 'nav-item';
        $am_page = 'nav-item active';
        break;
    default:
        $creditor_page = 'nav-item';
        $bankrupt_page = 'nav-item';
        $am_page = 'nav-item';
}
$img_path ='/img/front/';
$creditors_path = '/main/creditor/';
$bankrupt_path = '/main/';
$am_path = '/am-login/';
$address_path = '/address/';
$news_path = '/news/';


//$this->registerCssFile("",['rel'=>'stylesheet']);
?>
<?php $this->beginPage() ?>
       <head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Банкротство агрегатор</title>
      
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<!--<script src="js-bootstrap-4.5.3/bootstrap.min.js"></script>-->
        <?php
        $js = <<<JS
        var __cs = __cs || [];
        __cs.push(["setCsAccount", "DevVt12iFkvcgE3V9WI1kf3tho9rU_FK"]);
        JS;
        $this->registerJs($js);
        ?>

</head>
<?php $this->head() ?>

<?php $this->beginBody() ?>
<body>
<div class="shadow-section"></div>

<header class="header-top">
    <div class="container">
        <div class="row header-top-row">
            <div class="col-lg-12 nav-border">

                <nav class="navbar navbar-expand-lg bg-dark navbar-dark indent-nav">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav">
                            <li class="<?= $bankrupt_page ?>">
                                <a class="nav-link main-text-p3" href="<?= $bankrupt_path ?>">Клиентам</a>
                            </li>
                            <li class="<?= $creditor_page ?>">
                                <a class="nav-link main-text-p3" href="<?= $creditors_path ?>">Кредиторам</a>
                            </li>
                            <li class="<?= $am_page ?>">
                                <a class="nav-link main-text-p3" href="<?= $am_path ?>">Арбитражным управляющим</a>
                            </li>
                        </ul>
                    </div>
                    <a class="navbar-brand" href="#"><img src="<?= $img_path ?>logo-head.png"></a>
                    <a class="nav-link news-articles main-text-p3" href="<?=$news_path?>">Новости и статьи</a>
                    <div class="footer-phone"><span><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.7" fill-rule="evenodd" clip-rule="evenodd" d="M10.0482 8.44375C9.79763 8.44375 9.57891 8.49943 9.39995 8.61477C8.87104 8.95284 8.44951 9.21534 8.24669 9.21534C8.13534 9.21534 8.01604 9.11591 7.75358 8.8892L7.70983 8.84943C6.98209 8.21705 6.82699 8.05398 6.54464 7.75966L6.47306 7.68409C6.42137 7.63239 6.37762 7.58466 6.33388 7.54091C6.08732 7.28636 5.90837 7.10341 5.27606 6.3875L5.24822 6.35568C4.94599 6.01364 4.74715 5.79091 4.73522 5.62784C4.72329 5.46875 4.86248 5.21023 5.21641 4.72898C5.6459 4.1483 5.66181 3.43239 5.26811 2.60114C4.95395 1.94489 4.44094 1.31648 3.9876 0.763636L3.94783 0.715909C3.55811 0.238636 3.10476 0 2.59971 0C2.03899 0 1.57371 0.302273 1.32715 0.461364C1.30727 0.473295 1.28738 0.489205 1.2675 0.501136C0.714731 0.851136 0.313079 1.33239 0.161963 1.82159C-0.0647118 2.55739 -0.215828 3.51193 0.869825 5.49659C1.80834 7.21477 2.65936 8.36818 4.01146 9.75625C5.28402 11.0608 5.84871 11.4824 7.11332 12.3972C8.52109 13.4153 9.87318 14 10.8196 14C11.6985 14 12.3905 14 13.3767 12.8108C14.4107 11.5619 13.9812 10.7983 13.3608 10.158C12.7802 9.56136 11.1298 8.44375 10.0482 8.44375Z" fill="#A2B6C8"/>
                            </svg></span> <a href="tel:+8800888888"><?= PHONE ?></a></div>
                    <a href="#"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="20" cy="20" r="20" fill="#D1D7DC"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.4082 19.4958C22.0492 19.4958 23.3794 18.0769 23.3794 16.3265C23.3794 14.5762 22.0492 13.1573 20.4082 13.1573C18.7673 13.1573 17.4371 14.5762 17.4371 16.3265C17.4371 18.0769 18.7673 19.4958 20.4082 19.4958ZM20.4082 21.2245C22.9442 21.2245 25.0001 19.0316 25.0001 16.3265C25.0001 13.6215 22.9442 11.4286 20.4082 11.4286C17.8722 11.4286 15.8164 13.6215 15.8164 16.3265C15.8164 19.0316 17.8722 21.2245 20.4082 21.2245Z" fill="#EEF1F4"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.0349 21.6071H19.1686C16.1977 21.6071 13.7893 23.9576 13.7893 26.8571C13.7893 26.9163 13.8385 26.9643 13.8991 26.9643H26.3044C26.3651 26.9643 26.4142 26.9163 26.4142 26.8571C26.4142 23.9576 24.0058 21.6071 21.0349 21.6071ZM19.1686 20C15.2882 20 12.1426 23.07 12.1426 26.8571C12.1426 27.8039 12.929 28.5714 13.8991 28.5714H26.3044C27.2745 28.5714 28.0609 27.8039 28.0609 26.8571C28.0609 23.07 24.9153 20 21.0349 20H19.1686Z" fill="#EEF1F4"/>
                        </svg></a>
                </nav>
            </div>
            <div class="collapse navbar-collapse drop-down-navbar-mobil" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="navbar-nav-icon-close">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon icon-close">
                                <svg width="19" height="20" viewBox="0 0 19 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect y="2" width="2" height="24" transform="rotate(-45 0 2)" fill="#11223F"/>
                                    <rect x="17" y="1" width="2" height="24" transform="rotate(45 17 1)" fill="#11223F"/>
                                </svg>
                            </span>
                        </button>
                        <a class="navbar-brand" href="#"><img src="<?= $img_path ?>logo-head.png"></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link main-text-p3" href="#">Клиентам</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link main-text-p3" href="#">Кредиторам</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link main-text-p3" href="#">Арбитражным управляющим</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link main-text-p3" href="#">Новости и статьи</a>
                    </li>
                   
                    <li class="nav-item footer-phone footer-phone-mobil">
                        <span><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.7" fill-rule="evenodd" clip-rule="evenodd" d="M10.0482 8.44375C9.79763 8.44375 9.57891 8.49943 9.39995 8.61477C8.87104 8.95284 8.44951 9.21534 8.24669 9.21534C8.13534 9.21534 8.01604 9.11591 7.75358 8.8892L7.70983 8.84943C6.98209 8.21705 6.82699 8.05398 6.54464 7.75966L6.47306 7.68409C6.42137 7.63239 6.37762 7.58466 6.33388 7.54091C6.08732 7.28636 5.90837 7.10341 5.27606 6.3875L5.24822 6.35568C4.94599 6.01364 4.74715 5.79091 4.73522 5.62784C4.72329 5.46875 4.86248 5.21023 5.21641 4.72898C5.6459 4.1483 5.66181 3.43239 5.26811 2.60114C4.95395 1.94489 4.44094 1.31648 3.9876 0.763636L3.94783 0.715909C3.55811 0.238636 3.10476 0 2.59971 0C2.03899 0 1.57371 0.302273 1.32715 0.461364C1.30727 0.473295 1.28738 0.489205 1.2675 0.501136C0.714731 0.851136 0.313079 1.33239 0.161963 1.82159C-0.0647118 2.55739 -0.215828 3.51193 0.869825 5.49659C1.80834 7.21477 2.65936 8.36818 4.01146 9.75625C5.28402 11.0608 5.84871 11.4824 7.11332 12.3972C8.52109 13.4153 9.87318 14 10.8196 14C11.6985 14 12.3905 14 13.3767 12.8108C14.4107 11.5619 13.9812 10.7983 13.3608 10.158C12.7802 9.56136 11.1298 8.44375 10.0482 8.44375Z" fill="#A2B6C8"/>
                            </svg>
                        </span> <a href="tel:+8800888888" class="nav-collapse-mobil-tell"><?= PHONE ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>

        <?= $content ?>

<footer id="footer-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 order-lg-0 order-md-1 order-sm-1 social-mobil-block">
                <a href="mailto:support@atra.com?subject=Вопрос по HTML" class="email-address"><?= EMAIL ?></a>
                <div class="footer-phone"><span><svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path opacity="0.7" fill-rule="evenodd" clip-rule="evenodd" d="M10.0482 8.44375C9.79763 8.44375 9.57891 8.49943 9.39995 8.61477C8.87104 8.95284 8.44951 9.21534 8.24669 9.21534C8.13534 9.21534 8.01604 9.11591 7.75358 8.8892L7.70983 8.84943C6.98209 8.21705 6.82699 8.05398 6.54464 7.75966L6.47306 7.68409C6.42137 7.63239 6.37762 7.58466 6.33388 7.54091C6.08732 7.28636 5.90837 7.10341 5.27606 6.3875L5.24822 6.35568C4.94599 6.01364 4.74715 5.79091 4.73522 5.62784C4.72329 5.46875 4.86248 5.21023 5.21641 4.72898C5.6459 4.1483 5.66181 3.43239 5.26811 2.60114C4.95395 1.94489 4.44094 1.31648 3.9876 0.763636L3.94783 0.715909C3.55811 0.238636 3.10476 0 2.59971 0C2.03899 0 1.57371 0.302273 1.32715 0.461364C1.30727 0.473295 1.28738 0.489205 1.2675 0.501136C0.714731 0.851136 0.313079 1.33239 0.161963 1.82159C-0.0647118 2.55739 -0.215828 3.51193 0.869825 5.49659C1.80834 7.21477 2.65936 8.36818 4.01146 9.75625C5.28402 11.0608 5.84871 11.4824 7.11332 12.3972C8.52109 13.4153 9.87318 14 10.8196 14C11.6985 14 12.3905 14 13.3767 12.8108C14.4107 11.5619 13.9812 10.7983 13.3608 10.158C12.7802 9.56136 11.1298 8.44375 10.0482 8.44375Z" fill="#A2B6C8"/>
                        </svg></span> <a href="tel:+8800888888"><?= PHONE ?></a></div>
                <div class="footer-social-flex">
                    <a href="<?= INSTA ?>" class="social-svg">
                        <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5 0C7.3873 0 0 7.3873 0 16.5C0 25.6127 7.3873 33 16.5 33C25.6127 33 33 25.6127 33 16.5C33 7.3873 25.6127 0 16.5 0ZM15.6736 8.00234H15.6749L16.0001 8.00244C18.6057 8.00244 18.9145 8.01179 19.9434 8.05856C20.8949 8.10207 21.4113 8.26108 21.7553 8.39467C22.2107 8.57157 22.5354 8.78303 22.8767 9.12463C23.2183 9.46623 23.4297 9.79156 23.607 10.247C23.7406 10.5907 23.8998 11.1071 23.9431 12.0587C23.9898 13.0876 24 13.3966 24 16.0013C24 18.606 23.9898 18.9151 23.9431 19.9439C23.8996 20.8955 23.7406 21.412 23.607 21.7556C23.4301 22.2111 23.2183 22.5354 22.8767 22.8768C22.5352 23.2184 22.2109 23.4299 21.7553 23.6068C21.4117 23.741 20.8949 23.8996 19.9434 23.9431C18.9147 23.9898 18.6057 24 16.0001 24C13.3943 24 13.0855 23.9898 12.0568 23.9431C11.1053 23.8991 10.5889 23.7401 10.2447 23.6066C9.7893 23.4297 9.46401 23.2182 9.12245 22.8766C8.7809 22.535 8.56946 22.2105 8.39218 21.7548C8.25861 21.4112 8.09942 20.8947 8.05611 19.9431C8.00935 18.9143 8 18.6052 8 15.9989C8 13.3926 8.00935 13.0851 8.05611 12.0563C8.09962 11.1047 8.25861 10.5882 8.39218 10.2442C8.56905 9.78871 8.7809 9.46338 9.12245 9.12178C9.46401 8.78019 9.7893 8.56872 10.2447 8.39141C10.5887 8.25722 11.1053 8.09862 12.0568 8.0549C12.957 8.01423 13.3059 8.00203 15.1247 8V8.00244C15.2943 8.00218 15.4768 8.00226 15.6736 8.00234ZM16 12.75C17.7964 12.75 19.2529 14.2065 19.2529 16.0033C19.2529 17.8 17.7964 19.2566 16 19.2566C14.2034 19.2566 12.7471 17.8 12.7471 16.0033C12.7471 14.2065 14.2034 12.75 16 12.75ZM20.0376 10.7942C20.0376 10.1474 20.5621 9.62345 21.2086 9.62345V9.62305C21.8552 9.62305 22.3797 10.1476 22.3797 10.7942C22.3797 11.4408 21.8552 11.9654 21.2086 11.9654C20.5621 11.9654 20.0376 11.4408 20.0376 10.7942ZM16.0001 10.9915C13.2325 10.9915 10.9886 13.2357 10.9886 16.0037C10.9886 18.7716 13.2325 21.0148 16.0001 21.0148C18.7676 21.0148 21.0107 18.7716 21.0107 16.0037C21.0107 13.2358 18.7676 10.9916 16.0001 10.9915Z" fill="#3951D2"/>
                        </svg>
                    </a>
                    <a href="<?= VK ?>" class="social-svg">
                        <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5 0C7.3873 0 0 7.3873 0 16.5C0 25.6127 7.3873 33 16.5 33C25.6127 33 33 25.6127 33 16.5C33 7.3873 25.6127 0 16.5 0ZM21.3894 17.3626C21.1753 17.7039 21.0896 17.8738 21.3894 18.2556C21.4119 18.2869 21.5255 18.4018 21.6972 18.5756C22.4228 19.3099 24.1864 21.0944 24.4982 22.0566C24.6666 22.6223 24.3738 22.9091 23.7958 22.9091H21.768C21.2269 22.9091 20.954 22.6087 20.3635 21.9588C20.1123 21.6824 19.8037 21.3427 19.3926 20.9361C18.1871 19.7868 17.6709 19.6371 17.3711 19.6371C16.8217 19.6371 16.8231 19.7923 16.836 21.2339C16.8383 21.4897 16.841 21.786 16.841 22.1291C16.841 22.6223 16.6833 22.9091 15.3921 22.9091C13.2438 22.9091 10.8823 21.6179 9.20538 19.2351C6.6893 15.7442 6 13.1018 6 12.5704C6 12.2696 6.11669 12.0008 6.69548 12.0008H8.72396C9.24402 12.0008 9.43953 12.2252 9.63967 12.7808C10.6311 15.6444 12.3041 18.1465 12.9934 18.1465C13.2523 18.1465 13.369 18.0273 13.369 17.379V14.4203C13.3222 13.5773 13.0252 13.2128 12.8053 12.9429C12.6694 12.7762 12.563 12.6456 12.563 12.4605C12.563 12.2384 12.7554 12 13.0792 12H16.2676C16.6949 12 16.8394 12.2283 16.8394 12.7395V16.7174C16.8394 17.1436 17.0365 17.2932 17.1632 17.2932C17.4205 17.2932 17.6384 17.1436 18.1098 16.6769C19.5703 15.0616 20.6027 12.5696 20.6027 12.5696C20.7302 12.2688 20.9682 12 21.4844 12H23.5122C24.1249 12 24.2517 12.3132 24.1249 12.7395L24.1234 12.7403C23.8684 13.9099 21.3933 17.3587 21.3894 17.3626Z" fill="#3951D2"/>
                        </svg>
                    </a>
                    <a href="<?= YOUTUBE ?>" class="social-svg">
                        <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5 0C7.3873 0 0 7.3873 0 16.5C0 25.6127 7.3873 33 16.5 33C25.6127 33 33 25.6127 33 16.5C33 7.3873 25.6127 0 16.5 0ZM17.3197 16.9989V26H13.7723V16.9993H12V13.8975H13.7723V12.0352C13.7723 9.50471 14.773 8 17.6162 8H19.9832V11.1022H18.5037C17.3969 11.1022 17.3237 11.5356 17.3237 12.3446L17.3197 13.8971H20L19.6864 16.9989H17.3197Z" fill="#3951D2"/>
                        </svg>
                    </a>
                    <a href="<?= TIKTOK ?>" class="social-svg">
                        <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.5 0C7.38871 0 0 7.38871 0 16.5C0 25.6113 7.38871 33 16.5 33C25.6113 33 33 25.6113 33 16.5C33 7.38871 25.6113 0 16.5 0ZM24.7777 12.6246V14.8588C23.7242 14.8592 22.7006 14.6527 21.7353 14.2454C21.1145 13.9834 20.5362 13.6457 20.0072 13.2376L20.0231 20.1143C20.0164 21.6628 19.4038 23.1177 18.295 24.2136C17.3927 25.1057 16.2493 25.6729 15.01 25.8565C14.7188 25.8997 14.4224 25.9218 14.1227 25.9218C12.7961 25.9218 11.5366 25.492 10.5063 24.6991C10.3124 24.5498 10.127 24.388 9.95047 24.2136C8.7488 23.0259 8.12915 21.4163 8.2335 19.7229C8.3131 18.4339 8.82918 17.2046 9.6895 16.2411C10.8277 14.9661 12.4201 14.2584 14.1227 14.2584C14.4224 14.2584 14.7188 14.2809 15.01 14.324V15.15V17.4479C14.7339 17.3568 14.439 17.3068 14.1319 17.3068C12.5764 17.3068 11.318 18.5758 11.3412 20.1325C11.356 21.1285 11.9 21.9991 12.7025 22.4791C13.0796 22.7046 13.5134 22.8444 13.9764 22.8698C14.3391 22.8897 14.6874 22.8392 15.01 22.7327C16.1213 22.3656 16.9231 21.3217 16.9231 20.0905L16.9267 15.4855V7.07824H20.0035C20.0064 7.38311 20.0374 7.68056 20.0949 7.96879C20.3271 9.13546 20.9847 10.1476 21.8999 10.8377C22.698 11.4396 23.6917 11.7964 24.7688 11.7964C24.7695 11.7964 24.7784 11.7964 24.7776 11.7957V12.6246H24.7777Z" fill="#3951D2"/>
                        </svg>
                    </a>
                </div>
                <div class="footer-year footer-year-desktop main-name-p3">© 2021 АТРА</div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 order-lg-1 order-md-0 order-sm-0">
                <div class="footer-menu">
                    <p class="main-name-p2">Услуги</p>
                    <ul class="footer-menu-ul">
                        <li><a href="<?=$bankrupt_path?>" class="memu-name">Гражданам</a></li>
                        <li><a href="<?=$creditors_path?>" class="memu-name">Кредиторам</a></li>
                        <li><a href="#" class="memu-name">Управляющим</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 order-lg-1 order-md-0 order-sm-0">
                <div class="footer-menu">
                    <p class="main-name-p2">Другое</p>
                    <ul class="footer-menu-ul">
                        <li><a href="<?=$news_path?>" class="memu-name">Новости</a></li>
                        <li><a href="<?=$address_path?>" class="memu-name">Адреса</a></li>
                        <li><a href="#" class="memu-name">Политика конфиденциальности</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 text-lg-right text-md-left order-lg-1 order-md-1 order-sm-2 logo-mobil-block">
                <a href="#" class="footer-logo">
                    <img src="<?= $img_path ?>logo-footer.png">
                </a>
                <div class="footer-year footer-year-mobil main-name-p3">© 2021 АТРА</div>
            </div>
        </div>
    </div>  
</footer>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<?php $this->endBody() ?>

</body>

<?php $this->endPage() ?>
</html>
