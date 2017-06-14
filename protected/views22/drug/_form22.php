<?php
/* @var $this DrugController */
/* @var $model Drug */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'drug-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

          <div class="row">
		<?php echo $form->labelEx($model,'Patient Name'); ?>
		
	</div>
        
        
	<div class="row">
		<?php echo $form->labelEx($model,'DrugName'); ?>
		<?php /*echo $form->textFieldRow($model1,'icd10code',array('class'=>'span5','maxlength'=>500));*/
                $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
                    'model'=>$model1,
                    'attribute'=>'DrugName',
                    'value'=>'Search',
                    'source'=>$this->createUrl('autoComplete'),
                    // additional javascript options for the autocomplete plugin
                    'options'=>array(
                        'minLength'=>'1',
                        'showAnim'=>'fold',
                        'select'=>"js:function(event, ui) {
                                          $('#id').val(ui.item.id);
                                        }",
                        'change'=>"js:function(event, ui) {
                                          if (!ui.item) {
                                             $('#User_user_id').val('');
                                          }
                                        }",


                        /*'select' => "js:function(event, ui) {
	            $('#icd10no').val(ui.item.['icd10no']);
	            }",
                        'change' => "js:function(event, ui) {
	            if (!ui.item) {
	                $('#icd10no').val('');
	            }
	            }",*/
                    ),
                    'htmlOptions'=>array(
                        'class'=>'span3',
                        'placeholder'=>'Product Name',
                    ),
                ));
            ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'DosePerDay'); ?>
		<?php echo $form->textField($model,'DosePerDay'); ?>
		<?php echo $form->error($model,'DosePerDay'); ?>
	</div>
        

	<div class="row">
		<?php echo $form->labelEx($model,'DosePerDay'); ?>
		<?php echo $form->textField($model,'DosePerDay'); ?>
		<?php echo $form->error($model,'DosePerDay'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'wakeup'); ?>
		<?php echo $form->textField($model,'wakeup'); ?>
		<?php echo $form->error($model,'wakeup'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'breakfast'); ?>
		<?php echo $form->textField($model,'breakfast'); ?>
		<?php echo $form->error($model,'breakfast'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'morning'); ?>
		<?php echo $form->textField($model,'morning'); ?>
		<?php echo $form->error($model,'morning'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'midmorning'); ?>
		<?php echo $form->textField($model,'midmorning'); ?>
		<?php echo $form->error($model,'midmorning'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'midday'); ?>
		<?php echo $form->textField($model,'midday'); ?>
		<?php echo $form->error($model,'midday'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lunch'); ?>
		<?php echo $form->textField($model,'lunch'); ?>
		<?php echo $form->error($model,'lunch'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'midafternoon'); ?>
		<?php echo $form->textField($model,'midafternoon'); ?>
		<?php echo $form->error($model,'midafternoon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'evening'); ?>
		<?php echo $form->textField($model,'evening'); ?>
		<?php echo $form->error($model,'evening'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dinner'); ?>
		<?php echo $form->textField($model,'dinner'); ?>
		<?php echo $form->error($model,'dinner'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bedtime'); ?>
		<?php echo $form->textField($model,'bedtime'); ?>
		<?php echo $form->error($model,'bedtime'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
