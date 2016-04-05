<div class="wells">
	<h3 align="left">List of building</h3>
	<form action="controller.php?action=list" Method="POST">  					
		<table id="example" class="table table-striped" cellspacing="0">
			
			<thead>
				<tr>
					<th>No.</th>
					<th width="5%" align="left"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">Select All</th>
					<th>building name</th>
					<th>Short Name</th>
				    <th>Edit </th>
					<th>Details</th>
				</tr>	
			</thead>
			<tbody>
				<?php
						$building = new Building();
						$buildingList = $building->listOfbuilding();
						foreach ($buildingList as $list) {
							echo '<tr>';
							echo '<td width="5%" align="center"></td>';
							echo '<td width="15%"><input type="checkbox" name="selector[]" id="selector[]" value="'.$list->building_id. '"/>';
							echo '<td width="40%" >'. $list->name.'</td>';
							echo '<td width="20%" >'. $list->building_type.'</td>';
							echo '<td width="10%" ><a href = "index.php?view=edit&id='.$list->building_id.'" ><span class="glyphicon glyphicon-list-alt"> </span>  Edit</a></td>';
							echo '<td><a href = "index.php?view=view&buildingId='.$list->building_id.'" ><span class="glyphicon glyphicon-list-alt"> </span>  View</a></td>';
							echo '</tr>';
						}
				     
				?>
			</tbody>
		</table>
	</form>
</div><!--End of well-->
</div><!--End of container-->