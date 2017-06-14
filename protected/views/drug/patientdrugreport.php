<?php
$this->breadcrumbs=array(
	'Drugs'=>array('index'),
	'Report',
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


<div class="alert alert-inverse" style="margin: 10px;"><strong>Filter By Days</strong></div>
<form action="<?php echo Yii::app()->controller->createUrl('Drug/ReportFilter'); ?>" method="post" class="form-horizontal">
<?php  $pid=$_GET['aid']; ?>
    <input type="hidden" name="pid" value="<?php echo $pid; ?>">

<div class="control-group" style="margin: 10px;">
<select name="days">
    <?php for($x=1; $x<=$days; $x++) { ?>
    <option value="<?php echo $x; ?>">Day <?php echo $x;  ?></option>
<?php } ?>

</select>
    <input type="submit" name="submit" value="Filter" class="btn btn" style="height: 29px; color: black;"">
</form>
</div>


<div class="alert alert-inverse" style="margin: 10px;"><strong>Filter By Drugs</strong></div>
<div class="control-group" style="margin:10px;">
    <form action="<?php echo Yii::app()->controller->createUrl('Drug/ReportFilter2'); ?>" method="post" class="form-horizontal">
        <?php  $pid=$_GET['aid']; ?>

        <input type="hidden" name="pid" value="<?php echo $pid; ?>">

<!--        <select name="days" >-->
<!--            <option value="0">--Select Days--</option>-->
<!--            --><?php //for($x=1; $x<=$days; $x++) { ?>
<!--                <option value="--><?php //echo $x; ?><!--">Day --><?php //echo $x;  ?><!--</option>-->
<!--            --><?php //} ?>
<!---->
<!--        </select>-->


    <?php    $models = Drugschedule::model()->findAllByAttributes(array(
        'pid'=>$_GET['aid']),array(  'select'=>'DrugName',
        'group'=>'DrugName',


        'distinct'=>true,
        ));
    ?>

        <select name="drugs" style="margin-left: 20px;">
            <option value="0">--Select Drugs--</option>
           <?php foreach($models as $da)
             { ?>
                <option value="<?php echo $da['DrugName']; ?>"> <?php echo $da['DrugName'];  ?></option>
            <?php } ?>

        </select>

        <input type="submit" name="submit" value="Filter" class="btn btn-default" style="height: 29px; color: black;">
    </form>
</div>

<br />


<table class="table table-bordered">
    <tr>
        <th>Drug Name</th>
        <th>Day</th>
        <th>wakeup</th>
        <th>breakfast</th>
        <th>morning</th>
        <th>midmorning</th>
        <th>midday</th><th>lunch</th>
        <th>midafternoon</th><th>evening</th>
        <th>dinner</th><th>bedtime</th>
    </tr>
    <?php
    $ram=Patient::model()->findByPk($pid);
   ?> <hr /> <h1 style="text-align: center; padding: 30px;">   <?php echo $ram->firstname." ".$ram->lastname; ?>  </h1> <?php
    foreach($model as $da)
    {
        ?>
    <tr>
        <td><?php echo $da['DrugName']; ?></td>
        <td><?php echo $da['RecentDay']  ?> </td>
                <?php if($da['wakeup']==1){ ?><td class="text-success">Taken</td> <?php } elseif($da['wakeup']==2){ ?> <td class="text-error">Not Taken</td> <?php } else { ?><td>----</td>  <?php } ?>
        <?php if($da['breakfast']==1){ ?><td class="text-success">Taken</td> <?php } elseif($da['breakfast']==2){ ?> <td class="text-error">Not Taken</td> <?php } else { ?> <td>----</td> <?php } ?>
        <?php if($da['morning']==1){ ?><td class="text-success">Taken</td> <?php } elseif($da['morning']==2){ ?> <td class="text-error">Not Taken</td> <?php } else { ?> <td>----</td> <?php } ?>
        <?php if($da['midmorning']==1){ ?><td class="text-success">Taken</td> <?php } elseif($da['midmorning']==2){ ?> <td class="text-error">Not Taken</td> <?php } else { ?> <td>----</td> <?php } ?>
        <?php if($da['midday']==1){ ?><td class="text-success">Taken</td> <?php } elseif($da['midday']==2){ ?> <td class="text-error">Not Taken</td> <?php } else { ?> <td>----</td> <?php } ?>
        <?php if($da['lunch']==1){ ?><td class="text-success">Taken</td> <?php } elseif($da['lunch']==2){ ?> <td class="text-error">Not Taken</td> <?php } else { ?> <td>----</td> <?php } ?>
        <?php if($da['midafternoon']==1){ ?><td class="text-success">Taken</td> <?php } elseif($da['midafternoon']==2){ ?> <td class="text-error">Not Taken</td> <?php } else { ?> <td>----</td> <?php } ?>
        <?php if($da['evening']==1){ ?><td class="text-success">Taken</td> <?php } elseif($da['evening']==2){ ?> <td class="text-error">Not Taken</td> <?php } else { ?> <td>----</td> <?php } ?>
        <?php if($da['dinner']==1){ ?><td class="text-success">Taken</td> <?php } elseif($da['dinner']==2){ ?> <td class="text-error">Not Taken</td> <?php } else { ?> <td>----</td> <?php } ?>
        <?php if($da['bedtime']==1){ ?><td class="text-success">Taken</td> <?php } elseif($da['bedtime']==2){ ?> <td class="text-error">Not Taken</td> <?php } else { ?> <td>----</td> <?php } ?>

        
    </tr>
    <?php
    }
    ?>
</table>

