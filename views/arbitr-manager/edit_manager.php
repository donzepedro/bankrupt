<?php
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
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
        <img class="img-fluid" id="image_upload_preview"  style="max-height: 300px" src= <?= str_replace('../web', '',$arbitr_managers->path_to_img)?>> 
            <div class='col '><?= $form->field($imgupload, 'imageFile')->fileInput(['id'=>'inputFile', 'class'=>'imgloadbtn'])->label('') ?></div>
        <div class="row mt-5">   
            <div class="col"><?= Html::submitButton('Save Changes', ['class' => 'btn btn-success', 'name' => 'SaveChange-button']) ?></div>
            <div class="col"><?= Html::submitButton('Discard Changes', ['class' => 'btn btn-danger', 'name' => 'DiscardChange-button','value'=>'discard']) ?></div>
        </div>
    </div>
        <div class="col-3">

                    <?= $form->field($arbitr_managers, 'lname')->textInput([]) ?>
                    <?= $form->field($arbitr_managers, 'fname')->textInput([]) ?>
                    <?= $form->field($arbitr_managers, 'mname')->textInput([]) ?>
                    <?= $form->field($arbitr_managers, 'birth_date')->textInput(['type'=>'date']) ?>
                    <?= $form->field($arbitr_managers, 'post_addr')->textInput([]) ?>
                    <?= $form->field($arbitr_managers, 'inn')->textInput([]) ?>
                    <?= $form->field($arbitr_managers, 'phone_number')->textInput([]) ?>
                    <?= $form->field($arbitr_managers, 'job_region')->textInput([]) ?>
                    <?= $form->field($arbitr_managers, 'government_secret_access')->textInput([]) ?>
                   
        
        </div>
        <div class="col-3">
                                      
                    <?php // $form->field($arbitr_managers, 'SRO_AM_name')->textInput([]) ?>
                    <?= $form->field($arbitr_managers, 'legal_phys')->textInput([]) ?>
                    <?= $form->field($arbitr_managers, 'categories')->textInput([]) ?>
                    <?= $form->field($arbitr_managers, 'count_of_procedure_phys')->textInput([]) ?>
                    <?= $form->field($arbitr_managers, 'count_of_procedure_legal')->textInput([]) ?>
                    <?= $form->field($arbitr_managers, 'procedure_time_average')->textInput([]) ?>
                    <?= $form->field($arbitr_managers, 'start_date')->textInput(['type'=>'date']) ?>
                    <?= $form->field($arbitr_managers, 'end_date')->textInput(['type'=>'date']) ?>
                    <?= $form->field($education, 'speciality')->textInput([]) ?>
                    <?= $form->field($education, 'level')->textInput([]) ?>
                   
                    
        </div><!-- comment -->
        <div class="col-3">
                    <?= $form->field($education, 'institution')->textInput([]) ?>
                    <?= $form->field($education, 'start_date')->textInput([]) ?>
                    <?= $form->field($education, 'end_date')->textInput([]) ?>
                    <?= $form->field($foreign_language, 'language')->textInput([]) ?>
                    <?= $form->field($foreign_language, 'level')->textInput([]) ?>
                    <?= $form->field($SROAminfo,'SRO_name')->textInput([]);?>
                    <?= $form->field($SROAminfo,'membership_start_date')->textInput([]); ?>
                    <?= $form->field($SROAminfo,'membership_end_date')->textInput([]); ?>
                    <?= $form->field($SROAminfo,'leave_reason')->textarea([]); ?>
                
        </div>

    </div>
    
        <?php ActiveForm::end(); ?>



