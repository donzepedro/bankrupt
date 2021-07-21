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
<div class="row">
    <div class="col-4"></div>
    <div class="col-4 mx-5">
        <?php $form = ActiveForm::begin()?>
            <?= $form->field($bankrupt_legal,'fname')->label('First ame') ?>
            <?= $form->field($bankrupt_legal,'mname')->label('Middle name') ?>
            <?= $form->field($bankrupt_legal,'lname')->label('Last name') ?>
            <?= $form->field($bankrupt_legal,'org_name')->label('Organization name') ?>
            <?= $form->field($bankrupt_legal,'debt_amount')->label('Debt Amount') ?>
            <?= $form->field($bankrupt_legal,'region')->label('Region') ?>
            <?= $form->field($bankrupt_legal,'inn')->label('INN') ?>
        <div class="row">
        <div class="col-6"><?= Html::submitButton('Save',['class'=>'btn btn-success  px-4','name'=>'Save']); ?></div>
        <div class="col-6 text-right"><a id='delete_manager' class="text-center btn btn-danger" href="<?= '/bankrupt-legal/'?>">Back</a></div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
