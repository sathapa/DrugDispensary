<?php
/* @var $this SickController */
/* @var $model Sick */

$this->breadcrumbs=array(
	'Sicks'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Sick', 'url'=>array('index')),
	array('label'=>'Create Sick', 'url'=>array('create')),
	array('label'=>'Update Sick', 'url'=>array('update', 'id'=>$model->idS)),
	array('label'=>'Delete Sick', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idS),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sick', 'url'=>array('admin')),
);
?>

<h1>View Sick #<?php echo $model->idS; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idS',
		'id',
		'name',
		'disease',
		'duration',
	),
)); ?>
