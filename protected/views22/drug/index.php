<?php
/* @var $this DrugController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Drugs',
);

$this->menu=array(
	array('label'=>'Create Drug', 'url'=>array('create')),
	array('label'=>'Manage Drug', 'url'=>array('admin')),
);
?>

<h1>Drugs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
