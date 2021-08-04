<?php
namespace app\widgets;


use yii\base\Widget;

class SliderWidget extends Widget
{
	public $slides;


	public function run() {
		return $this->render('slider-widget',[
			'slides' => $this->slides
		]);
	}
}