<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$data = Drug::model()->findAllByAttributes(array('pid'=>$pid));
?>
    <table class="table table-striped table-bordered">
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
    <?php

foreach ($data as $da)
{
    echo "<tr>";
 echo   "<td>". $da['DrugName']."</td>"; 
 if ($da['wakeup'] != 0) echo  "<td>"." &nbsp; ". $da['wakeup'].'&nbsp; &nbsp;'. '<input type="checkbox" name="option" value="estado"/>'."</td>";
else echo "<td></td>";
 if($da['breakfast'] != 0)
     echo   "<td>"."&nbsp; &nbsp; ". $da['breakfast'].'&nbsp; &nbsp; '. '<input type="checkbox" name="option" value="estado"/>'. '</td>';
  else echo "<td></td>";
if($da['morning'] != 0)
 echo   "<td>"."&nbsp; &nbsp; &nbsp; ". $da['morning'].'&nbsp; '. '<input type="checkbox" name="option" value="estado"/>'.'</td>';
else echo "<td></td>";

 if($da['midmorning'] != 0)  echo  "<td>"."&nbsp; &nbsp; &nbsp; ".  $da['midmorning'].' &nbsp; '. '<input type="checkbox" name="option" value="estado"/>'.'</td>';
else echo "<td></td>";
if($da['midday'] != 0)
echo   "<td>"."&nbsp; &nbsp;  ". $da['midday'].'&nbsp;  '. '<input type="checkbox" name="option" value="estado"/>'.'</td>';
 else echo "<td></td>";
if($da['lunch'] != 0)
 echo  "<td>"." &nbsp; ".  $da['lunch'].' &nbsp; '. '<input type="checkbox" name="option" value="estado"/>'.'</td>';
 else echo "<td></td>";
if($da['midafternoon'] != 0)
 echo  "<td>"."&nbsp; &nbsp; &nbsp; ". $da['midafternoon'].'&nbsp; &nbsp; &nbsp; '. '<input type="checkbox" name="option" value="estado"/>'.'</td>';
 else echo "<td></td>";

if($da['evening'] != 0)
echo  "<td>"."&nbsp; ". $da['evening'].'&nbsp; &nbsp; '. '<input type="checkbox" name="option" value="estado"/>'.'</td>';
else echo "<td></td>";
if($da['dinner'] != 0)

 echo  "<td>"."&nbsp; &nbsp;  ". $da['dinner'].' &nbsp; '. '<input type="checkbox" name="option" value="estado"/>'.'</td>';
else echo "<td></td>";
if($da['bedtime'] != 0)

 echo  "<td>"."&nbsp; &nbsp; ".  $da['bedtime'].'&nbsp;'. '<input type="checkbox" name="option" value="estado"/>'.'</td>';
else echo "<td></td>";

 echo "</tr>";
}


?>
</table>