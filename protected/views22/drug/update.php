<?php
/* @var $this DrugController */
/* @var $model Drug */

$this->breadcrumbs=array(
	'Drugs'=>array('index'),
	$model->drugId=>array('view','id'=>$model->drugId),
	'Update',
);

$this->menu=array(
	array('label'=>'List Drug', 'url'=>array('index')),
	array('label'=>'Create Drug', 'url'=>array('create')),
	array('label'=>'View Drug', 'url'=>array('view', 'id'=>$model->drugId)),
	array('label'=>'Manage Drug', 'url'=>array('admin')),
);
?>

<h1>Update Drug <?php echo $model->drugId; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>