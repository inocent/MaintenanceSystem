<div class="tab-content">
		<div class="tab-pane fade" id="register" style="background:white;height:1000px">
			<div class="panel-body">
				<fieldset><legend>Register Asset Elipokea Mosses</legend>
					<form name="form2" method="post" action="addguest.php">
						<div align="center" style="margin-top:5px">
							<table style="border-collapse:collapse;">
								<tr><td>
									<label>First Name</label>
									<input class="form-control" name="fname" placeholder="First Name" size="50" required>
									
									</td><td style="padding-left:50px">
									<label>Last Name</label>
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
		</div>