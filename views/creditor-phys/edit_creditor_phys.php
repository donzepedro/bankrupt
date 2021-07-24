<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
//var_dump($creditor_phys);
$base_url_for_controller = '/creditor-legal/';
?>

<table class="table my-5 ">
    <tr class="text-center">
    
                <th >Last Name</th>
                <th >First Name</th>
                <th >Middle Name</th>
                <th >Debt Amount</th>
                <th >Inn</th>
                <th >Region</th>
    </tr>
     <tr class="text-center" >
     <?php $form = ActiveForm::begin(); ?>
        <td class="pt-0"><?= $form->field($creditor_phys,'lname')->label('') ?></td>
        <td class="pt-0"><?= $form->field($creditor_phys,'fname')->label('') ?></td>
        <td class="pt-0"><?= $form->field($creditor_phys,'mname')->label('') ?></td>
        <td class="pt-0"><?= $form->field($creditor_phys,'debt_amount')->label('') ?></td>
        <td class="pt-0"><?= $form->field($creditor_phys,'inn')->label('') ?></td>
        <td class="border-right pt-0"><?= $form->field($creditor_phys,'region')->label('') ?></td>
     
        <td class="p-2"><?= Html::submitButton('Save', [
            'class' => 'btn btn-success  my-3 py-2 ', 
            'name' => 'SaveChange-button',
            'value' => 'save']) ?></td>
        <td class="btn btn-danger p-2 mt-4 ml-1 ">
            <a id='delete_manager' href="<?= $base_url_for_controller ?>">
                Back</a>
        </td>
     <?php ActiveForm::end();?>
        </tr>
</table>