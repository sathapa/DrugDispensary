<div class="form">
<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'drugschedule-form',
	'enableAjaxValidation'=>false,
        'method'=>'post',
	'type'=>'horizontal',
	'htmlOptions'=>array(
		'enctype'=>'multipart/form-data'
	)
)); ?>
     	<fieldset>
		<legend>
			<p class="note">Fields with <span class="required">*</span> are required.</p>
		</legend>

	<?php echo $form->errorSummary($model,'Opps!!!', null,array('class'=>'alert alert-error span12')); ?>
        		
   <div class="control-group">		
			<div class="span4">

	<?php echo $form->textFieldRow($model,'pid',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'DrugName',array('class'=>'span5','maxlength'=>125)); ?>

	<?php echo $form->textFieldRow($model,'DosePerDay',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'TotalDay',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'RecentDay',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'wakeup',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'breakfast',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'morning',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'midmorning',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'midday',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'lunch',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'midafternoon',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'evening',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'dinner',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'bedtime',array('class'=>'span5')); ?>

                        </div>   
  </div>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
                        'icon'=>'ok white',  
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
              <?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'reset',
                        'icon'=>'remove',  
			'label'=>'Reset',
		)); ?>
	</div>
</fieldset>

<?php $this->endWidget(); ?>

</div>
