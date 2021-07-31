<?php

$img_path ='/img/front/';
?>
<section id="found-specialists">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="main-name-h2">Найдено специалистов: <?=count($managers);?></h2>
				<div class="steps-border"></div>
			</div>
		</div>
		<div class="row specialists-location-row">
			<div class="col-lg-5 col-md-12">
				<div>
					<div class="main-banner-location">
						<form>
							<div class="form-group">
								<p class="main-text-p4">Регион</p>
								<select name="menu" size="1" class="form-control">
									<option selected="selected" value="second">Республика Карелия</option>
									<option value="third">1</option>
									<option value="fourth">2</option>
								</select>
								<p class="main-text-p4 indent-p5">Вы являетесь:</p>
							</div>
							<div class="form-group form-check form-check-flex">
								<div class="checkbox-human">
									<div>
										<input type="checkbox" id="cb1"> <label for="cb1" class="main-name-p3">Физическим лицом</label>
									</div>
									<div>
										<input type="checkbox" id="cb2"> <label for="cb2" class="main-name-p3">Юридическим лицом</label>
									</div>
								</div>
								<div class="checkbox-toggle">
									<label class="checkbox">
										<input type="checkbox">
										<span class="main-name-p3">Допуск к гос.тайне</span>
									</label>
								</div>
								<div class="checkbox-block-flex">
									<button type="submit" class="btn reset-filter">Сбросить&nbsp;фильтр</button>
									<button type="submit" class="btn button-search">Поиск</button>
								</div>
							</div>
						</form>
					</div>
					<div class="desktop-link-search">
						<h4 class="main-text-h4">Интересные статьи</h4>
						<div class="link-search-border"></div>
						<a  href="#" class="link-search-a main-text-p2">В чем <span>ПЛЮСЫ</span> банкротства?</a>
						<a  href="#" class="link-search-a main-text-p2">Прекращение начисления процентов</a>
						<a  href="#" class="link-search-a main-text-p2">Возможность выезда за границу</a>
						<a  href="#" class="link-search-a main-text-p2">Освобождение от обязательств</a>
						<a  href="#" class="link-search-a main-text-p2">В чем <span>ПЛЮСЫ</span> банкротства?</a>
						<a  href="#" class="link-search-a main-text-p2">Возможность выезда за границу</a>
					</div>
				</div>
			</div>
                        <div class="col-lg-7 col-md-12 personal-col">
                            <?php foreach ($managers as $key=>$val): ?>
                          
                            
                            <div class="personal-specialists-wrapper">
                                <div class="row">
                                            <div class="col-12 text-center pt-4"><h4 class="main-name-color-h4"><?= $val['fname'].' '.$val['mname'].' '.$val['lname']; ?></h4></div>
                                            <div class="col-3"><img src="<?= str_replace('../web','',$val['path_to_img']);?>"></div>
                                            <div class="col-3 name-text-block"> <p class="main-name-p3 mt-4 pt-5">Средний срок:</p>
                                                                <h4 class="main-name-color-h4"><span><?= $val['procedure_time_average']?></span> месяцев </h4>
                                            </div>
                                            <div class="col-2 name-text-block "> <p class="main-name-p3 mt-4 pt-5">Процедур:</p>
                                                                <h4 class="main-name-color-h4"><span>48</span></h4>
                                            </div>
                                            <div class="col-4 go-profile mt-4 pt-5"><a href="desktop_manager_card_client.html" class="button-search ">Перейти&nbsp;в&nbsp;профиль</a></div>
                                </div>
                            </div>
                            <?php endforeach;?>
                        </div>
			
		</div>
	</div>
</section>