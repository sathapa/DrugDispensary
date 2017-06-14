<?php
/* @var $this DrugController */
/* @var $model Drug */
$this->breadcrumbs=array(
    'Drugs'=>array('index'),
    'Schedule',
);

$this->menu=array(
    array('label'=>'Drug Report', 'url'=>array('drugreport')),
    array('label'=>'Create Drug', 'url'=>array('listPatient')),
);
?>

<?php
$criteria = new CDbCriteria;
$criteria->order = 'Days DESC';
$data1 = Drug::model()->findAllByAttributes(array('pid'=>$_GET['aid']), $criteria);
$days = $data1[0]->Days;
?>

<body>
</br>
<?php for($x=1; $x<=$days; $x++){ ?>

    <div  class="accordion" data-toggle="modal" style="text-align: center;" data-target="#myModal<?php echo $x; ?>">
       <botton class="btn btn-info btn-group-vertical" style="width:400px; "><?php echo 'Day'.' '.$x; ?></botton>
    </div>

    <!-- Modal -->
    <div class="modal hide fade" id="myModal<?php echo $x; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width: 1000px; margin-left: -480px;" >
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel"><?php echo 'Day'.' '.$x; ?></h4>
                </div>
                <div class="modal-body">

                    <?php  $this->renderPartial('dailySchedule', array('model'=>$model,'model1'=>$model1, "pid"=>$_GET['aid'],'day'=>$x)); ?>

                </div>

            </div>
        </div>
    </div>
<?php } ?>

</body>


