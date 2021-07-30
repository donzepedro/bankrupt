<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\ActiveForm;
$base_url_for_controller = '/arbitr-manager/';
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
           <div class="col-6"><?= Html::submitButton('Create Manager', ['class' => 'btn btn-success', 'name' => 'Create-button']) ?></div>
           <a id='delete_manager' href="<?= $base_url_for_controller ?>"><div class="col btn btn-danger"> 
                Back
            </div></a>
           
        </div>
    </div>
        <div class="col-3">
  
                    <?php // $form->field($arbitr_managers, 'id')->textInput([]) ?>
                    <?= $form->field($arbitr_managers, 'lname')->textInput([]) ?>
                    <?= $form->field($arbitr_managers, 'fname')->textInput([]) ?>
                    <?= $form->field($arbitr_managers, 'mname')->textInput([]) ?>
                    <?= $form->field($arbitr_managers, 'birth_date')->textInput(['type'=>'date']) ?>
                    <?= $form->field($arbitr_managers, 'post_addr')->textInput([]) ?>
                    <?= $form->field($arbitr_managers, 'inn')->textInput([]) ?>
                    <?= $form->field($arbitr_managers, 'phone_number')->textInput([]) ?>
                    <?= $form->field($arbitr_managers, 'job_region')->dropDownList(ArrayHelper::map(\app\models\Regions::find()->all(), 'id', 'region')) ?>
                    <?= $form->field($arbitr_managers, 'government_secret_access')->dropdownList(['Yes','No']) ?>
        
        </div>
        <div class="col-3">
                    <?php // $form = ActiveForm::begin();?>
            
                    <?= $form->field($arbitr_managers, 'categories')->dropdownList(['Legal','Physical','Both']) ?>
                    <?= $form->field($arbitr_managers, 'count_of_procedure_phys')->textInput([]) ?>
                    <?= $form->field($arbitr_managers, 'count_of_procedure_legal')->textInput([]) ?>
                    <?= $form->field($arbitr_managers, 'procedure_time_average')->textInput([]) ?>
                    <?= $form->field($arbitr_managers, 'start_date')->textInput(['type'=>'date']) ?>
                    <?= $form->field($arbitr_managers, 'end_date')->textInput(['type'=>'date']) ?>
                    <?= $form->field($education, 'speciality')->textInput([]) ?>
                    <?= $form->field($education, 'level')->textInput([]) ?>
                    
                    <?php // ActiveForm::end(); ?>
        </div><!-- comment -->
        <div class="col-3">
                <?php // $form = ActiveForm::begin();?>
                    <?php // $form->field($arbitr_managers, 'path_to_img')->textInput([]) ?>
            
                        <?= $form->field($education, 'institution')->textInput([]) ?>
                    <?= $form->field($education, 'start_date')->textInput(['type'=>'date']) ?>
                    <?= $form->field($education, 'end_date')->textInput(['type'=>'date']) ?>
                    <?= $form->field($foreign_language, 'language')->textInput([]) ?>
                    <?= $form->field($foreign_language, 'level')->textInput([]) ?>
                    <?= $form->field($SROAminfo,'SRO_name')->textInput([]);?>
                    <?= $form->field($SROAminfo,'membership_start_date')->textInput(['type'=>'date']); ?>
                    <?= $form->field($SROAminfo,'membership_end_date')->textInput(['type'=>'date']); ?>
                    <?= $form->field($SROAminfo,'leave_reason')->textarea([]); ?>
                <?php // ActiveForm::end(); ?>
        </div>
        <div class="col-12">
            
        </div>
    </div>
    
        <?php ActiveForm::end(); ?>



