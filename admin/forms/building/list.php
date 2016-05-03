
	<div class="col-lg-4 col-md-8 col-sm-4">
	</div>
	<div class="col-lg-8 col-md-8 col-sm-8">
<div class="wells">
	<h3 align="left">List</h3> 					
		<table class="table table-striped" cellspacing="0">
			<thead>
				<tr>
					<th>No.</th>
					<th width="5%" align="left"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">Select All</th>
					<th>building name</th>
					<th>Type</th>
					<th>Total Rooms</th>
				</tr>	
			</thead>
			<tbody>
				<?php
     					$building = new Building();
						$buildingList = $building->listOfBuilding();
						foreach ($buildingList as $list) {
							echo '<td width="5%" align="center"></td>';
							echo '<td width="15%"><input type="checkbox" name="selector[]" id="selector[]" value="'.$list->building_id.'"/>';
							echo '<td width="40%" >'. $list->name.'</td>';
							echo '<td width="20%" >'. $list->building_type.'</td>';
							echo '<td width="20%" >'. $list->total_rooms.'</td>';
							echo '</tr>';
						}
				?>
			</tbody>
		</table>
	</form>
</div><!--End of well-->