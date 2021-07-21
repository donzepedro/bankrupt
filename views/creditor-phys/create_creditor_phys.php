<?php
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
//echo "<pre>";
//var_dump($creditor_phys);
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
        
        <?= $form->field($creditor_phys,'fname')->label('First name');?>
        <?= $form->field($creditor_phys,'mname')->label('Middle name');?>
        <?= $form->field($creditor_phys,'lname')->label('Last name');?>
        <?= $form->field($creditor_phys,'region')->label('Region');?>
        <?= $form->field($creditor_phys,'debt_amount')->label('Debt amount');?>
        <?= $form->field($creditor_phys,'inn')->label('INN');?>
        <div class="row">
        <div class="col-6"><?= Html::submitButton('Save',['class'=>'btn btn-success  px-4','name'=>'Save']); ?></div>
        <div class="col-6 text-right"><a id='delete_manager' class="text-center btn btn-danger" href="<?= '/creditor-phys/'?>">Back</a></div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
