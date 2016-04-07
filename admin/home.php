<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Home</title>
		</head>
		
<body style="overflow-y:auto hidden">
<div class="container">
	<div class="col-md-3">
		<!-- Assets Panel -->
		<div class="panel panel-info">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" href="#collapse1">Assets</a>
				</h4>
			</div>
			<div id="collapse1" class="panel-collapse collapse">
				<div class="panel-body"><a href="modules/asset/building/index.php?page=2">Buildings</a></div>
				<div class="panel-body"><a href="#register" data-toggle="tab">Registration</a></div>
				<div class="panel-body"><a href="#calender" data-toggle="tab">Calender</a></div>
				<div class="panel-body"><a href="#home" data-toggle="tab">Home</a></div>
				<div class="panel-body">Lab Equipment</div>
				<div class="panel-body">Furnitures</div>
				<div class="panel-body">Fixtures</div>
				<div class="panel-body">Office Equipment</div>
			</div>
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" href="#collapse2">Departments</a>
				</h4>
			</div>
			<div id="collapse2" class="panel-collapse collapse">
				<div class="panel-body">Panel Body</div>
				<div class="panel-body">Panel Body</div>
				<div class="panel-body">Panel Body</div>
				<div class="panel-body">Panel Body</div>
				
			</div>
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" href="#collapse3">Components</a>
				</h4>
			</div>
			<div id="collapse3" class="panel-collapse collapse">
				<div class="panel-body">Panel Body</div>
				<div class="panel-body">Panel Body</div>
				<div class="panel-body">Panel Body</div>
				<div class="panel-body">Panel Body</div>
				
			</div>
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" href="#collapse4">Contacts</a>
				</h4>
			</div>
			<div id="collapse4" class="panel-collapse collapse">
				<div class="panel-body">Panel Body</div>
				
			</div>
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" href="#collapse5">Preventive Maintenance</a>
				</h4>
			</div>
			<div id="collapse5" class="panel-collapse collapse">
				<div class="panel-body">Panel Body</div>
				
			</div>
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" href="#collapse6">Requests Module</a>
				</h4>
			</div>
			<div id="collapse6" class="panel-collapse collapse">
				<div class="panel-body">Inbox</div>
				<div class="panel-body">Sent</div>
				<div class="panel-body">Draft</div>
				
			</div>
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" href="#collapse7">Regions</a>
				</h4>
			</div>
			<div id="collapse7" class="panel-collapse collapse">
				<div class="panel-body">Panel Body</div>
				
			</div>
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" href="#collapse8">Service Contracts</a>
				</h4>
			</div>
			<div id="collapse8" class="panel-collapse collapse">
				<div class="panel-body">Panel Body</div>
				
			</div>
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" href="#collapse9">Documents</a>
				</h4>
			</div>
			<div id="collapse9" class="panel-collapse collapse">
				<div class="panel-body">Panel Body</div>
				
			</div>
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" href="#collapse10">Reports</a>
				</h4>
			</div>
			<div id="collapse10" class="panel-collapse collapse">
				<div class="panel-body">Panel Body</div>
				
			</div>
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" href="#collapse10">FAQ</a>
				</h4>
			</div>
			<div id="collapse11" class="panel-collapse collapse">
				<div class="panel-body">Panel Body</div>
				
			</div>
		</div>
	</div>
    <div class="tab-content">
		<div class="tab-pane fade in active" id="home" style="background:white;height:1000px">
			<div class="panel-body">
				<fieldset><legend>Home Please </legend>
					<form name="form2" method="post" action="addguest.php">
						<div align="center" style="margin-top:5px">
							<table style="border-collapse:collapse;">
								<tr><td>
									<label>modify to get you home</label>
									<input class="form-control" name="fname" placeholder="First Name" size="50" required>
									
									</td><td style="padding-left:50px">
									<label>haha home please</label>
									<input class="form-control" name="lname" placeholder="Last Name" size="50" required>
								</td>
								</tr>
								<tr><td style="padding-top:10px">
									<label>Occupation</label>
									<input class="form-control" type="text" name="occupation" placeholder="guest Occupation" size="50" required>
									
									</td><td style="padding-left:50px;padding-top:10px">
									<label>Address</label>
									<input class="form-control" name="address" placeholder="Address" size="50" required>
								</td>
								</tr>
								<tr><td style="padding-top:10px">
									<label>Marital Status</label>
									<select class="form-control" name="marital_status" required>
										<option selected value="">Select your marital status</option>
										<option value="Single">Single</option>
										<option value="Married">Married</option>
									</select>						
									</td><td style="padding-left:50px;padding-top:10px">
									<label>Gender/Sex</label>
									<select class="form-control" name="sex" required>
										<option value="" selected>Select your gender</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</td>
								</tr>					
								<tr><td style="padding-top:10px">
									<label>Date of Birth(mm/dd/yyyy)</label>
									<input class="form-control"  id='datepickerR' name="age" placeholder="Guest Age" size="50" type="date" required>
									</td><td style="padding-left:50px;padding-top:10px">
									<label>Phone Number</label>
									<input class="form-control" name="phone" placeholder="Phone Number" size="50" onBlur="return validatePhone(this.value);" required>
								</td>
								</tr>                    
								<tr><td style="padding-top:10px">
									<label>Blood Group</label>
									<select class="form-control" name="blood" required>
										<option value="" selected>Select your blood group</option>		
										<option value="O+">O +ve</option>
										<option value="O-">O -ve</option>
										<option value="A+">A +ve</option>
										<option value="A-">A -ve</option>
										<option value="B+">B +ve</option>
										<option value="B-">B -ve</option>
										<option value="AB+">AB +ve</option>
										<option value="AB-">AB -ve</option>
									</select>
									</td><td style="padding-left:50px;padding-top:10px">
									<label>Nationality</label>
									<input class="form-control" name="nation" placeholder="Guest Nationality" size="50" required>
								</td>
								</tr>
								
								<tr><td style="padding-top:10px">
									<label>Username</label>
									<input class="form-control" name="user" placeholder="username" size="50" required>
									
								</td>
								<td  style="padding-left:50px;padding-top:10px">
									<label>Region</label>
									<input class="form-control" name="region" placeholder="Guest Region" size="50" required>
								</td>
								</tr>
								
								<tr><td style="padding-top:10px">
									<label>Password</label>
									<input class="form-control" type="password" name="rpass" placeholder="Password" onBlur="return validateP();" size="50" required>
									
									</td><td style="padding-left:50px;padding-top:10px">
									<label>Repeat Password</label>
									<input class="form-control" type="password" name="pass" onBlur="return validateP();"placeholder="password repeat" size="50" required>
								</td>
								</tr>
								<tr><td style="padding-top:20px" colspan="2"><center><input type="button" onclick="validate();" class="btn btn-default" value="Submit" >&nbsp;&nbsp;&nbsp;&nbsp;<button type="reset" class="btn btn-default">Reset</button></center></td></tr>					
							</table>
						</div>
					</form>
				</fieldset>
			</div>
		</div>
		
		<div class="tab-pane fade" id="calender" style="background:white;height:1000px">
			<div class="panel-body">
				<fieldset><legend>Calender</legend>
					<form name="form2" method="post" action="addguest.php">
						<div align="center" style="margin-top:5px">
							<table style="border-collapse:collapse;">
								<tr><td>
									<label>Elipokea</label>
									<input class="form-control" name="fname" placeholder="First Name" size="50" required>
									<a href="forms/register.php">click here</a>
									</td><td style="padding-left:50px">
									<label>Mosses</label>
									<input class="form-control" name="lname" placeholder="Last Name" size="50" required>
								</td>
								</tr>
								
								<tr><td style="padding-top:20px" colspan="2"><center><input type="button" onclick="validate();" class="btn btn-default" value="Submit" >&nbsp;&nbsp;&nbsp;&nbsp;<button type="reset" class="btn btn-default">Reset</button></center></td></tr>					
							</table>
						</div>
					</form>
				</fieldset>
			</div>
		</div>
		

		    <?php
			require_once('forms/register.php');
			?>
		<div class="tab-pane fade" id="register" style="background:white;height:1000px">
			<div class="form-group">
			   <a href="<?php echo WEB_ROOT; ?>admin/index.php?page=register">here</a>
			</div>
		</div>
	</div>
</div>
</body>
</html>
