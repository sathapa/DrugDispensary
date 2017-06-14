<?php
/* @var $this DrugController */
/* @var $model Drug */

$this->breadcrumbs=array(
	'Drugs'=>array('index'),
	$model->drugId,
);

$this->menu=array(
	array('label'=>'List Drug', 'url'=>array('index')),
	array('label'=>'Create Drug', 'url'=>array('create')),
	array('label'=>'Update Drug', 'url'=>array('update', 'id'=>$model->drugId)),
	array('label'=>'Delete Drug', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->drugId),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Drug', 'url'=>array('admin')),
);
?>

<h1>View Drug #<?php echo $model->drugId; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'drugId',
		'pid',
		'DrugName',
		'DosePerDay',
		'wakeup',
		'breakfast',
		'morning',
		'midmorning',
		'midday',
		'lunch',
		'midafternoon',
		'evening',
		'dinner',
		'bedtime',
	),
)); ?>
