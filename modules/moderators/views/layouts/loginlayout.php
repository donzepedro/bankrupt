<?php 
use yii\widgets\Breadcrumbs;
use app\assets\NewAsset;

NewAsset::register($this);
//$this->registerCssFile("",['rel'=>'stylesheet']);
?>

<?php $this->beginPage() ?>
<html lang="<?= Yii::$app->language ?>">
<head>
     <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->registerCsrfMetaTags() ?>
        <title></title>
<?php $this->head() ?>    
</head>

<?php $this->beginBody() ?>
<body>
    <div class="container"><?= $content ?></div>

<?php $this->endBody() ?>
    
</body>
</html>
<?php $this->endPage() ?>