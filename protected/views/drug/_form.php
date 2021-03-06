<?php
/* @var $this DrugController */
/* @var $model Drug */
/* @var $form CActiveForm */
?>

<div class="form">
    <div class="alert alert-success"><strong>Drug Dispense:</strong></div>
    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'drug-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation'=>false,
    )); ?>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'Patient Name'); ?>
        <?php echo $form->dropDownList($model,'pid',CHtml::listData(Patient::model()->findAll(),'id','firstname','lastname')); ?>
        <?php echo $form->error($model,'pid'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'DrugName'); ?>
        <?php /*echo $form->textFieldRow($model1,'icd10code',array('class'=>'span5','maxlength'=>500));*/
        $this->widget('zii.widgets.jui.CJuiAutoComplete', array(
            'model'=>$model,
            'attribute'=>'DrugName',
            'value'=>'Search',
            'source'=>$this->createUrl('autoComplete'),
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
            ),
            'htmlOptions'=>array(
                'class'=>'span3',
                'placeholder'=>'Product Name',
            ),
        ));
        ?>
        <?php echo $form->error($model,'DrugName'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'DosePerDay'); ?>
        <?php echo $form->textField($model,'DosePerDay',array('id'=>'dose')); ?>
        <?php echo $form->error($model,'DosePerDay'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'Days'); ?>
        <?php echo $form->textField($model,'Days',array('id'=>'days')); ?>
        <?php echo $form->error($model,'Days'); ?>
    </div>

    <hr />


    <div class="column">
        <?php echo $form->labelEx($model,'wakeup'); ?>
        <?php echo $form->textField($model,'wakeup',array('id'=>'wake','value'=>'0',  'style'=>'width:20px')); ?>
        <?php echo $form->error($model,'wakeup'); ?>
    </div>

    <div class="column">
        <?php echo $form->labelEx($model,'breakfast'); ?>
        <?php echo $form->textField($model,'breakfast',array('id'=>'break','value'=>'0','style'=>'width:20px')); ?>
        <?php echo $form->error($model,'breakfast'); ?>
    </div>

    <div class="column" >
        <?php echo $form->labelEx($model,'morning'); ?>
        <?php echo $form->textField($model,'morning',array('id'=>'mor','value'=>'0','style'=>'width:20px')); ?>
        <?php echo $form->error($model,'morning'); ?>
    </div>

    <div class="column">
        <?php echo $form->labelEx($model,'midmorning'); ?>
        <?php echo $form->textField($model,'midmorning',array('id'=>'midM','value'=>'0','style'=>'width:20px')); ?>
        <?php echo $form->error($model,'midmorning'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'midday'); ?>
        <?php echo $form->textField($model,'midday',array('id'=>'midD','value'=>'0','style'=>'width:20px')); ?>
        <?php echo $form->error($model,'midday'); ?>
    </div>

    <div class="column">
        <?php echo $form->labelEx($model,'lunch'); ?>
        <?php echo $form->textField($model,'lunch',array('id'=>'lun','value'=>'0','style'=>'width:20px')); ?>
        <?php echo $form->error($model,'lunch'); ?>
    </div>

    <div class="column">
        <?php echo $form->labelEx($model,'midafternoon'); ?>
        <?php echo $form->textField($model,'midafternoon',array('id'=>'midA','value'=>'0','style'=>'width:20px')); ?>
        <?php echo $form->error($model,'midafternoon',array('style'=>'width:20px')); ?>
    </div>

    <div class="column">
        <?php echo $form->labelEx($model,'evening'); ?>
        <?php echo $form->textField($model,'evening',array('id'=>'eve','value'=>'0','style'=>'width:20px')); ?>
        <?php echo $form->error($model,'evening'); ?>
    </div>
    <div class="column">
        <?php echo $form->labelEx($model,'dinner'); ?>
        <?php echo $form->textField($model,'dinner',array('id'=>'din','value'=>'0','style'=>'width:20px')); ?>
        <?php echo $form->error($model,'dinner'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'bedtime'); ?>
        <?php echo $form->textField($model,'bedtime',array('id'=>'bed','value'=>'0','style'=>'width:20px')); ?>
        <?php echo $form->error($model,'bedtime'); ?>
    </div>




    <div class="form-actions">
        <?php // echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
        <?php echo CHtml::submitButton('Assign Another Drug', array('name' => 'assign','onclick'=>'myFunction()')); ?>
        <?php echo CHtml::submitButton('Save', array('name' => 'Save','onClick'=>" return myFunction(); ")); ?>
    </div>



    <div class="column">
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->

<script language="javascript" type="text/javascript">

    function myFunction()
    {
        var x=document.getElementById("dose").value;
        var a=document.getElementById("break").value;
        var b=document.getElementById("wake").value;
        var c=document.getElementById("mor").value;
        var d=document.getElementById("midM").value;
        var e=document.getElementById("midD").value;
        var f=document.getElementById("lun").value;
        var g=document.getElementById("midA").value;
        var h=document.getElementById("eve").value;
        var i=document.getElementById("din").value;
        var j=document.getElementById("bed").value;

        var sum=a+b+c+d+e+f+g+h+i+j;
        var sum1 = parseInt(a)+parseInt(b) + parseInt(c)+parseInt(d) + parseInt(e)+parseInt(f) + parseInt(g)+parseInt(h)+ parseInt(i)+parseInt(j);

        if(x!= sum1)
        {
            alert("Not Equal");
            return false;
        }
        else{
            return true
        }

    }
</script>
