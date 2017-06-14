<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Medium Health Care Pvt Ltd">
    <title>MedcoEMr : MHC</title>
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/styles.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/styles1.css">
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.calculation.min.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.format.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/template.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/common.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/accordion.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/mootools-core.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/mootools-more.js"></script>
</head>

<body>
<?php $this->widget('bootstrap.widgets.TbNavbar',array(
    'items'=>array(
        array(
            'class'=>'bootstrap.widgets.TbMenu',
            'htmlOptions'=>array('class'=>'pull-right'),
            'items'=>array(
                array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('icon'=>'off','label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
            ),
        ),
    ),
)); ?>
<div id="top" style="margin-top: 2%">
   <!-- <div id="in-nav">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <ul class="pull-right">
                        <li><b><?php /*echo "<i class='icon-user'></i>".CHtml::link('Logout ('.Yii::app()->user->name.')',array('/site/logout')); */?></b></li>
                    </ul><a id="logo" href="<?php /*echo CController::createUrl('/Site/index'); */?>">
                        <p style="margin-top: 10px;"><font size='5'>MedcoEMR</font></p></a>
                </div>
            </div>
        </div>
    </div>-->
    <div id="in-sub-nav">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <ul>
                        <li><a href="<?php echo CController::createUrl('/Site/index'); ?>" ><i class="icon-th icon-2x"></i><br>Dashboard</a></li>
                        <li><a href="<?php echo CController::createUrl('/Appointment/create'); ?>"><i class="icon-phone-sign icon-2x"></i><br>Appointment</a></li>
                        <li><a href="<?php echo CController::createUrl('/Patient/create'); ?>"><i class="icon-edit icon-2x"></i><br>Registration</a></li>
                        <li><a href="<?php echo CController::createUrl('/wdcalendar'); ?>"><i class="icon-calendar icon-2x"></i><br>Scheduling</a></li>
                        <li><a href="<?php echo CController::createUrl('/LabOrder/index'); ?>"><i class="icon-desktop icon-2x"></i><br>Laboratory</a></li>
                        <li><a href="<?php echo CController::createUrl('/PhDrug/index'); ?>"><i class="icon-plus icon-2x"></i><br>Pharmacy</a></li>
                        <li><a href="<?php echo CController::createUrl('/Employee/index'); ?>"><i class="icon-group icon-2x"></i><br>Users</a></li>
                        <li><a href="<?php echo CController::createUrl('Settings/dash'); ?>"><i class="icon-cogs icon-2x"></i><br>Settings</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page">
    <div class="page-container">
        <div class="container">
            <div class="row">
                <div class="pull-left">
                    <div class="span12">
                        <?php echo $content; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="span12">
                <p class="pull-right"><b>Medium Health Care Pvt. Ltd</b></p>
                <p><b>MedcoEMR</b></p>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
