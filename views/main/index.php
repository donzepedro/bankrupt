<!doctype html>
<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\ActiveForm;
use kartik\select2\Select2;

$img_path ='/img/front/';
//var_dump(\Yii::$app->user->identity->id);
//die;
?>

<html lang="en">

<body>


<section id="main-banner">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="main-telephone-flex">
					<div class="block-50 main-telephone-text">
						<h1 class="main-name-h1">Приступите к процессу своего банкротства</h1>
						<p class="main-text-p3">С помощью максимально удобного поиска соответствующего специалиста, занимающегося в РФ процедурой банкротства</p>
						<div class="main-telephone-img main-telephone-img-mobil">
							<div class="telephone-block">
                                                            <div class="img-telephone"></div>
								<div class="telephone-absolute img-absolute-1">
									<svg width="65" height="61" viewBox="0 0 65 61" fill="none" xmlns="http://www.w3.org/2000/svg">
										<circle cx="32.8801" cy="30.0722" r="18.5325" stroke="#454F5B" stroke-width="4"/>
										<path d="M32.042 20.1667V31.9092H39.3578" stroke="#454F5B" stroke-width="4" stroke-linecap="round"/>
									</svg>
								</div>
								<div class="telephone-absolute img-absolute-2">
									<svg width="33" height="36" viewBox="0 0 33 36" fill="none" xmlns="http://www.w3.org/2000/svg">
										<circle cx="16.5405" cy="9.64258" r="8.09027" stroke="#454F5B" stroke-width="3"/>
										<path d="M1.68066 31.4181C1.68066 24.2706 7.47491 18.4763 14.6225 18.4763H18.4586C25.6061 18.4763 31.4004 24.2706 31.4004 31.4181C31.4004 32.5837 30.4555 33.5286 29.2899 33.5286H3.79112C2.62555 33.5286 1.68066 32.5837 1.68066 31.4181Z" stroke="#454F5B" stroke-width="3"/>
									</svg>
								</div>
								<div class="telephone-absolute img-absolute-3">
									<svg width="32" height="39" viewBox="0 0 32 39" fill="none" xmlns="http://www.w3.org/2000/svg">
										<circle cx="17.087" cy="14.5652" r="12.087" stroke="#454F5B" stroke-width="4"/>
										<path d="M3.21272 35.3225L9.91992 26.0883" stroke="#454F5B" stroke-width="4" stroke-linecap="round"/>
									</svg>
								</div>
								<div class="telephone-absolute img-absolute-4">
									<svg width="20" height="29" viewBox="0 0 20 29" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M10.0009 1C5.03016 1 1 5.02973 1 10.0004C1 17.7676 8.67526 18.8179 9.3205 26.7152C9.34869 27.0742 9.63922 27.3574 10.0004 27.3574C10.3608 27.3574 10.6509 27.0742 10.6786 26.7152C11.3243 18.8179 19 17.7676 19 10.0004C19.0009 5.02973 14.9703 1 10.0009 1Z" stroke="#454F5B" stroke-width="2"/>
										<circle cx="9.94023" cy="10.0606" r="3.29472" stroke="#454F5B" stroke-width="2"/>
									</svg>
								</div>
								<div class="telephone-absolute img-absolute-5">
									<svg width="24" height="17" viewBox="0 0 24 17" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M0.211159 15.3854C-0.128274 15.8211 -0.050262 16.4494 0.385403 16.7888C0.821068 17.1283 1.44941 17.0503 1.78884 16.6146L0.211159 15.3854ZM20.9743 0.774756C20.8499 0.236663 20.3128 -0.0987014 19.7748 0.0256977L11.006 2.0529C10.4679 2.1773 10.1326 2.71435 10.257 3.25244C10.3814 3.79054 10.9184 4.1259 11.4565 4.0015L19.2509 2.19955L21.0529 9.99397C21.1773 10.5321 21.7144 10.8674 22.2524 10.743C22.7905 10.6186 23.1259 10.0816 23.0015 9.54348L20.9743 0.774756ZM7.15753 9.71577L6.54685 10.5076L7.15753 9.71577ZM1.78884 16.6146L6.54685 10.5076L4.96916 9.27846L0.211159 15.3854L1.78884 16.6146ZM6.54685 10.5076L10.6673 13.6853L11.8887 12.1015L7.76821 8.9239L6.54685 10.5076ZM13.5851 13.1609L20.8482 1.52966L19.1518 0.470336L11.8887 12.1015L13.5851 13.1609ZM10.6673 13.6853C11.6037 14.4074 12.9588 14.1639 13.5851 13.1609L11.8887 12.1015L11.8887 12.1015L10.6673 13.6853ZM6.54685 10.5076L7.76821 8.9239C6.89659 8.25172 5.64565 8.41018 4.96916 9.27846L6.54685 10.5076Z" fill="#454F5B"/>
									</svg>
								</div>
								<div class="telephone-absolute img-absolute-6">
									<svg width="34" height="31" viewBox="0 0 34 31" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0)">
											<path d="M12.3436 24V20.736H10.2556V19.176H12.3436V17.04H10.2556V15.216H12.3436V6.864H16.8556C18.9516 6.864 20.5036 7.288 21.5116 8.136C22.5356 8.984 23.0476 10.216 23.0476 11.832C23.0476 13.464 22.4956 14.744 21.3916 15.672C20.2876 16.584 18.6636 17.04 16.5196 17.04H14.5036V19.176H18.4636V20.736H14.5036V24H12.3436ZM16.2076 15.216C17.6636 15.216 18.7916 14.976 19.5916 14.496C20.4076 14.016 20.8156 13.152 20.8156 11.904C20.8156 10.816 20.4796 10.008 19.8076 9.48C19.1356 8.952 18.0876 8.688 16.6636 8.688H14.5036V15.216H16.2076Z" fill="#454F5B"/>
										</g>
										<defs>
											<clipPath id="clip0">
												<rect width="33" height="30" fill="white" transform="translate(0.389648 0.0100098)"/>
											</clipPath>
										</defs>
									</svg>
								</div>
							</div>
						</div>
						<div class="main-banner-location">

                                                                <?php $form = ActiveForm::begin(['method'=>'post','action'=>'/search-managers/']) ?>						                            		
                                                    <div class="form-group">
                                                                        <p class="main-text-p4 indent-p5">Регион</p>                                                                       
                                                                        <?= $form->field($search_model, 'region')->widget(Select2::classname(), [
                                                                                        'data' => ArrayHelper::map(\app\models\Regions::find(['id','region'])->all(), 'id', 'region'),
                                                                                        'options' => ['placeholder' => 'Выберите регион ...'],
                                                                                        'pluginOptions' => [
                                                                                            'allowClear' => true
                                                                                        ],
                                                                                    ])->label('');                                                                            
                                                                        ?>
                                                                        <?php //  $form->field($search_model, 'region')->dropDownList(ArrayHelper::map(\app\models\Regions::find()->all(), 'id', 'region'))->label('') ?>
                                                                        <!--ArrayHelper::map(\app\models\Regions::find()->all(), 'id', 'region')-->
									<p class="main-text-p4 indent-p5">Вы являетесь:</p>
								</div>
								<div class="form-group form-check form-check-flex">
									<div class="checkbox-human">
										<div class="main-name-p3">
                                                                                    <?=$form->field($search_model,'b_phys')->checkbox([])->label('Физическим лицом') ?>
											<!--<input type="checkbox" id="cb1"> <label for="cb1" class="main-name-p3">Физическим лицом</label>-->
										</div>
										<div class="main-name-p3 mt-2">
                                                                                    <?=$form->field($search_model,'b_legal')->checkbox([])->label('Юридическим лицом') ?>
											<!--<input type="checkbox" id="cb2"> <label for="cb2" class="main-name-p3">Юридическим лицом</label>-->
										</div>
                                                                        </div>
                                                                        <div class="checkbox-toggle">
                                                                            
                                                                                <?= $form->field($search_model, 'goverment_secret')->checkbox([
                                                                                'template' => "<div class=\"custom-control custom-switch\">{input} {label}</div>\n<div>{error}</div>",
                                                                                'class' => 'custom-control-input'])->label('Допуск к гос.тайне', ['class' => 'custom-control-label main-name-p3']) ?>
                                                                        </div>
									<div class="checkbox-block-flex">
                                                                            <?= Html::submitButton('Поиск', ['class' => 'btn button-search', 'name' => 'Search-button']) ?>
										<!--<button type="submit" class="">Поиск</button>-->
									</div>
								</div>
                                                            <?php ActiveForm::end();?>
							
						</div>
					</div>
					<div class="block-50 main-telephone-img main-telephone-img-desktop">
						<div class="telephone-block">
							<div class="img-telephone"></div>
							<div class="telephone-absolute img-absolute-1">
								<svg width="65" height="61" viewBox="0 0 65 61" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="32.8801" cy="30.0722" r="18.5325" stroke="#454F5B" stroke-width="4"/>
									<path d="M32.042 20.1667V31.9092H39.3578" stroke="#454F5B" stroke-width="4" stroke-linecap="round"/>
								</svg>
							</div>
							<div class="telephone-absolute img-absolute-2">
								<svg width="33" height="36" viewBox="0 0 33 36" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="16.5405" cy="9.64258" r="8.09027" stroke="#454F5B" stroke-width="3"/>
									<path d="M1.68066 31.4181C1.68066 24.2706 7.47491 18.4763 14.6225 18.4763H18.4586C25.6061 18.4763 31.4004 24.2706 31.4004 31.4181C31.4004 32.5837 30.4555 33.5286 29.2899 33.5286H3.79112C2.62555 33.5286 1.68066 32.5837 1.68066 31.4181Z" stroke="#454F5B" stroke-width="3"/>
								</svg>
							</div>
							<div class="telephone-absolute img-absolute-3">
								<svg width="32" height="39" viewBox="0 0 32 39" fill="none" xmlns="http://www.w3.org/2000/svg">
									<circle cx="17.087" cy="14.5652" r="12.087" stroke="#454F5B" stroke-width="4"/>
									<path d="M3.21272 35.3225L9.91992 26.0883" stroke="#454F5B" stroke-width="4" stroke-linecap="round"/>
								</svg>
							</div>
							<div class="telephone-absolute img-absolute-4">
								<svg width="20" height="29" viewBox="0 0 20 29" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M10.0009 1C5.03016 1 1 5.02973 1 10.0004C1 17.7676 8.67526 18.8179 9.3205 26.7152C9.34869 27.0742 9.63922 27.3574 10.0004 27.3574C10.3608 27.3574 10.6509 27.0742 10.6786 26.7152C11.3243 18.8179 19 17.7676 19 10.0004C19.0009 5.02973 14.9703 1 10.0009 1Z" stroke="#454F5B" stroke-width="2"/>
									<circle cx="9.94023" cy="10.0606" r="3.29472" stroke="#454F5B" stroke-width="2"/>
								</svg>
							</div>
							<div class="telephone-absolute img-absolute-5">
								<svg width="24" height="17" viewBox="0 0 24 17" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M0.211159 15.3854C-0.128274 15.8211 -0.050262 16.4494 0.385403 16.7888C0.821068 17.1283 1.44941 17.0503 1.78884 16.6146L0.211159 15.3854ZM20.9743 0.774756C20.8499 0.236663 20.3128 -0.0987014 19.7748 0.0256977L11.006 2.0529C10.4679 2.1773 10.1326 2.71435 10.257 3.25244C10.3814 3.79054 10.9184 4.1259 11.4565 4.0015L19.2509 2.19955L21.0529 9.99397C21.1773 10.5321 21.7144 10.8674 22.2524 10.743C22.7905 10.6186 23.1259 10.0816 23.0015 9.54348L20.9743 0.774756ZM7.15753 9.71577L6.54685 10.5076L7.15753 9.71577ZM1.78884 16.6146L6.54685 10.5076L4.96916 9.27846L0.211159 15.3854L1.78884 16.6146ZM6.54685 10.5076L10.6673 13.6853L11.8887 12.1015L7.76821 8.9239L6.54685 10.5076ZM13.5851 13.1609L20.8482 1.52966L19.1518 0.470336L11.8887 12.1015L13.5851 13.1609ZM10.6673 13.6853C11.6037 14.4074 12.9588 14.1639 13.5851 13.1609L11.8887 12.1015L11.8887 12.1015L10.6673 13.6853ZM6.54685 10.5076L7.76821 8.9239C6.89659 8.25172 5.64565 8.41018 4.96916 9.27846L6.54685 10.5076Z" fill="#454F5B"/>
								</svg>
							</div>
							<div class="telephone-absolute img-absolute-6">
								<svg width="34" height="31" viewBox="0 0 34 31" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g clip-path="url(#clip0)">
										<path d="M12.3436 24V20.736H10.2556V19.176H12.3436V17.04H10.2556V15.216H12.3436V6.864H16.8556C18.9516 6.864 20.5036 7.288 21.5116 8.136C22.5356 8.984 23.0476 10.216 23.0476 11.832C23.0476 13.464 22.4956 14.744 21.3916 15.672C20.2876 16.584 18.6636 17.04 16.5196 17.04H14.5036V19.176H18.4636V20.736H14.5036V24H12.3436ZM16.2076 15.216C17.6636 15.216 18.7916 14.976 19.5916 14.496C20.4076 14.016 20.8156 13.152 20.8156 11.904C20.8156 10.816 20.4796 10.008 19.8076 9.48C19.1356 8.952 18.0876 8.688 16.6636 8.688H14.5036V15.216H16.2076Z" fill="#454F5B"/>
									</g>
									<defs>
										<clipPath id="clip0">
											<rect width="33" height="30" fill="white" transform="translate(0.389648 0.0100098)"/>
										</clipPath>
									</defs>
								</svg>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="three-easy-steps">
	<div class="container">
		<div class="row easy-steps-row">
			<div class="col-lg-12">
				<h2 class="main-name-h2">Три простых шага</h2>
				<div class="steps-border"></div>
			</div>
		</div>
		<div class="row easy-steps-row">
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="steps-block-wrap">
					<div class="steps-block-flex">
						<div class="steps-block-img">
							<svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M40.757 12C29.294 12 20 21.293 20 32.756C20 50.668 37.7 53.09 39.188 71.302C39.253 72.13 39.923 72.783 40.756 72.783C41.587 72.783 42.256 72.13 42.32 71.302C43.809 53.09 61.51 50.668 61.51 32.756C61.512 21.293 52.217 12 40.757 12Z" stroke="#FAFAFA" stroke-width="2"/>
								<circle cx="40.6175" cy="32.8949" r="7.598" stroke="#FAFAFA" stroke-width="2"/>
							</svg>
						</div>
						<div class="steps-block-name">
							<h3 class="main-name-h3"><span>1.</span> Выберите регион</h3>
						</div>
					</div>
					<div class="steps-block-info">
						<p class="main-text-p2">На сайте представлены специалисты со всех регионов России</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="steps-block-wrap">
					<div class="steps-block-flex">
						<div class="steps-block-img">
							<svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect x="4" y="20" width="72" height="40" rx="3" stroke="#FAFAFA" stroke-width="2"/>
								<rect x="9" y="25" width="62" height="6" rx="1" stroke="#FAFAFA" stroke-width="2"/>
								<rect x="9" y="37" width="62" height="6" rx="1" stroke="#FAFAFA" stroke-width="2"/>
								<rect x="9" y="48" width="23" height="6" rx="1" stroke="#FAFAFA" stroke-width="2"/>
								<rect x="39" y="48" width="32" height="6" rx="1" stroke="#FAFAFA" stroke-width="2"/>
							</svg>
						</div>
						<div class="steps-block-name">
							<h3 class="main-name-h3"><span>2.</span> Заполните форму </h3>
						</div>
					</div>
					<div class="steps-block-info">
						<p class="main-text-p2">Введите ваши данные чтобы мы могли подобрать вам подходящих специалистов</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="steps-block-wrap">
					<div class="steps-block-flex">
						<div class="steps-block-img">
							<svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M26.1605 37.6341L26.1609 37.6337L40.8254 22.9695C40.8254 22.9695 40.8254 22.9694 40.8254 22.9694C42.0981 21.697 42.0972 19.6367 40.826 18.3635L40.825 18.3626C39.5533 17.0926 37.4931 17.0913 36.2223 18.363C36.2221 18.3631 36.222 18.3632 36.2219 18.3633L23.8584 30.7273L19.7828 26.6503L19.7826 26.6501C18.5103 25.3781 16.4497 25.378 15.1775 26.6502C13.905 27.9225 13.9056 29.983 15.1772 31.2557L15.1775 31.2561L21.5553 37.6337L21.5567 37.6352C22.1911 38.2669 23.0219 38.5884 23.8583 38.5884C24.6887 38.5884 25.526 38.2678 26.1605 37.6341ZM1 27.999C1 13.1123 13.1148 1 28 1C42.8894 1 55 13.1122 55 27.999C55 42.8867 42.8885 55 28 55C13.1141 55 1 42.8857 1 27.999Z" stroke="#FAFAFA" stroke-width="2"/>
							</svg>
						</div>
						<div class="steps-block-name">
							<h3 class="main-name-h3"><span>3.</span> Выберите специалиста</h3>
						</div>
					</div>
					<div class="steps-block-info">
						<p class="main-text-p2">Вы можете выбрать специалиста разного уровня и опыта</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<p class="main-text-p2 width-text text-center">За последние годы с помощью процедуры банкротства россияне списали долгов на сотни миллиардов рублей.
					Если вы сами столкнулись с подобной ситуацией, найдите специалиста, который способен справиться конкретно
					с вашей проблемой. С помощью нашего сайта вы легко найдете арбитражного управляющего, который
					защитит ваши права и проведет процедуру на законных основаниях.
				</p>
			</div>
		</div>
	</div>
</section>

<section id="difficulties">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="difficulties-wrapper">
					<h2 class="main-name-h2">Попали в тяжелую ситуацию с финансами?</h2>
					<div class="difficulties-border"></div>
					<div class="difficulties-flex">
						<div class="difficulties-img">
							<img src="<?=$img_path ?>ic_searchForm.png">
						</div>
						<div class="difficulties-info">
							<h4 class="main-name-h4">Банкротство для вас станет прекрасным выходом!</h4>
							<ul class="difficulties-ul">
								<li><a href="#" class="main-text-p3"><span><svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"><g>
<g xmlns="http://www.w3.org/2000/svg">
	<g>
		<path d="M504.502,75.496c-9.997-9.998-26.205-9.998-36.204,0L161.594,382.203L43.702,264.311c-9.997-9.998-26.205-9.997-36.204,0    c-9.998,9.997-9.998,26.205,0,36.203l135.994,135.992c9.994,9.997,26.214,9.99,36.204,0L504.502,111.7    C514.5,101.703,514.499,85.494,504.502,75.496z" fill="#fafafa" data-original="#000000" style=""/>
	</g>
</g>
</g></svg></span>Появится возможность выезжать из РФ</a></li>
								<li><a href="#" class="main-text-p3"><span><svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"><g>
<g xmlns="http://www.w3.org/2000/svg">
	<g>
		<path d="M504.502,75.496c-9.997-9.998-26.205-9.998-36.204,0L161.594,382.203L43.702,264.311c-9.997-9.998-26.205-9.997-36.204,0    c-9.998,9.997-9.998,26.205,0,36.203l135.994,135.992c9.994,9.997,26.214,9.99,36.204,0L504.502,111.7    C514.5,101.703,514.499,85.494,504.502,75.496z" fill="#fafafa" data-original="#000000" style=""/>
	</g>
</g>
</g></svg></span>Не будет больше никаких процентов</a></li>
								<li><a href="#" class="main-text-p3"><span><svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"><g>
<g xmlns="http://www.w3.org/2000/svg">
	<g>
		<path d="M504.502,75.496c-9.997-9.998-26.205-9.998-36.204,0L161.594,382.203L43.702,264.311c-9.997-9.998-26.205-9.997-36.204,0    c-9.998,9.997-9.998,26.205,0,36.203l135.994,135.992c9.994,9.997,26.214,9.99,36.204,0L504.502,111.7    C514.5,101.703,514.499,85.494,504.502,75.496z" fill="#fafafa" data-original="#000000" style=""/>
	</g>
</g>
</g></svg></span>Перестанут звонить коллекторы</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
    <div class="d-flex justify-content-center py-5" style="background-color:#fafafa;">
    <div class="row comment-header">
        <div class="col">
        <h2 class="main-name-h2">Отзывы клиентов</h2>
        <div class="steps-border"></div>
        </div>
    </div>
    </div>

    <div class="slider">
        <?php
        $commentsamount = count($commentInfo);
        
        $dispamount = 3;
        ?>
        <div id="commentsAmount" style='display:none'><?= $commentsamount ?> </div>
        <div class="d-flex justify-content-center">
            <?php $numberOfComment = 0 ?>
            <?php for ($i = 0; $i < $commentsamount; $i++): ?>
                <?php $numberOfComment = $numberOfComment == 3 ? 0 : $numberOfComment ?>
            <div style='display:none' id=<?= 'slide' . $i ?>>
                
                <div class="col-2 commentcard mr-5 pb-5" style="min-height: 100%" >
                    <div class="row">
                      
                        <div class="col-7 capture p-0"><h4 class="main-text-h4 mx-4 my-3"><?= $commentInfo[$i]['capture'] ?></h4></div>
                        <div class="col-12 customer-text">
                            <p class="main-name-p3" ><?= $commentInfo[$i]['textComment'] ?></p>
                        </div>
                       
                    </div>
                </div>
                 <p class="main-name-p2 ml-2" style="margin-top: -50px;"><?= $commentInfo[$i]['name'] ?></p>   
            </div>
                <?php $numberOfComment++; ?>
            <?php endfor; ?>
        </div>
        <div class="d-flex justify-content-center py-5" style="" id="switches">

        </div>
    </div>
    

<section id="main-contacts">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6">
				<div class="contacts-block-info">
					<h2 class="main-name-h2">Контакты</h2>
					<div class="steps-border"></div>
					<h3 class="main-name-h3">Главный офис:</h3>
					<p class="main-text-p2">Город</p>
					<p class="main-text-p2">Улица, дом</p>
					<h3 class="main-name-h3 contacts-indent">Время работы:</h3>
					<p class="main-text-p2">Пн-Пт с 09:00 до 21:00</p>
					<p class="main-text-p2">Сб-Вс с 10:00 до 20:00</p>
					<h3 class="main-name-h3 contacts-indent mail-block">Адрес электронной почты:</h3>
					<a href="mailto:<?=EMAIL?>?subject=Вопрос по HTML" class="email-address"><?=EMAIL?></a>
					<h3 class="main-name-h3 contacts-indent">Единый телефон офиса:</h3>
					<div class="phone"><a href="tel:+8800888888"><?=PHONE?></a></div>
                                        <a href="#" class="btn button-search" onclick="ComagicWidget.openSitePhonePanel()">Оставить заявку на звонок</a>
				</div>
			</div>
			<div class="col-lg-6 without-borders">
				<div class="block-map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2242.719036100858!2d37.750339716047684!3d55.798116495963455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b534e1d4a2648d%3A0xc4055b9bd3875a62!2z0KHQvtCy0LXRgtGB0LrQsNGPINGD0LsuLCA4MC8xLCDQnNC-0YHQutCy0LAsINCg0L7RgdGB0LjRjywgMTA1MTIy!5e0!3m2!1sru!2sua!4v1625585499161!5m2!1sru!2sua" width="100%" height="738" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="some"></div>



</body>
</html>