<?php
/* @var $this DocumentsOutboundController */
/* @var $model DocumentsOutbound */

$this->breadcrumbs=array(
	'Documents Outbounds'=>array('index'),
	$model->id,
);

?>

<h1>search for #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_search',
)); ?>

