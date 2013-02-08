<?php
/* @var $this LogController */
/* @var $model Log */

$this->breadcrumbs=array(
	'Logs'=>array('index'),
	$model->id,
);

?>

<h1>View Log #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'log_code',
		'document_table',
		'document_id',
		'date',
		'message',
		'cleaned_message',
		'status',
	),
)); ?>
