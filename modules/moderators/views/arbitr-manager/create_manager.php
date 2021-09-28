<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\ActiveForm;
$base_url_for_controller = '/arbitr-manager/';
use kartik\select2\Select2;
//if(isset($error)) echo $error;  else      DBdebug($data);
?>
<?php 
//foreach($data as $k=>$v){
//    echo '<pre>';    
//    var_dump($k);
//    echo '</pre>';
//    
//}
    ?>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]);?>
<div class="row mt-5">
    <div class="col-3 mt-5 text-center">
        <img class="img-fluid" id="image_upload_preview" style="max-height: 300px" src= '/img/F_M_profilepic.jpg'>
        <div class='col '><?= $form->field($imgupload, 'imageFile')->fileInput(['id'=>'inputFile', 'class'=>'imgloadbtn'])->label('') ?></div>
        <div class="row mt-5">
            <div class="col-12"><?= Html::submitButton('Создать арбитражного управляющего', ['class' => 'btn btn-success', 'name' => 'Create-button']) ?></div>
            <div class="col-12 mt-2">
            <a id='delete_manager' href="<?= $base_url_for_controller ?>"><div class="col btn btn-danger"> 
                Назад
            </div></a>
                </div>
        </div>
    </div>
    <table class="table mytable">
        <tr>
            <td> <?= $form->field($arbitr_managers, 'lname')->textInput([])->label('Фамилия') ?></td>
            <td> <?= $form->field($arbitr_managers, 'debtor_categories')->dropdownList(['Legal','Physical','Both'])->label('Категории должников') ?></td>
            <td><?= $form->field($education, 'institution')->textInput([])->label('Учреждение') ?></td>
        </tr>
        <tr>
            <td> <?= $form->field($arbitr_managers, 'fname')->textInput([])->label('Имя') ?></td>
            <td><?= $form->field($arbitr_managers, 'bankrupt_categories')->dropdownList(['Legal','Physical','Both'])->label('Категории банкротов') ?></td>
            <td><?= $form->field($education, 'start_date')->textInput(['type'=>'date'])->label('Дата начала обучения') ?></td>
        </tr>
        <tr>
            <td><?= $form->field($arbitr_managers, 'mname')->textInput([])->label('Отчество') ?></td>
            <td><?= $form->field($arbitr_managers, 'count_of_procedure_phys')->textInput([])->label('Количество процедур для физ.лиц') ?></td>
            <td><?= $form->field($education, 'end_date')->textInput(['type'=>'date'])->label('Дата конца обучения') ?></td>
        </tr>
         <tr>
            <td><?= $form->field($arbitr_managers, 'birth_date')->textInput(['type'=>'date'])->label('Дата рождения') ?></td>
            <td><?= $form->field($arbitr_managers, 'count_of_procedure_legal')->textInput([])->label('Количество процедур для юр.лиц') ?></td>
            <td><?= $form->field($foreign_language, 'language')->textInput([])->label('Иностранные языки') ?></td>
        </tr>
         <tr>
            <td><?= $form->field($arbitr_managers, 'post_addr')->textInput([])->label('Почтовый адрес') ?></td>
            <td><?= $form->field($arbitr_managers, 'procedure_time_average')->textInput([])->label('Среднее время процедуры') ?></td>
            <td><?= $form->field($foreign_language, 'level')->textInput([])->label('Уровень владения языком') ?></td>
        </tr>
         <tr>
             <td><?= $form->field($arbitr_managers, 'inn')->textInput([])->label('ИНН') ?></td>
            <td><?= $form->field($arbitr_managers, 'start_date')->textInput(['type'=>'date'])->label('Дата начала работы арбитражным управляющим') ?></td>
            <td><?= $form->field($SROAminfo,'SRO_name')->textInput([])->label('Название СРО');?></td>
        </tr>
         <tr>
            <td><?= $form->field($arbitr_managers, 'phone_number')->textInput([])->label('Телефон') ?></td>
            <td><?= $form->field($arbitr_managers, 'end_date')->textInput(['type'=>'date'])->label('Дата конца работы арбитражным управляющим') ?></td>
            <td><?= $form->field($SROAminfo,'membership_start_date')->textInput(['type'=>'date'])->label('Дата начала членства в СРО'); ?></td>
        </tr>
         <tr>
             <td><?= $form->field($arbitr_managers, 'job_region')->widget(Select2::class, [
                 'data' => ArrayHelper::map(\app\models\Regions::find(['id','region'])->all(), 'id', 'region'),
                 'options' => ['placeholder' => 'Выберите регион ...'],
                 'pluginOptions' => [
                     'allowClear' => true
                 ],
             ])->label('Область работы');
             ?></td>

            <td><?= $form->field($education, 'speciality')->textInput([])->label('Специальность') ?></td>
            <td><?= $form->field($SROAminfo,'membership_end_date')->textInput(['type'=>'date'])->label('Дата окончания членства в СРО'); ?></td>
        </tr>
         <tr>
            <td><?= $form->field($arbitr_managers, 'government_secret_access')->dropdownList(['No','Yes'])->label('Доступ к государственной тайне') ?></td>
            <td><?= $form->field($education, 'level')->textInput([])->label('Уровень образования') ?></td>
            <td><?= $form->field($SROAminfo,'leave_reason')->textarea([])->label('Причина ухода'); ?></td>
        </tr>
    </table>            
    </div>
    
        <?php ActiveForm::end(); ?>



