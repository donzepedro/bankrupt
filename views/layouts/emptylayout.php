<?php 
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\NewAsset;

NewAsset::register($this);
//$this->registerCssFile("",['rel'=>'stylesheet']);
?>
<?php $this->beginPage() ?>
       
<?php $this->head() ?>

<?php $this->beginBody() ?>

<?= $content ?>

<?php $this->endBody() ?>
<?php $this->endPage() ?>