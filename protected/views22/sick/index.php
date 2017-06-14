<?php
/* @var $this SickController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sicks',
);

$this->menu=array(
	array('label'=>'Create Sick', 'url'=>array('create')),
	array('label'=>'Manage Sick', 'url'=>array('admin')),
);
?>

<h1>Sicks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
