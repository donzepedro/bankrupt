<?php 
use yii\widgets\ActiveForm;
use yii\helpers\Html;
//die
?>
<div class="row mx-5 my-5">
    <div class="col"> <h1 class="text-info">Bankrupt Moderators Access Page</h1></div>
    
</div>
<div class="row mx-5 my-5 w-50 ">
    <div class="col">
        <?php $form=ActiveForm::begin();  ?>
        <?= $form->field($moderators,'username')->textInput(); ?>
        <?= $form->field($moderators,'password')->passwordInput(); ?>
        <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        <?php ActiveForm::end();?>
    </div>
</div>