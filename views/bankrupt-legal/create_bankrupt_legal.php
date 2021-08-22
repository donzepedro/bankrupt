<?php
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
//echo "<pre>";
//var_dump($bankrupt_legal);
//echo "</pre>";
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div class="row mt-4">
    <div class="col-4"></div>
    <div class="col-4 mx-5">
        <?php $form = ActiveForm::begin()?>
            <?= $form->field($bankrupt_legal,'fname')->label('Имя') ?>
            <?= $form->field($bankrupt_legal,'mname')->label('Отчество') ?>
            <?= $form->field($bankrupt_legal,'lname')->label('Фамилия') ?>
            <?= $form->field($bankrupt_legal,'org_name')->label('Название организации') ?>
            <?= $form->field($bankrupt_legal,'debt_amount')->label('Сумма долга') ?>
            <?= $form->field($bankrupt_legal,'region')->label('Регион') ?>
            <?= $form->field($bankrupt_legal,'inn')->label('ИНН') ?>
        <div class="row mt-2">
        <div class="col-6"><?= Html::submitButton('Сохранить',['class'=>'btn btn-success  px-4','name'=>'Save']); ?></div>
        <div class="col-6 text-right"><a id='delete_manager' class="text-center btn btn-danger" href="<?= '/bankrupt-legal/'?>">Назад</a></div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
