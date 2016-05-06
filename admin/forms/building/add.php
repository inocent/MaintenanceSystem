
<ul class="nav nav-tabs">
	<br>
	<li class="active"><a data-toggle="tab" href="#home"><strong>Buildings</strong></a></li>
	<li><a data-toggle="tab" href="#new"><strong>Add New Building</strong></a></li>
	<li><a data-toggle="tab" href="#details"><strong>Details</strong></a></li>
	<li><a data-toggle="tab" href="#description"><strong>Description</strong></a></li>
</ul>
<div class="tab-content">	
	<div id="new" class="tab-pane fade">
		<form class="form-horizontal well span4" action="forms/building/controller.php?action=add" method="POST">
			<fieldset>
				<div class="form-group">
					<div class="col-md-8">
						<label class="col-md-4 control-label" for="building_id">Building Id :</label>
						<div class="col-md-8">
							<input name="deptid" type="hidden" value="">
							<input class="form-control input-sm" id="building_id" name="building_id" placeholder="Building Id" type="text" value="">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-8">
						<label class="col-md-4 control-label" for="name">Building Name :</label>
						<div class="col-md-8">
							<input name="deptid" type="hidden" value="">
							<input class="form-control input-sm" id="name" name="name" placeholder="Building Name" type="text" value="">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-8">
						<label class="col-md-4 control-label" for="building_dtype">Building Type :</label>
						<div class="col-md-8">
							<input name="deptid" type="hidden" value="">
							<input class="form-control input-sm" id="building_dtype" name="building_dtype" placeholder="Building Type" type="text" value="">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-8">
						<label class="col-md-4 control-label" for="total_rooms">Total Rooms :</label>
						<div class="col-md-8">
							<input name="deptid" type="hidden" value="">
							<input class="form-control input-sm" id="total_rooms" name="total_rooms" placeholder="Total Rooms" type="integer" value="">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-8">
						<label class="col-md-4 control-label" for="departmentname">Department :</label>
						<div class="col-md-8">
							<input name="deptid" type="hidden" value="">
							<input class="form-control input-sm" id="departmentname" name="departmentname" placeholder="Department Name" type="text" value="">
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-8">
						<label class="col-md-4 control-label" for="Construction_date">Construction Date(mm/dd/yyyy) :</label>
						<div class="col-md-8">
							<input name="deptid" type="hidden" value="">
							<input class="form-control input-sm" id="Construction_date" name="Construction_date" placeholder= "Construction Date" type="text" value="">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label for="comment">Comments :</label>
					<textarea class="form-control" rows="5" id="comment"></textarea>
				</div>
				<label class="control-label">Select File</label>
				<input id="input-7" name="input7[]" multiple type="file" class="file file-loading" data-allowed-file-extensions='["csv", "txt"]'>
				<div class="form-group">
					<div class="col-md-8">
						<label class="col-md-4 control-label" for= "idno"></label>
						<div class="col-md-8">
							<button class="btn btn-default" name="save" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
						</div>
					</div>
				</div>  
			</fieldset> 
		</form>
	</div>
	
	<div id="home" class="tab-pane fade in active"><br>
		<form class="form-horizontal well span4" action="controller.php?action=add" method="POST">
			<fieldset>
				<table class="table table-striped" cellspacing="0">
					<thead>
						<tr>
							<th>No.</th>
							<th width="5%" align="left"><input type="checkbox" name="chkall" id="chkall" onclick="return checkall('selector[]');">All</th>
							<th>Building name</th>
							<th>Type</th>
							<th>Total Rooms</th>
							<th>Region</th>
							<th>Status</th>
						</tr>	
					</thead>
					<tbody>
						<?php
							$building = new Building();
							$buildingList = $building->listOfBuilding();
							foreach ($buildingList as $list) {
								echo '<td width="5%" align="center"></td>';
								echo '<td width="10%"><input type="checkbox" name="selector[]" id="selector[]" value="'.$list->building_id.'"/>';
								echo '<td width="15%" >'. $list->name.'</td>';
								echo '<td width="15%" >'. $list->building_type.'</td>';
								echo '<td width="15%" >'. $list->total_rooms.'</td>';
								echo '<td width="15%" >'. $list->building_type.'</td>';
								echo '<td width="15%" >'. $list->status.'</td>';
								echo '</tr>';
							}
						?>
					</tbody>
				</table> 
			</fieldset> 
		</form>
	</div>
	
	
	<div id="details" class="tab-pane fade">
		<form class="form-horizontal well span4" action="controller.php?action=add" method="POST">
		<fieldset>
				<legend>Region :</legend>
				<div class="form-group">
					<div class="rows">
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="clientName">Total Buildings:</label>
							<div class="col-md-8">
								<?php 
									
								?>
								</div>
						</div>
					</div>
					</div>
					<div class="form-group">
					<div class="rows">
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="clientName">Total Rooms:</label>
							<div class="col-md-8">
								<?php 
									
								?>
								</div>
						</div>
					</div>
					</div>
					<div class="form-group">
					<div class="rows">
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="clientName">Occupied Rooms:</label>
							<div class="col-md-8">
								<?php 
									
								?>
								</div>
						</div>
					</div>
					</div>
					
					<div class="form-group">
					<div class="rows">
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="clientName">Empty Rooms:</label>
							<div class="col-md-8">
								<?php 
									
								?>
								</div>
						</div>
					</div>
					</div
					
					<div class="form-group">
					<div class="rows">
						<div class="col-md-8">
							<label class="col-md-4 control-label" for="clientName">Current Status :</label>
							<div class="col-md-8">
								<?php 
									
								?>
								</div>
						</div>
					</div>
					</div
			</fieldset> 
		</form>
	</div>
	
	
	
	<div id="description" class="tab-pane fade">
		<div class="container">
			<div class="panel panel-primary">
				<form class="form-horizontal well span4" action="controller.php?action=add" method="POST">
					<form class="form-horizontal well span4" action="#.php" method="POST">
						<fieldset>
							<legend>Building Descriptions</legend>
							<div class="form-group">
								<div class="col-md-8">
									<label class="col-md-4 control-label" for="building_id">Building Id</label>
									<div class="col-md-8">
										<input name="deptid" type="hidden" value="">
										<input class="form-control input-sm" id="building_id" name="building_id" placeholder="Building Id" type="text" value="">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-8">
									<label class="col-md-4 control-label" for="name">Building Name</label>
									<div class="col-md-8">
										<input name="deptid" type="hidden" value="">
										<input class="form-control input-sm" id="name" name="name" placeholder="Building Name" type="text" value="">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="comment">Comment</label>
								<textarea class="form-control" rows="5" id="comment"></textarea>
							</div>
							<div class="form-group">
								<div class="col-md-8">
									<label class="col-md-4 control-label" for= "idno"></label>
									<div class="col-md-8">
										<button class="btn btn-default" name="save" type="submit" ><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
									</div>
								</div>
							</div>  
						</fieldset> 
					</form>
				</div>
			</div>
		</div>	
	</div>
	
