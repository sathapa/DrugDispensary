<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$data = Drug::model()->findAllByAttributes(array('pid'=>$pid));

?>

<form action="<?php echo Yii::app()->controller->createUrl('Drug/PatientDrugRecord'); ?>" method="post" class="form-horizontal">
<!--    <div class="form">-->
<!--        <div class="alert alert-success"><strong>Drug Dispense:</strong></div>-->
<!--        --><?php //$form=$this->beginWidget('CActiveForm', array(
//            'id'=>'drug-form',
//            'action'=>'patientDrugRecord',
//            'enableClientValidation'=>true,
//            'clientOptions'=>array('onSubmit'=>true  ),
//            // Please note: When you enable ajax validation, make sure the corresponding
//            // controller action is handling ajax validation correctly.
//            // There is a call to performAjaxValidation() commented in generated controller code.
//            // See class documentation of CActiveForm for details on this.
//            'enableAjaxValidation'=>false,
//        )); ?>
<!--        --><?php //echo $form->errorSummary($model1,'Opps!!!', null,array('class'=>'alert alert-error span12')); ?>






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


        <input type='hidden' name='pid' value='<?php echo $pid; ?>' />
        <input type='hidden' name='day' value='<?php echo $day ?>' >


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
            if($day<=$days)
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

        <button type="button" class="btn btn-inverse" data-dismiss="modal" style="margin-left: 15px; float: right;">Close</button>
        <input type="submit" class="btn btn-success" name="submit" value="Submit Record" style="margin-left: 30px; float: right;">
    </div>
    <input type="submit" name="submit" value="Submit Record">

<?php //$this->endWidget(); ?>

<!--        //</form>-->


