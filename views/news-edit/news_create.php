<?php 
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\ActiveForm;
use vova07\imperavi\Widget;
$base_url_for_controller = '/arbitr-manager/';
$form= ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]);?>
<div class="row">
    <div class="col-3 mt-5 text-center">
        <img class="img-fluid" id="image_upload_preview" style="min-height: 300px" src= '/img/default_news.webp'>
        <div class='col '><?= $form->field($imgupload, 'imageFile')->fileInput(['id' => 'inputFile', 'class' => 'imgloadbtn'])->label('') ?></div>
        <div class="d-flex justify-content-start">
        <div class="my-5 mx-3 p-1"><?= Html::submitButton('Create News', ['class' => 'btn btn-success', 'name' => 'Create-button']) ?></div>
        <div class=" my-5 mx-3 p-1"><a id='delete_manager' href="/news-edit/news-show/"><div class="col btn btn-danger"> 
                Back
            </div></a>
        </div>
    </div>
    </div>
    <div class="row ml-5 mt-5" style="max-width: 820px">
        <div class="col-12">
            <?= $form->field($news, 'title')->textInput() ?>
        </div>
        <div class="col-12">
            <?=
            $form->field($news, 'text')->widget(Widget::className(), [
                'settings' => [
                    'lang' => 'ru',
                    'minHeight' => 200,
                    'plugins' => [
                        'clips',
                        'fullscreen'
                    ]
                ]
            ]);
            ?>
        </div>
    </div>
</div>

    
<?php ActiveForm::end() ?>
