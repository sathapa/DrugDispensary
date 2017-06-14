

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Login Form</title>
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!--<h1 style="text-align:center; margin-top:10px; color:#fff;">MedcoEMR</h1>-->
<!--<h1 style="text-align:center; margin-top:10px;">Clinical Practice Management</h1>-->
<!--<h3 style="text-align:center;">Please Provide Login Details</h3>-->
<div id="wrapper">
    <div class="login-form">
        <?php $form=$this->beginWidget('CActiveForm', array(
            'id'=>'login-form',
            'enableClientValidation'=>true,
            'clientOptions'=>array(
                'validateOnSubmit'=>true,
            ),
        )); ?>

        <div class="error">
            <?php echo $form->error($model,'username',array('class'=>'error')); ?>
            <?php echo $form->error($model,'password',array('class'=>'error')); ?>
        </div>
        <div class="content" style="margin-top: 10px;">
            <?php echo $form->textField($model,'username', array('class'=>'input username','placeholder'=>'Username', 'onfocus'=>'this.value=null', 'style'=>'text-align:center;')); ?>
            <?php echo $form->passwordField($model,'password',array('class'=>'input password','placeholder'=>'Password','onfocus'=>'this.value=null', 'style'=>'text-align:center;')); ?>
        </div>

        <div class="footer">
            <?php echo CHtml::submitButton('Login', array('class'=>'button')); ?>
        </div>
        <?php $this->endWidget(); ?>
    </div>
</div>
<div class="gradient"></div>
</body>
</html>