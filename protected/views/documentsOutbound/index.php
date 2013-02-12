<?php
/* @var $this DocumentsOutboundController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Documents Outbounds',
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

<h1>Documents Outbounds</h1>

Search: <input type="text" id="q" name="q" />

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
