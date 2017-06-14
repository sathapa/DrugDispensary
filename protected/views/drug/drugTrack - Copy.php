

<?php


$criteria = new CDbCriteria;
$criteria->order = 'Days DESC';
$data1 = Drug::model()->findAllByAttributes(array('pid'=>$_GET['aid']), $criteria);
$days = $data1[0]->Days;



?>

<?php /**

$this->widget(
'bootstrap.widgets.TbTabs',
array(
'type' => 'tabs', // 'tabs' or 'pills'
'tabs' => array(
array('label' => 'Day 1', 'content' =>$this->renderPartial('dailySchedule',array('model'=>$model,'pid'=>$_GET['aid']),true), 'active'=>true ),
array('label' => 'Day 2', 'content' => $this->renderPartial('dailySchedule',array('model'=>$model,'pid'=>$_GET['aid']),true)),
array('label' => 'Day 3', 'content' => $this->renderPartial('dailySchedule',array('model'=>$model,'pid'=>$_GET['aid']),true)),
array('label' => 'Day 4', 'content' => $this->renderPartial('dailySchedule',array('model'=>$model,'pid'=>$_GET['aid']),true)),
array('label' => 'Day 5', 'content' => $this->renderPartial('dailySchedule',array('model'=>$model,'pid'=>$_GET['aid']),true)),
array('label' => 'Day 6', 'content' => $this->renderPartial('dailySchedule',array('model'=>$model,'pid'=>$_GET['aid']),true)),
array('label' => 'Day 7', 'content' => $this->renderPartial('dailySchedule',array('model'=>$model,'pid'=>$_GET['aid']),true)),

),
)
); **/
?>
<body>
<?php for($x=1; $x<=$days; $x++){ ?>

    <div  class="sidebar-nav" data-toggle="modal" data-target="#myModal<?php echo $x; ?>">
        <li class="btn btn btn-large"><?php echo 'Day'.' '.$x; ?></li>
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
                    <?php


                    $data = Drug::model()->findAllByAttributes(array('pid'=>$_GET['aid']));

                    ?>

                    <form action="<?php echo Yii::app()->controller->createUrl('Drug/PatientDrugRecord'); ?>" method="post" class="form-horizontal">






                        <table class="table table-striped table-bordered">  </br> </br>
                            <tr> <th> DRUG NAME </th>
                                <th> WAKE UP </th>
                                <th> BREAK FAST </th>
                                <th> MORNING </th>
                                <th> MIDMORNING </th>
                                <th> MIDDAY </th>
                                <th> LUNCH </th>
                                <th> MIDAFTERNOON </th>
                                <th> EVENING </th>
                                <th> DINNER </th>
                                <th> BED TIME </th>
                            </tr>


                            <input type='hidden' name='pid' value='<?php echo $_GET['aid'] ?>' />
                            <input type='hidden' name='day' value='<?php echo $x ?>' >


                            <?php
                            $drugNo = 0;
                            foreach ($data as $da)
                            {

                                $wake = $da['wakeup'];
                                $breakf = $da['breakfast'];

                                $mor = $da['morning'];
                                $midM = $da['midmorning'];
                                $midd = $da['midday'];
                                $lun = $da['lunch'];
                                $midA = $da['midafternoon'];
                                $eve = $da['evening'];
                                $din = $da['dinner'];
                                $bed = $da['bedtime'];
                                ?>


                                <?php

                                $days = $da['Days'];
                                echo "<input type='hidden' name='days' value='$days' >";
                                if($days<=$x)
                                {


                                    ?>    <input type='hidden' name='<?php echo 'wake'.$drugNo; ?>' value='<?php echo $wake ?>' />
                                    <input type='hidden' name='<?php echo 'breakf'.$drugNo; ?>' value='<?php echo $breakf ?>' />
                                    <input type='hidden' name='<?php echo 'mor'.$drugNo; ?>' value='<?php echo $mor ?>' />
                                    <input type='hidden' name='<?php echo 'midM'.$drugNo; ?>' value='<?php echo $midM ?>' />
                                    <input type='hidden' name='<?php echo 'midd'.$drugNo; ?>' value='<?php echo $midd ?>' />
                                    <input type='hidden' name='<?php echo 'lun'.$drugNo; ?>' value='<?php echo $lun ?>' />
                                    <input type='hidden' name='<?php echo 'midA'.$drugNo; ?>' value='<?php echo $midA ?>' />
                                    <input type='hidden' name='<?php echo 'eve'.$drugNo; ?>' value='<?php echo $eve ?>' />
                                    <input type='hidden' name='<?php echo 'din'.$drugNo; ?>' value='<?php echo $din ?>' />
                                    <input type='hidden' name='<?php echo 'bed'.$drugNo; ?>' value='<?php echo $bed ?>' />

                                    <?php


                                    $dosePerDay = $da['DosePerDay'];
                                    $drug = $da['DrugName'];

                                    ?>
                                    <input type="hidden" name="dose" value="<?php echo $dosePerDay ; ?>" />
                                    <input type="hidden" name="<?php echo 'drug'.$drugNo; ?>" value='.<?php echo $drug ?>.' >

                                    <tr>
                                        <td> <?php
                                            echo "total day".$days;
                                            echo "today day".$x;
                                            echo   $da['DrugName'];
                                            if ($da['wakeup'] != 0)
                                            {
                                            ?>
                                        </td>
                                        <td>
                                            <?php echo $da['wakeup']; ?><input type='checkbox' name=<?php echo 'wakeup'.$drugNo; ?> value=<?php echo 'wakeup'.$drugNo; ?> />
                                        </td> <?php }
                                        else echo "<td>
      </td>";
                                        if($da['breakfast'] != 0)
                                            echo   "<td>"."&nbsp; &nbsp; ". $da['breakfast'].'&nbsp; &nbsp; '.  "<input type='checkbox' name='breakfast".$drugNo."' value='breakfast".$drugNo."' /> </td>";
                                        else echo "<td></td>";

                                        //                    if($da['morning'] != 0)
                                        //                        echo   "<td>"."&nbsp; &nbsp; &nbsp; ". $da['morning'].'&nbsp; '.  "<input type='checkbox' name='morning".$drugNo."' value='morning".$drugNo."' /> </td>";
                                        //                    else echo "<td></td>";

                                        if($da['morning'] != 0)
                                            echo   "<td>"."&nbsp; &nbsp; ". $da['morning'].'&nbsp; &nbsp; '.  "<input type='checkbox' name='morning".$drugNo."' value='morning".$drugNo."' /> </td>";
                                        else echo "<td></td>";


                                        if($da['midmorning'] != 0)  echo  "<td>"."&nbsp; &nbsp; &nbsp; ".  $da['midmorning'].' &nbsp; '.  "<input type='checkbox' name='midmorning".$drugNo."' value='midmorning".$drugNo."' /> </td>";
                                        else echo "<td></td>";

                                        if($da['midday'] != 0)
                                            echo   "<td>"."&nbsp; &nbsp;  ". $da['midday'].'&nbsp;  '. "<input type='checkbox' name='midday".$drugNo."' value='midday".$drugNo."' /> </td>";
                                        else echo "<td></td>";

                                        if($da['lunch'] != 0)
                                            echo  "<td>"." &nbsp; ".  $da['lunch'].' &nbsp; '. "<input type='checkbox' name='lunch".$drugNo."' value='lunch".$drugNo."' /> </td>";
                                        else echo "<td></td>";


                                        if($da['midafternoon'] != 0)
                                            echo  "<td>"."&nbsp; &nbsp; &nbsp; ". $da['midafternoon'].'&nbsp; &nbsp; &nbsp; '.  "<input type='checkbox' name='midafternoon".$drugNo."' value='midafternoon".$drugNo."' /> </td>";
                                        else echo "<td></td>";

                                        if($da['evening'] != 0)
                                            echo  "<td>"."&nbsp; ". $da['evening'].'&nbsp; &nbsp; '. "<input type='checkbox' name='evening".$drugNo."' value='evening".$drugNo."' /> </td>";
                                        else echo "<td></td>";

                                        if($da['dinner'] != 0)
                                            echo  "<td>"."&nbsp; &nbsp;  ". $da['dinner'].' &nbsp; '.  "<input type='checkbox' name='dinner".$drugNo."' value='dinner".$drugNo."' /> </td>";
                                        else echo "<td></td>";

                                        if($da['bedtime'] != 0)
                                            echo  "<td>"."&nbsp; &nbsp; ".  $da['bedtime'].'&nbsp;'.  "<input type='checkbox' name='bedtime".$drugNo."' value='bedtime".$drugNo."' /> </td>";
                                        else echo "<td>    </td>";
                                        ?>

                                    </tr>

                                    <?php


                                    $drugNo++;
                                }

                            }
                            ?>
                            <input type="hidden" name="drugNo" value="<?php echo $drugNo; ?>">
                        </table>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-success" name="submit" value="Submit Record" style="margin-left: 30px;">
                            <button type="button" class="btn btn-inverse" data-dismiss="modal" style="margin-left: 15px;">Close</button>
                        </div>
                    </form>





                </div>
                <!--            <div class="modal-footer">-->
                <!--                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                <!--                <button type="button" class="btn btn-primary">Save changes</button>-->
                <!--            </div>-->
            </div>
        </div>
    </div>
<?php } ?>
<!--<div class="modal-body" style="float: left;">-->
<!--    <div class="span14">-->
<!--   --><?php
//for ($x=1; $x<=$days; $x++)
//  {
//  ?>
<!--  <ul class="nav nav-tabs"><a href="--><?php //echo Yii::app()->controller->createUrl('Drug/Day',array('pid'=>$_GET['aid'],'day'=>$x)); ?><!--"><li class="active" data-toggle="tabs">--><?php //echo 'Day'.' '.$x; ?><!-- </li></a></ul>-->
<!--  --><?php //} ?>
<!--</div>-->
<!--</div>-->
</body>



<!--hamro sovit raja le gareko part ho yo-->
<!--<ul class="nav nav-pills">-->
<!--    --><?php
//    $pid=$_GET['aid'];
//    for ($x=1; $x<=$days; $x++)
//    {
//        ?>
<!--        <li><button class="btn btn" value="--><?php //echo $pid."-".$x; ?><!--" >--><?php //echo 'Day'.' '.$x; ?><!--</button>-->
<!--            <!-- <a href="--><?php ///*echo Yii::app()->controller->createUrl('Drug/Day',array('pid'=>$_GET['aid'],'day'=>$x)); */?><!--">--><?php ///*echo 'Day'.' '.$x; */?><!-- </a>--></li>
<!--    --><?php //} ?>
<!--</ul>-->
<!--<div id="dayResult">-->
<!--</div>-->
<!--<script>-->
<!--    $("button").click(function()-->
<!--    {-->
<!--        var btnval=$(this).val();-->
<!--        var btnInfo=btnval.split("-");-->
<!--        var pid=btnInfo['0'];-->
<!--        var day=btnInfo['1'];-->
<!--        $.ajax(-->
<!--            {-->
<!--                type:'POST',-->
<!--                data:{pid:pid,day:day},-->
<!--                url:'--><?php //echo Yii::app()->request->baseUrl; ?><!--/Drug/Day',-->
<!--                success:function(result)-->
<!--                {-->
<!--                    $("#dayResult").html(result);-->
<!--                }-->
<!--            });-->
<!--    });-->
<!--</script>-->

