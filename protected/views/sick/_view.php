<?php
/* @var $this SickController */
/* @var $data Sick */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idS')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idS), array('view', 'id'=>$data->idS)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::encode($data->id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('disease')); ?>:</b>
	<?php echo CHtml::encode($data->disease); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('duration')); ?>:</b>
	<?php echo CHtml::encode($data->duration); ?>
	<br />


</div>