<?php if ($model !== null):?>
<table border="1">

	<tr>
		<th width="80px">
		      id		</th>
 		<th width="80px">
		      pid		</th>
 		<th width="80px">
		      DrugName		</th>
 		<th width="80px">
		      DosePerDay		</th>
 		<th width="80px">
		      TotalDay		</th>
 		<th width="80px">
		      RecentDay		</th>
 		<th width="80px">
		      wakeup		</th>
 		<th width="80px">
		      breakfast		</th>
 		<th width="80px">
		      morning		</th>
 		<th width="80px">
		      midmorning		</th>
 		<th width="80px">
		      midday		</th>
 		<th width="80px">
		      lunch		</th>
 		<th width="80px">
		      midafternoon		</th>
 		<th width="80px">
		      evening		</th>
 		<th width="80px">
		      dinner		</th>
 		<th width="80px">
		      bedtime		</th>
 	</tr>
	<?php foreach($model as $row): ?>
	<tr>
        		<td>
			<?php echo $row->id; ?>
		</td>
       		<td>
			<?php echo $row->pid; ?>
		</td>
       		<td>
			<?php echo $row->DrugName; ?>
		</td>
       		<td>
			<?php echo $row->DosePerDay; ?>
		</td>
       		<td>
			<?php echo $row->TotalDay; ?>
		</td>
       		<td>
			<?php echo $row->RecentDay; ?>
		</td>
       		<td>
			<?php echo $row->wakeup; ?>
		</td>
       		<td>
			<?php echo $row->breakfast; ?>
		</td>
       		<td>
			<?php echo $row->morning; ?>
		</td>
       		<td>
			<?php echo $row->midmorning; ?>
		</td>
       		<td>
			<?php echo $row->midday; ?>
		</td>
       		<td>
			<?php echo $row->lunch; ?>
		</td>
       		<td>
			<?php echo $row->midafternoon; ?>
		</td>
       		<td>
			<?php echo $row->evening; ?>
		</td>
       		<td>
			<?php echo $row->dinner; ?>
		</td>
       		<td>
			<?php echo $row->bedtime; ?>
		</td>
       	</tr>
     <?php endforeach; ?>
</table>
<?php endif; ?>
