<?php
$img_path ='/img/front/';
?>
<section class="sign-up-wrapper">
	<div class="container">
		<div class="row sign-up-row-name">
			<div class="col-lg-12">
				<h2 class="main-name-h2">Регистрация</h2>
				<p class="main-text-p2">
					Для вашей регистрации необходимо заполнить форму, расположенную ниже.
					После заполнения она будет рассмотрена, по результатам вам отправят
					уведомление на электронную почту, указанную при регистрации.
				</p>
			</div>
		</div>
		<div class="row sign-up-form-row">
			<div class="col-lg-12">
				<div class="sign-up-form-wrap">
					<form action="" method="post" class="form-your-data">
						<div>
							<h4 class="main-name-color-h4">Ваши данные</h4>
							<div class="form-sign-up-flex">
								<p class="main-name-p3">Фамилия<span class="sign-up-star">*</span></p>
								<input type="text" class="input-short" placeholder="Ваша фамилия">
							</div>
							<div class="form-sign-up-flex">
								<p class="main-name-p3">Имя<span class="sign-up-star">*</span></p>
								<input type="text" class="input-short" placeholder="Ваше имя">
							</div>
							<div class="form-sign-up-flex">
								<p class="main-name-p3">Отчество<span class="sign-up-star">*</span></p>
								<input type="text" class="input-short" placeholder="Ваше отчество">
							</div>
							<div class="form-sign-up-flex">
								<p class="main-name-p3">Дата рождения<span class="sign-up-star">*</span></p>
								<input type="text" class="input-short" placeholder="Ваша дата рождения">
							</div>
							<div class="form-sign-up-flex">
								<p class="main-name-p3">ИНН<span class="sign-up-star">*</span></p>
								<input type="text" class="input-short" placeholder="000000000000">
							</div>
							<div class="form-sign-up-flex">
								<p class="main-name-p3">Телефон<span class="sign-up-star">*</span></p>
								<input type="text" class="input-short" placeholder="+7 ">
							</div>
							<div class="form-sign-up-flex">
								<p class="main-name-p3">Адрес электронной почты<span class="sign-up-star">*</span></p>
								<input type="email" class="input-short" placeholder="Ваш адрес электронной почты">
							</div>
						</div>
					</form>
					<form action="" method="post" class="form-additionally mt-5">
						<div>
							<h4 class="main-name-color-h4">Дополнительно</h4>
							<div class="form-sign-up-flex">
								<p class="main-name-p3">Регионы работы<span class="sign-up-star">*</span></p>
								<select class="js-regions-multiple input-long" name="regions[]" multiple="multiple">
									<option></option>
									<option value="regions_1">Регион 1</option>
									<option value="regions_2">Регион 2</option>
									<option value="regions_3">Регион 3</option>
									<option value="regions_4">Регион 4</option>
								</select>
							</div>
							<div class="form-sign-up-flex">
								<p class="main-name-p3">Допуск к гос.тайне<span class="sign-up-star">*</span></p>
								<div class="checkbox-toggle">
									<label class="checkbox">
										<input type="checkbox">
										<span></span>
									</label>
								</div>
							</div>
							<div class="form-sign-up-flex">
								<p class="main-name-p3">СРО АУ<span class="sign-up-star">*</span></p>
								<select name="menu" size="1" class="input-long">
									<option selected="selected" value="second">Саморегулируемая организация арбитражных управляющих</option>
									<option value="third">1</option>
									<option value="fourth">2</option>
								</select>
							</div>
							<div class="form-sign-up-flex">
								<p class="main-name-p3">С какими категориями вы будете работать?<span class="sign-up-star">*</span></p>
								<div class="checkbox-human">
									<div>
										<input type="checkbox" id="cb1"> <label for="cb1" class="main-name-p3" id="main-mobil-1">Физические лица</label>
									</div>
									<div>
										<input type="checkbox" id="cb2"> <label for="cb2" class="main-name-p3" id="main-mobil-2">Юридические лица</label>
									</div>
								</div>
							</div>
							<div class="form-sign-up-flex">
								<p class="main-name-p3">Количество проведенных процедур (физ. лица)<span class="sign-up-star">*</span></p>
								<input type="text" class="input-short" placeholder="Количество процедур у физ. лица">
							</div>
							<div class="form-sign-up-flex">
								<p class="main-name-p3">Количество проведенных процедур (юр. лица)<span class="sign-up-star">*</span></p>
								<input type="text" class="input-short" placeholder="Количество процедур у юр. лица">
							</div>
							<div class="form-sign-up-flex">
								<p class="main-name-p3">Средний срок процедуры (месяцев)<span class="sign-up-star">*</span></p>
								<input type="text" class="input-short" placeholder="Средний срок процедуры">
							</div>
							<div class="form-sign-up-flex">
								<p class="main-name-p3">Сведения о членстве в СРО АУ (время членства, название СРО АУ, причина ухода)<span class="sign-up-star">*</span></p>
								<textarea name="comment" cols="40" rows="3" class="input-long" placeholder="Сведения о членстве в саморегулируемай организации арбитражных управляющих"></textarea>
							</div>
							<div class="form-sign-up-flex">
								<p class="main-name-p3">Аттестаты, сертификаты, лицензии, связанные с деятельностью арбитражного управляющего</p>
								<textarea name="comment" cols="40" rows="3" class="input-long" placeholder="Ваши аттестаты, сертификаты, лицензии"></textarea>
							</div>
							<div class="form-sign-up-flex">
								<p class="main-name-p3">Уровень вашего образования, специальность, года обучения и т. д.</p>
								<textarea name="comment" cols="40" rows="3" class="input-long" placeholder="Ваше образование"></textarea>
							</div>
							<div class="form-sign-up-flex">
								<p class="main-name-p3">Дата начала  работы в качестве арбитражного управляющего</p>
								<input type="text" class="input-short" placeholder="Дата начала">
							</div>
							<div class="form-sign-up-flex">
								<p class="main-name-p3">Дата окончания  работы в качестве арбитражного управляющего</p>
								<input type="text" class="input-short" placeholder="Дата окончания">
							</div>
							<div class="form-sign-up-flex">
								<p class="main-name-p3">Знания иностранных языков</p>
								<input type="text" class="input-long" placeholder="Уровень знаний иностранных языков">
							</div>
							<div class="form-sign-up-flex">
								<p class="main-name-p3">Финансовое обеспечение деятельности АУ (обязательное страхование)</p>
								<textarea name="comment" cols="40" rows="3" class="input-long" placeholder="Финансовое обеспечение деятельности арбитражного управляющего"></textarea>
							</div>

						</div>
					</form>
					<form action="" method="post" class="form-photos-agreements">
						<div>
							<h4 class="main-name-color-h4">Фото и соглашения</h4>
							<div class="form-sign-up-flex mb-5">
								<p class="main-name-p3 mr-5">Фото для вашего профиля</p>
								<input type="submit" class="input-submit ml-5" value="Загрузить фото профиля">
							</div>
							<div class="photos-agreements-checkbox">
								<div class="checkbox-human agreements-checkbox-1">
									<p class="main-name-p3">Я подтверждаю, что с правилами акции (оферты) согласен<span class="sign-up-star">*</span></p>
									<div class="checkbox-div">
										<input type="checkbox" id="cb5"> <label for="cb5" class="main-name-p3"> </label>
									</div>
								</div>
								<div class="checkbox-human agreements-checkbox-2">
									<p class="main-name-p3">Я принимаю условия пользовательского соглашения <span class="sign-up-star">*</span></p>
									<div class="checkbox-div">
										<input type="checkbox" id="cb6"> <label for="cb6" class="main-name-p3"> </label>
									</div>
								</div>
							</div>
							<div>
								<input type="submit" class="input-submit" value="Отправить запрос на регистрацию">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>