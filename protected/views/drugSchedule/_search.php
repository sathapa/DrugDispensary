<?php  $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'search-drugschedule-form',
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
));  ?>


	<?php echo $form->textFieldRow($model,'id',array('class'=>'span5')); ?>

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

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'icon'=>'search white', 'label'=>'Search')); ?>
               <?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'button', 'icon'=>'icon-remove-sign white', 'label'=>'Reset', 'htmlOptions'=>array('class'=>'btnreset btn-small'))); ?>
	</div>

<?php $this->endWidget(); ?>


<?php $cs = Yii::app()->getClientScript();
$cs->registerCoreScript('jquery');
$cs->registerCoreScript('jquery.ui');
$cs->registerCssFile(Yii::app()->request->baseUrl.'/css/bootstrap/jquery-ui.css');
?>	
   <script>
	$(".btnreset").click(function(){
		$(":input","#search-drugschedule-form").each(function() {
		var type = this.type;
		var tag = this.tagName.toLowerCase(); // normalize case
		if (type == "text" || type == "password" || tag == "textarea") this.value = "";
		else if (type == "checkbox" || type == "radio") this.checked = false;
		else if (tag == "select") this.selectedIndex = "";
	  });
	});
   </script>

