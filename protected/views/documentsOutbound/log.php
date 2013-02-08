<?php
/* @var $this DocumentsOutboundController */
/* @var $model DocumentsOutbound */
/* @var $log   Log*/

$this->breadcrumbs=array(
	'Documents Outbounds'=>array('index'),
	$model->id,
);
?>
<h1>View DocumentsOutbound #<?php echo $model->id; ?> logs</h1>

        <?php     
       $logs= $this->actionLog($model->id);
        ?>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$logs,
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
