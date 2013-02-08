<?php
/* @var $this LogController */
/* @var $model Log */

$this->breadcrumbs=array(
	'Logs'=>array('index'),
	$model->id,
);

?>

<h1>View Log #<?php echo $model->id; ?></h1>

<?php 

$this->widget('zii.widgets.CListView', array(
	'dataprovider'=>dataProvider,
	'itemView'=>'_view',
        	
)); ?>