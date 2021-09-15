<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
//var_dump($creditor_legal);
$base_url_for_controller = '/creditor-legal/';
?>

<table class="table my-5 ">
    <tr class="text-center">
    
                <th >Имя</th>
                <th >Отчество</th>
                <th >Фамилия</th>
                <th >Сумма долга</th>
                <th >Название организации</th>
                <th >ИНН</th>
                <th >Регион</th>
    </tr>
     <tr class="text-center">
     <?php $form = ActiveForm::begin(); ?>
        <td class="pt-0"><?= $form->field($creditor_legal,'lname')->label('') ?></td>
        <td class="pt-0"><?= $form->field($creditor_legal,'fname')->label('') ?></td>
        <td class="pt-0"><?= $form->field($creditor_legal,'mname')->label('') ?></td>
        <td class="pt-0"><?= $form->field($creditor_legal,'debt_amount')->label('') ?></td>
        <td class="pt-0"><?= $form->field($creditor_legal,'org_name')->label('') ?></td>
        <td class="pt-0"><?= $form->field($creditor_legal,'inn')->label('') ?></td>
        <td class="border-right pt-0"><?= $form->field($creditor_legal,'region')->label('') ?></td>
     
        <td class="p-2"><?= Html::submitButton('Сохранить', [
            'class' => 'btn btn-success  my-3 py-2 ', 
            'name' => 'SaveChange-button',
            'value' => 'save']) ?></td>
        <td class="btn btn-danger p-2 mt-4 ml-1 ">
            <a id='delete_manager' href="<?= $base_url_for_controller ?>">
                Назад</a>
        </td>
     <?php ActiveForm::end();?>
        </tr>
</table>
    