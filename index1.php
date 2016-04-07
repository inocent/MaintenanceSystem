<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Home</title>
		<!--<link href="resource/css/bootstrap.min.css" rel="stylesheet">-->
		<link href="resource/font-awesome/css/font-awesome.css" rel="stylesheet">	                        
		<link href="resource/css/main.css" rel="stylesheet">
		<script src="resource/js/jquery.js"></script>    
		<script src="resource/js/ui.js"></script>              
		<script src="resource/js/main.js"></script>    
		<link href="resource/css/main.css" rel="stylesheet">  
		<link href="resource/css/ui.css" rel="stylesheet">   
		<script>       
			function validateAdmin(){
				
				var un=document.admin.user.value;
				var pass=document.admin.pass.value;
				if(un=="" || pass==""){
					alert("Please Fill All The Field");
					if(un==""){
						document.admin.user.focus();
						}else{
						document.admin.pass.focus();
					}
					return false;
					}else{
					return true;
				}
			}
			function checkArt(){
				if(confirm("Are you registered")){
					location.href="#guest data-toggle='tab'";
					}else{
					location.href="#register";
				}				
			}
			function validateReception(){
				var un=document.reception.ruser.value;
				var pass=document.reception.rpassword.value;
				if(un=="" || pass==""){
					alert("Please Fill All The Field");
					if(un==""){
						document.reception.ruser.focus();
						}else{
						document.reception.rpassword.focus();
					}
					return false;
					}else{
					return true;
				}
			}
	        function validateReception(){
				var un=document.reception.user.value;
				var pass=document.reception.pass.value;
				if(un=="" || pass==""){
					alert("Please Fill All The Field");
					if(un==""){
						document.reception.user.focus();
						}else{
						document.reception.pass.focus();
					}
					return false;
					}else{
					return true;
				}
			}
			
			function validateGuest(){
				var un=document.guest.user.value;
				var pass=document.guest.pass.value;
				var rpass=document.guest.rpass.value;
				if(un=="" || pass==""){
					alert("Please Fill All The Field");
					if(un==""){
						document.guest.user.focus();
						}else{
						document.guest.pass.focus();
					}
					return false;
					}else{
					return true;
				}
			}	
			function validateP(){
				
				var pass=document.form2.pass.value;
				var rpass=document.form2.pass.value;
				if(pass!=rpass){
					alert("Please password must match");
					return false; 
				}                    
			}
			
			function validate(){	
				
				var fname=document.form2.fname.value;
				var lname=document.form2.lname.value;
				var occ=document.form2.occupation.value;
				var user=document.form2.user.value;
				var pass=document.form2.pass.value;
				var rpass=document.form2.pass.value;
				var phone=document.form2.phone.value;
				var address=document.form2.address.value;
				var age=document.form2.age.value;
				var nation=document.form2.nation.value;
				var region=document.form2.region.value;
				
				if(fname==""||lname==""||pass==""||phone==""||occ==""||address==""||age==""||user==""||nation==""||region=="")
				{
					alert("Please Fill All The Field");
					return false;
					}else if(pass!=rpass){
					alert("Please password must match");
					return false; 
				}
				
				document.form2.action="addguest.php" ; 
				document.form2.method="post";
				document.form2.submit();
			}
			function validateEmail(input){
				var pattern=/^([a-zA-Z0-9_\.\-])+\@+([a-zA-Z0-9\-])+\.+([a-z]{2,4})$/;
				if(input!=""){
					if(pattern.test(input)){
						return true;
					}
					else{
						alert("Error! This is not a valid email address");
						eclear();
						return false;
					}
				}
			}
			function validatePhone(input){
				var pattern=/^0\d{9}$/;
				
				if(input!=""){
					if(pattern.test(input)){
						return true;
					}
					else{
						alert("Error! This is not a valid phone number");
						pclear();
						return false;
					}
				}
			}
			function eclear(){
				document.form2.email.value="";
			}
			function pclear(){
				document.form2.phone.value="";
			}
			function isNumberKey(evt)
			{
				var charCode = (evt.which) ? evt.which : event.keyCode;
				if (charCode != 46 && charCode > 31 
				&& (charCode < 48 || charCode > 57))
				return false;
				
				return true;
			}	
		</script>
		
	</head>
	<body style="overflow-y:auto hidden">	
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">   
            <div class="navbar-default navbar-static-side" style="margin-top:80px">
                <div class="sidebar-collapse" >
                    <ul class="nav" id="side-menu">
						<li class="active"><a href="#home" data-toggle="tab">Home</a>
						</li>
						<li><a href="#homf" data-toggle="tab">Katika Ubora</a>
						</li>
						<li><a href="#register" data-toggle="tab">Guest Self Registration</a>
						</li>
						<li><a href="#guest" data-toggle="tab">Guest Login</a>
						</li>
						<li><a href="#reception" data-toggle="tab">Reception Login</a>
						</li>														
						<li><a href="#admin" data-toggle="tab">Administrator Login</a></li>
						<li><a href="#admin" data-toggle="tab"> acha  hapa</a></li>
						
					</ul>
					
				</div>
				
			</div>
            
			<div class="tab-content">								
				<!--guest login-->			   
				<div class="tab-pane fade" id="guest" style="padding-left:400px;background:white;height:1000px">
					
					<div style="position:absolute;width:100%;padding-top:50px">
						
						<div style="position:absolute;width:400px">
							
							<div class="panel-body">
								<form role="form" name="guest" method="post" action="login_guest.php" onSubmit="return validateGuest();">
									<fieldset>
										<legend> Guest Login</legend>
										<div class="form-group">
											<input class="form-control" placeholder="Username" name="puser" type="text">
										</div>
										<div class="form-group">
											<input class="form-control" placeholder="Password" name="ppass" type="password" value="">
										</div>
										<center>
											<button type="submit" style="width:100px" class="btn btn-success">Login</button>&nbsp;&nbsp;<button type="reset" style="width:100px" class="btn btn-success">Reset</button>
										</center>
									</fieldset>  
								</form>
							</div>
							
						</div>
					</div>
				</div>
				<!--SignUp Panel-->					
				<div class="tab-pane fade" id="register" style="padding-left:38%;background:white;height:1000px">
					
					<div style="position:absolute;width:100%;padding-top:0px">
						
						<div style="position:absolute;width:730px;height:200px;">
							<div class="panel-body">
								<fieldset><legend>Guest Registration</legend>
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
				</div>					
				<!--reception Login-->					
				<div class="tab-pane fade" id="reception" style="padding-left:400px;background:white;height:1000px">
					
					<div style="position:absolute;color:red;background:#ffffff;width:100%;height:100%;">					 
						<div style="padding-top:50px;width:400px">                                    
							<div class="panel-body">
								<form role="form" name="reception" method="post" action="login_reception.php" onSubmit="return validateReception();">
									<fieldset style="border:1px solid transparent">
										<legend> Reception Login</legend>
										<div class="form-group">
											<input class="form-control" placeholder="Username" name="user" type="text">
										</div>
										<div class="form-group">
											<input class="form-control" placeholder="Password" name="pass" type="password" value="">
										</div>
										<center>
											<button type="submit" style="width:100px" class="btn btn-success">Login</button>&nbsp;&nbsp;<button type="reset" style="width:100px" class="btn btn-success">Reset</button>
										</center>
									</fieldset>  
								</form>
							</div>					
						</div>
					</div>
					
				
				<div class="tab-pane fade" id="reception" style="padding-left:400px;background:white;height:1000px">
					
					<div style="position:absolute;color:red;background:#ffffff;width:100%;height:100%;">					 
						<div style="padding-top:50px;width:400px">                                    
							<div class="panel-body">
								<form role="form" name="acha" method="post" action="acha.php" onSubmit="return validateReception();">
									<fieldset style="border:1px solid transparent">
										<legend> Acha Login</legend>
										<div class="form-group">
											<input class="form-control" placeholder="Username" name="user" type="text">
										</div>
										<div class="form-group">
											<input class="form-control" placeholder="Password" name="pass" type="password" value="">
										</div>
										<center>
											<button type="submit" style="width:100px" class="btn btn-success">Login</button>&nbsp;&nbsp;<button type="reset" style="width:100px" class="btn btn-success">Reset</button>
										</center>
									</fieldset>  
								</form>
							</div>					
						</div>
					</div>
				
					
					
					
					
					
					
					
				</div>	        	
				<!--Administrator Login-->
				<div class="tab-pane fade" id="admin" style="background:white;height:1000px">                                   
					<div style="position:absolute;color:red;background:#ffffff;width:100%;height:100%;">					 
						<div style="padding-top:50px;width:800px;padding-left:400px">                                   
							<div class="panel-body">
								<form role="form" name="admin" method="post" action="login_admin.php" onsubmit="return validateAdmin();">
									<fieldset><legend>Administrator Login</legend>
										<div class="form-group">
											<input class="form-control" placeholder="Username" name="user" type="text" autofocus>
										</div>
										<div class="form-group">
											<input class="form-control" placeholder="Password" name="pass" type="password" value="">
										</div>
										<center>	
											<button type="submit" style="width:100px" class="btn btn-success">Login</button>&nbsp;&nbsp;<button type="reset" style="width:100px" class="btn btn-success">Reset</button>
										</center>							</fieldset>
								</form>
							</div>					
						</div>
					</div>
				</div>							                           				
				<!-- Katika Ubora -->								
				<div class="tab-pane fade" id="homf" style="padding-left:400px;background:white;height:1000px">
					<div style="position:absolute;width:100%;padding-top:50px">
						
						<div style="position:absolute;width:400px">
							
							<div class="panel-body">
								<form role="form" name="guest" method="post" action="login_guest.php" onSubmit="return validateGuest();">	
									<input type="text" name="denis" placeholder="Please enter your name">
									<input class="form-control" placeholder="Username" name="puser" type="text">
								</div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="ppass" type="password" value="">
								</div>
							</form>						  
						</div>
					</div>
				</div>
			</div>
			<!-- End Katika ubora -->        
		</div>                                                                
	</nav>
    <script src="resource/js/jquery-1.10.2.js"></script>
    <script src="resource/js/bootstrap.min.js"></script>
    <script src="resource/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="resource/js/main.js"></script>
	<script type="text/javascript">
		var s="image/img/";                      
		setInterval(function(){
			document.getElementById("hp").src=s+Math.floor(Math.random(7)*10)+".jpg";                          
		},2000);                     
	</script> 
</body>
<div style="background:#de3cce;color:white;width:100%;position:absolute;top:97%;height:3%;z-index:9999999;text-align:center;">
	&copy;&nbsp;
</div>
</html>