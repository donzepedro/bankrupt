<?php
$img_path ='/img/front/';
?>
<section class="news-wrapper desktop-news-read">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="main-name-h2"><?= $interesting->title ?></h2>
				<div class="steps-border"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-7">
				<div class="navigation-news-block">
					<div class="news-block-img" style="background-image: url('<?= str_replace('../web', '',$interesting->img_path)?>"></div>
                                        <div class="main-name-p3 mb-3">
                                        <?= $interesting->text ?>
                                        </div>
<!--					<p class="main-name-p3 mb-3">
						В первые месяцы пандемии на рынке недвижимости произошло колоссальное снижение спроса, которое было отыграно за последующие летние и осенние месяцы. Введение льготной ипотечной ставки 6,5% как нельзя лучше простимулировало спрос, а на фоне роста спроса стали расти и цены.
					</p>
					<p class="main-name-p3 mb-3">
						В столичном регионе в июле 2020 года был зафиксирован нетипичный для этого месяца рост цен на квартиры – 8% к средней стоимости кв. м в июне. По итогам июля средняя стоимость «квадрата» составила более 250 тыс. рублей. Последующий рост цен в Москве остается традиционным до сегодняшнего дня – порядка 1-2% к цене предыдущего месяца.
					</p>
					<p class="main-name-p3 mb-3">
						Вполне ожидаемо, что в декабре средняя стоимость кв. м. по рынку вырастет еще на 1% несмотря на новогодние скидки. Стоит отметить, что в 2018 и 2019 годах в декабре цена вырастала на 2,5% относительно ноября. Что касается января и мая, традиционных месяцев снижения деловой активности, то возможен около нулевой рост цен (не более +0,3%). А с февраля по апрель рост цен может составить до 2-3%. Таким образом, спустя полгода средняя стоимость за «квадрат» в Москве (в пределах МКАД) будет колебаться в районе 275 - 280 тыс. рублей.
					</p>-->
					<div class="news-read-socials">
						<p class="main-text-p2">Поделиться: </p>
						<a href="#" class="social-link">
							<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M16 0C7.16344 0 0 7.16344 0 16C0 24.8366 7.16344 32 16 32C24.8366 32 32 24.8366 32 16C32 7.16344 24.8366 0 16 0ZM15.1997 7.75985H15.1999L15.5153 7.75994C18.0419 7.75994 18.3413 7.76901 19.3391 7.81436C20.2617 7.85656 20.7625 8.01074 21.096 8.14028C21.5377 8.31182 21.8525 8.51688 22.1835 8.84813C22.5147 9.17937 22.7197 9.49485 22.8916 9.93651C23.0212 10.2697 23.1755 10.7705 23.2175 11.6933C23.2629 12.691 23.2727 12.9907 23.2727 15.5164C23.2727 18.0422 23.2629 18.3419 23.2175 19.3396C23.1753 20.2623 23.0212 20.7631 22.8916 21.0964C22.7201 21.538 22.5147 21.8525 22.1835 22.1836C21.8523 22.5148 21.5378 22.7199 21.096 22.8914C20.7629 23.0215 20.2617 23.1753 19.3391 23.2175C18.3415 23.2629 18.0419 23.2727 15.5153 23.2727C12.9884 23.2727 12.689 23.2629 11.6914 23.2175C10.7688 23.1749 10.268 23.0207 9.93426 22.8912C9.49265 22.7197 9.17722 22.5146 8.84602 22.1834C8.51481 21.8521 8.30978 21.5374 8.13787 21.0956C8.00834 20.7624 7.85398 20.2615 7.81199 19.3388C7.76664 18.3411 7.75758 18.0414 7.75758 15.5141C7.75758 12.9867 7.76664 12.6886 7.81199 11.6909C7.85418 10.7682 8.00834 10.2674 8.13787 9.93375C8.30939 9.49209 8.51481 9.17661 8.84602 8.84537C9.17722 8.51412 9.49265 8.30906 9.93426 8.13713C10.2678 8.007 10.7688 7.8532 11.6914 7.81081C12.5644 7.77138 12.9027 7.75955 14.6663 7.75758V7.75994C14.8311 7.75968 15.0084 7.75976 15.1997 7.75985ZM15.5139 12.3634C17.2559 12.3634 18.6683 13.7757 18.6683 15.5181C18.6683 17.2603 17.2559 18.6729 15.5139 18.6729C13.7718 18.6729 12.3596 17.2603 12.3596 15.5181C12.3596 13.7757 13.7718 12.3634 15.5139 12.3634ZM19.4297 10.4669C19.4297 9.83971 19.9383 9.3316 20.5652 9.3316V9.3312C21.1922 9.3312 21.7008 9.8399 21.7008 10.4669C21.7008 11.0939 21.1922 11.6026 20.5652 11.6026C19.9383 11.6026 19.4297 11.0939 19.4297 10.4669ZM15.5147 10.6584C12.8309 10.6584 10.6551 12.8346 10.6551 15.5186C10.6551 18.2027 12.8309 20.3779 15.5147 20.3779C18.1984 20.3779 20.3735 18.2027 20.3735 15.5186C20.3735 12.8346 18.1983 10.6585 15.5147 10.6584Z" fill="#3951D2"/>
							</svg>
						</a>
						<a href="#" class="social-link">
							<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M16 0C7.16344 0 0 7.16344 0 16C0 24.8366 7.16344 32 16 32C24.8366 32 32 24.8366 32 16C32 7.16344 24.8366 0 16 0ZM20.7412 16.8365C20.5337 17.1674 20.4505 17.3321 20.7412 17.7024C20.763 17.7327 20.8732 17.8442 21.0397 18.0127C21.7433 18.7247 23.4534 20.4552 23.7558 21.3882C23.9192 21.9368 23.6352 22.2149 23.0747 22.2149H21.1084C20.5837 22.2149 20.3191 21.9236 19.7464 21.2934C19.5028 21.0253 19.2036 20.696 18.8049 20.3017C17.636 19.1872 17.1354 19.0421 16.8447 19.0421C16.312 19.0421 16.3133 19.1925 16.3258 20.5904C16.3281 20.8385 16.3306 21.1258 16.3306 21.4585C16.3306 21.9368 16.1778 22.2149 14.9256 22.2149C12.8425 22.2149 10.5525 20.9628 8.92643 18.6522C6.48659 15.2671 5.81818 12.7048 5.81818 12.1895C5.81818 11.8978 5.93133 11.6371 6.49259 11.6371H8.4596C8.9639 11.6371 9.15348 11.8547 9.34756 12.3935C10.309 15.1703 11.9313 17.5966 12.5997 17.5966C12.8507 17.5966 12.9639 17.481 12.9639 16.8523V13.9833C12.9185 13.1658 12.6305 12.8124 12.4172 12.5507C12.2855 12.3891 12.1823 12.2624 12.1823 12.0829C12.1823 11.8676 12.3689 11.6364 12.6829 11.6364H15.7746C16.189 11.6364 16.3291 11.8578 16.3291 12.3534V16.2108C16.3291 16.6241 16.5202 16.7692 16.6431 16.7692C16.8926 16.7692 17.104 16.6241 17.561 16.1715C18.9773 14.6051 19.9784 12.1887 19.9784 12.1887C20.102 11.897 20.3328 11.6364 20.8334 11.6364H22.7997C23.3939 11.6364 23.5168 11.9401 23.3939 12.3534L23.3924 12.3542C23.1451 13.4884 20.745 16.8327 20.7412 16.8365Z" fill="#3951D2"/>
							</svg>
						</a>
						<a href="#" class="social-link">
							<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M16 0C7.16344 0 0 7.16344 0 16C0 24.8366 7.16344 32 16 32C24.8366 32 32 24.8366 32 16C32 7.16344 24.8366 0 16 0ZM16.7948 16.4838V25.2121H13.3549V16.4842H11.6364V13.4763H13.3549V11.6705C13.3549 9.21669 14.3253 7.75758 17.0824 7.75758H19.3777V10.7657H17.943C16.8697 10.7657 16.7987 11.1861 16.7987 11.9706L16.7948 13.476H19.3939L19.0898 16.4838H16.7948Z" fill="#3951D2"/>
							</svg>
						</a>
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="desktop-link-search">
					<h4 class="main-text-h4">Интересные статьи</h4>
					<div class="link-search-border"></div>
                                        <?php foreach($news as $eachnews):?>
                                        <a  href="<?=INTRESTINGPGAES . '?id=' . $eachnews->id?>" class="link-search-a main-text-p2"><?=$eachnews->title?></a>
                                        <?php endforeach;?>
				</div>
				</div>
			</div>
		</div>
	</div>
</section>