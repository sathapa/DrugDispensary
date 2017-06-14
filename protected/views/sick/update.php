<?php
/* @var $this SickController */
/* @var $model Sick */

$this->breadcrumbs=array(
	'Sicks'=>array('index'),
	$model->name=>array('view','id'=>$model->idS),
	'Update',
);

$this->menu=array(
	array('label'=>'List Sick', 'url'=>array('index')),
	array('label'=>'Create Sick', 'url'=>array('create')),
	array('label'=>'View Sick', 'url'=>array('view', 'id'=>$model->idS)),
	array('label'=>'Manage Sick', 'url'=>array('admin')),
);
?>

<h1>Update Sick <?php echo $model->idS; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>