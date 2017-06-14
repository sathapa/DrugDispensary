<?php
/* @var $this SickController */
/* @var $model Sick */

$this->breadcrumbs=array(
	'Sicks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Sick', 'url'=>array('index')),
	array('label'=>'Manage Sick', 'url'=>array('admin')),
);
?>

<h1>Create Sick</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>