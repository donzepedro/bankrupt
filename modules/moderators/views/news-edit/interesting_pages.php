<?php
use yii\bootstrap4\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
?>
<?php $current_pages = ActiveForm::begin() ?>
<h5 class="my-3">You can add some of yours news pages to a interesting pages block</h5>
<div class="row">
    <div class='col-5 mr-4'>
        <h5 class="my-3">How many interesting page's are you want to add</h3>
        <input id="amount_of_add" style="max-width: 100px"> 
        <input class="btn btn-secondary ml-5" id="display" type="button" value="display"> 
        <div id="newpagesarea">
            
        </div>
    </div>
    <div class='col-6 ml-4'><h5 class="my-3"> Now you have COUNT interesting pages:</h5>
        
        <div class="row">
            <?php for($i=0;$i < count($interesting_page);$i++): ?>
            <?= $current_pages->field($interLayer, 'news_title')->dropDownList(ArrayHelper::map(\app\models\News::find()->all(), 'id', 'title'),
                    ['prompt'=>\app\models\News::findOne(['id'=>$interesting_page[$i]->news_id])->title])->label('') ?>
            <?php endfor;?>
             <div class="my-5 mx-3 p-1"><?= Html::submitButton('Save changes', ['class' => 'btn btn-success', 'name' => 'Create-button']) ?></div>
        </div>
        
    </div>
</div>
<?php ActiveForm::end() ?>