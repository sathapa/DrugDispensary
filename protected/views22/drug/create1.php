<?php
/* @var $this DrugController */
/* @var $model Drug */

$this->breadcrumbs=array(
	'Drugs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Drug', 'url'=>array('index')),
	array('label'=>'Manage Drug', 'url'=>array('admin')),
);
?>

<h1>Create Drug</h1>

<?php $this->renderPartial('_form1', array('model'=>$model,'model1'=>$model)); ?>