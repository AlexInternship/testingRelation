<?php
/* @var $this DocumentsInboundController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Documents Inbounds',
);

Yii::app()->clientScript->registerScript('search', "
  $('input#q').keyup(function(){
  $.fn.yiiListView.update('yw0', {
  data: $(this).serialize()
  });
  return false;
});
");
?>

<h1>Documents Inbounds</h1>

Search: <input type="text" id="q" name="q" />


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
