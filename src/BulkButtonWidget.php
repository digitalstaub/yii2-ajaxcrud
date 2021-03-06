<?php
namespace johnitvn\ajaxcrud;
use Yii;
use yii\base\Widget;
use yii\helpers\Html;

class BulkButtonWidget extends Widget{

	public $buttons;

	public function init(){
		parent::init();

	}

	public function run(){
		$content = '<div class="pull-left">'.
                   '<span class="glyphicon glyphicon-arrow-right"></span>&nbsp;&nbsp;'.Yii::t('app', 'With selected').'&nbsp;&nbsp;'.
                   $this->buttons.
                   '</div>';
		return $content;
	}
}
?>
