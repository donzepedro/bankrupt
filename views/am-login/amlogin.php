<?php
$img_path ='/img/front/';
?>
<section class="login-text-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div>
					<h2 class="main-name-h2">Регистрация и авторизация</h2>
					<div class="steps-border"></div>
					<p class="main-text-p2 mt-3">
						Если Вы являетесь арбитражным управляющим и хотите сотрудничать с нашей платформой, получая заказы от физических и юридических лиц, то пройдите простую регистрацию на сайте.
						Обязательно ознакомьтесь с пользовательским соглашением и пройдите процедуру регистрации.
						В случае, если вы забыли данные для входа, пишите на электронную почту поддержки сервиса <a href="#" style="color:#445bd4"><?= EMAIL ?></a>
					</p>
				</div>
			</div>
			<div class="col-lg-6">
				<form action="">
					<div class="login-container-form">
						<h2 class="main-name-h2">Вход</h2>

						<label for="tel"></label>
						<input type="text" placeholder="Номер телефона" name="tel" required>

						<label for="psw"></label>
						<input type="password" placeholder="Пароль" name="psw" required>

						<button type="submit" class="registerbtn">Войти</button>
						<button type="submit" class="registerbtn">Перейти к регистрации</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>