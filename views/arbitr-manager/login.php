<?php 
use yii\widgets\ActiveForm;
use yii\helpers\Html;
//die
?>

<?php $form=ActiveForm::begin();  ?>
<?= $form->field($moderators,'username')->textInput(); ?>
<?= $form->field($moderators,'password')->passwordInput(); ?>
   <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
    <?php ActiveForm::end();?>