<?php
/** @var $this \yii\web\View */
use yii\helpers\Html;

$this->registerCssFile('plugins/slick/slick.css');
$this->registerCssFile('plugins/slick/slick-theme.css');
$this->registerJsFile('plugins/slick/slick.min.js',['depends' =>'yii\web\YiiAsset']);

$js = <<<JS
$(".regular").slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 3,
		dots: true,
		arrows: false,
		responsive: [
			{
				breakpoint: 991,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2,
					infinite: true,
					dots: true
				}
			},
			{
				breakpoint: 600,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			},
			{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}]
	});
JS;
$this->registerJs($js);

?>

<section id="customer-reviews">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="main-name-h2">Отзывы клиентов</h2>
				<div class="steps-border"></div>
			</div>
		</div>
		<div class="row carousel-row">
			<div class="col-lg-12">
				<div class="regular slider">
					<div>
						<div class="carousel-block-wrap"> <!-- carousel-block-wrap -->
							<div class="">
								<div class="steps-block-flex">
									<div class="steps-block-img">
										<?= Html::img('img/bankrut-img2.png') ?>
									</div>
									<div class="customer-block-name">
										<h4 class="main-text-h4">Просто дали начать снова жить!</h4>
									</div>
								</div>
								<div class="customer-text">
									<p class="main-name-p3">
										Мне порекомендовала обратиться в компанию коллега еще год назад. Сначала даже не поверила, что избавиться от долгов можно так легко. Решила даже позвонить в другие конторы, однако самым выгодным и адекватным вариантом стал тот, который посоветовала знакомая. Меня порадовала, что компания сама собирает пакет документов, оформляет все за считанные дни. Фирма быстро избавила меня от долгов, и я смогла спокойно жить, работать без звонков коллекторов и нервотрепки.								</p>
								</div>
								<div class="customer-name">
									<p class="main-name-p2">Марина Иванова</p>
								</div>
							</div>
						</div> <!-- //carousel-block-wrap -->
					</div>
					<div>
						<div class="carousel-block-wrap"> <!-- carousel-block-wrap -->
							<div class="carousel-customer-block">
								<div class="">
									<div class="steps-block-flex">
										<div class="steps-block-img">
											<?= Html::img('img/bankrut-img1.png') ?>
										</div>
										<div class="customer-block-name">
											<h4 class="main-text-h4">Всем советую!</h4>
										</div>
									</div>
									<div class="customer-text">
										<p class="main-name-p3">
											Спасибо большое компании по списанию долгов. Процедура прошла законно, прозрачно, легально. В свое время, я брал кредит на собственное дело, но бизнес не пошел и не поехал, а вот долги стали копиться моментально. Естественно, что коллекторы и проблемы не заставили себя ждать. Поэтому и решил обратиться за банкротством, и затем был приятно удивлен, что мне быстро помогли с долгами.								</div>
									<div class="customer-name">
										<p class="main-name-p2">Сергей Иванов</p>
									</div>
								</div>
							</div>
						</div> <!-- //carousel-block-wrap -->
					</div>
					<div>
						<div class="carousel-block-wrap"> <!-- carousel-block-wrap -->
							<div class="carousel-customer-block">
								<div class="">
									<div class="steps-block-flex">
										<div class="steps-block-img">
											<?= Html::img('img/bankrut-img3.png') ?>
										</div>
										<div class="customer-block-name">
											<h4 class="main-text-h4">Проверенная фирма.</h4>
										</div>
									</div>
									<div class="customer-text">
										<p class="main-name-p3">
											Отвечаю за то, что говорю. Я сам успешно списал долги, а затем посоветовал знакомым, попавшим в тяжелую жизненную ситуацию, тоже обратиться в эту же компанию. Помогли и мне, и моим друзьям. Естественно, как камень с плеч!								</div>
									<div class="customer-name">
										<p class="main-name-p2">Иван Иванов</p>
									</div>
								</div>
							</div>
						</div><!-- //carousel-block-wrap -->
					</div>
					<div>
						<div class="carousel-block-wrap"> <!-- carousel-block-wrap -->
							<div class="">
								<div class="steps-block-flex">
									<div class="steps-block-img">
										<?= Html::img('img/bankrut-img2.png') ?>
									</div>
									<div class="customer-block-name">
										<h4 class="main-text-h4">Просто дали начать снова жить!</h4>
									</div>
								</div>
								<div class="customer-text">
									<p class="main-name-p3">
										Мне порекомендовала обратиться в компанию коллега еще год назад. Сначала даже не поверила, что избавиться от долгов можно так легко. Решила даже позвонить в другие конторы, однако самым выгодным и адекватным вариантом стал тот, который посоветовала знакомая. Меня порадовала, что компания сама собирает пакет документов, оформляет все за считанные дни. Фирма быстро избавила меня от долгов, и я смогла спокойно жить, работать без звонков коллекторов и нервотрепки.								</p>
								</div>
								<div class="customer-name">
									<p class="main-name-p2">Марина Иванова</p>
								</div>
							</div>
						</div> <!-- //carousel-block-wrap -->
					</div>
					<div>
						<div class="carousel-block-wrap"> <!-- carousel-block-wrap -->
							<div class="carousel-customer-block">
								<div class="">
									<div class="steps-block-flex">
										<div class="steps-block-img">
											<?= Html::img('img/bankrut-img1.png') ?>
										</div>
										<div class="customer-block-name">
											<h4 class="main-text-h4">Всем советую!</h4>
										</div>
									</div>
									<div class="customer-text">
										<p class="main-name-p3">
											Спасибо большое компании по списанию долгов. Процедура прошла законно, прозрачно, легально. В свое время, я брал кредит на собственное дело, но бизнес не пошел и не поехал, а вот долги стали копиться моментально. Естественно, что коллекторы и проблемы не заставили себя ждать. Поэтому и решил обратиться за банкротством, и затем был приятно удивлен, что мне быстро помогли с долгами.								</div>
									<div class="customer-name">
										<p class="main-name-p2">Сергей Иванов</p>
									</div>
								</div>
							</div>
						</div> <!-- //carousel-block-wrap -->
					</div>
					<div>
						<div class="carousel-block-wrap"> <!-- carousel-block-wrap -->
							<div class="carousel-customer-block">
								<div class="">
									<div class="steps-block-flex">
										<div class="steps-block-img">
											<?= Html::img('img/bankrut-img3.png') ?>
										</div>
										<div class="customer-block-name">
											<h4 class="main-text-h4">Проверенная фирма.</h4>
										</div>
									</div>
									<div class="customer-text">
										<p class="main-name-p3">
											Отвечаю за то, что говорю. Я сам успешно списал долги, а затем посоветовал знакомым, попавшим в тяжелую жизненную ситуацию, тоже обратиться в эту же компанию. Помогли и мне, и моим друзьям. Естественно, как камень с плеч!								</div>
									<div class="customer-name">
										<p class="main-name-p2">Иван Иванов</p>
									</div>
								</div>
							</div>
						</div><!-- //carousel-block-wrap -->
					</div>
					<div>
						<div class="carousel-block-wrap"> <!-- carousel-block-wrap -->
							<div class="">
								<div class="steps-block-flex">
									<div class="steps-block-img">
										<?= Html::img('img/bankrut-img2.png') ?>
									</div>
									<div class="customer-block-name">
										<h4 class="main-text-h4">Просто дали начать снова жить!</h4>
									</div>
								</div>
								<div class="customer-text">
									<p class="main-name-p3">
										Мне порекомендовала обратиться в компанию коллега еще год назад. Сначала даже не поверила, что избавиться от долгов можно так легко. Решила даже позвонить в другие конторы, однако самым выгодным и адекватным вариантом стал тот, который посоветовала знакомая. Меня порадовала, что компания сама собирает пакет документов, оформляет все за считанные дни. Фирма быстро избавила меня от долгов, и я смогла спокойно жить, работать без звонков коллекторов и нервотрепки.								</p>
								</div>
								<div class="customer-name">
									<p class="main-name-p2">Марина Иванова</p>
								</div>
							</div>
						</div> <!-- //carousel-block-wrap -->
					</div>
					<div>
						<div class="carousel-block-wrap"> <!-- carousel-block-wrap -->
							<div class="carousel-customer-block">
								<div class="">
									<div class="steps-block-flex">
										<div class="steps-block-img">
											<?= Html::img('img/bankrut-img1.png') ?>
										</div>
										<div class="customer-block-name">
											<h4 class="main-text-h4">Всем советую!</h4>
										</div>
									</div>
									<div class="customer-text">
										<p class="main-name-p3">
											Спасибо большое компании по списанию долгов. Процедура прошла законно, прозрачно, легально. В свое время, я брал кредит на собственное дело, но бизнес не пошел и не поехал, а вот долги стали копиться моментально. Естественно, что коллекторы и проблемы не заставили себя ждать. Поэтому и решил обратиться за банкротством, и затем был приятно удивлен, что мне быстро помогли с долгами.								</div>
									<div class="customer-name">
										<p class="main-name-p2">Сергей Иванов</p>
									</div>
								</div>
							</div>
						</div> <!-- //carousel-block-wrap -->
					</div>
					<div>
						<div class="carousel-block-wrap"> <!-- carousel-block-wrap -->
							<div class="carousel-customer-block">
								<div class="">
									<div class="steps-block-flex">
										<div class="steps-block-img">
											<?= Html::img('img/bankrut-img3.png') ?>
										</div>
										<div class="customer-block-name">
											<h4 class="main-text-h4">Проверенная фирма.</h4>
										</div>
									</div>
									<div class="customer-text">
										<p class="main-name-p3">
											Отвечаю за то, что говорю. Я сам успешно списал долги, а затем посоветовал знакомым, попавшим в тяжелую жизненную ситуацию, тоже обратиться в эту же компанию. Помогли и мне, и моим друзьям. Естественно, как камень с плеч!								</div>
									<div class="customer-name">
										<p class="main-name-p2">Иван Иванов</p>
									</div>
								</div>
							</div>
						</div><!-- //carousel-block-wrap -->
					</div>
				</div>
			</div>
		</div>
	</div>

</section>
