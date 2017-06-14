<?php
/* @var $this PatientController */
/* @var $model Patient */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'patient-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        
        <div class="alert alert-success"><strong> Personal Details: </strong></div><br>
        
         <div class="row">
             <?php echo $form->labelEx($model,'title'); ?>
             <?php echo $form->dropDownList($model,'title',array(''=>'Title','Mr.'=>'Mr.','Ms.'=>'Ms.','Mrs.'=>'Mrs.','Dr.'=>'Dr.'),
                                                           array('class'=>'span3','maxlength'=>100)); ?>
             </div>    
             

	<div class="row">
		<?php echo $form->labelEx($model,'firstname'); ?>
		<?php echo $form->textField($model,'firstname',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'firstname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'middlename'); ?>
		<?php echo $form->textField($model,'middlename',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'middlename'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastname'); ?>
		<?php echo $form->textField($model,'lastname',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'lastname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Date of Birth'); ?>
      <?php          $this->widget('zii.widgets.jui.CJuiDatePicker',array(

                                                                'name'=>'datepicker',
                                                                'attribute'=>'dob',       
                                                                'model'=>$model,            
                                                                    'options'=>array(
                                                                    'showAnim'=>'slide',
                                                                               ),
                                                                'htmlOptions'=>array(
                                            'style'=>'height:20px;background-color:white;color:black;',
                                                                                    ),
                    )); ?>
            
		<?php echo $form->error($model,'dob'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
            
                <?php echo $form->dropDownList($model,'gender',array(''=>'Select One','male'=>'Male','female'=>'Female','other'=>'Other'),array('class'=>'span2','maxlength'=>100)); ?></td>
		<?php echo $form->error($model,'gender'); ?>

	</div>

        <div class="alert alert-success"> <strong>Address:</strong> </div><br>
	<div class="row">
		<?php echo $form->labelEx($model,'street'); ?>
		<?php echo $form->textField($model,'street',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'street'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'city'); ?>
		<?php echo $form->textField($model,'city',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'city'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->textField($model,'state',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'zipcode'); ?>
		<?php echo $form->textField($model,'zipcode',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'zipcode'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'country'); ?>
		<?php echo $form->textField($model,'country',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'country'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

        <div class="alert alert-success"><strong>In Case of Emergency:</strong> </div><br>
	<div class="row">
		<?php echo $form->labelEx($model,'relative'); ?>
		<?php echo $form->textField($model,'relative',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'relative'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'relation'); ?>
		<?php echo $form->textField($model,'relation',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'relation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'home_phone'); ?>
		<?php echo $form->textField($model,'home_phone'); ?>
		<?php echo $form->error($model,'home_phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cell'); ?>
		<?php echo $form->textField($model,'cell'); ?>
		<?php echo $form->error($model,'cell'); ?>
	</div>
        <br>
        <div class='alert alert-success'><strong>Social Insurance</strong></div><br>
	<div class="row">
		<?php echo $form->labelEx($model,'SocialInsuranceNumber'); ?>
		<?php echo $form->textField($model,'SIN',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'SIN'); ?>
	</div>

	<div class="form-actions">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
