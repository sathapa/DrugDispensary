<?php
$this->menu=array(
array('label'=>'Drug Report', 'url'=>array('drugreport')),
array('label'=>'Create Drug', 'url'=>array('listPatient')),
);
?>

<?php
if(!empty($filter))
{
    ?>


    <table class="table table-bordered" xmlns="http://www.w3.org/1999/html">
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
        ?>
        <h1>   <?php echo $ram->firstname." ".$ram->lastname; ?>  </h1>

        <?php



        foreach ($filter as $da)
        {
            ?>
            <tr>
                <td><?php echo $da['DrugName']; ?></td>
                <td><?php echo $da['RecentDay']; ?></td>

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
<?php }
else
{
    ?>
    <h1> The Schedule has not inserted yet. <h1>
<?php  } ?>