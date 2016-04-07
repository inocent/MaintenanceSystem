<html>	      
	<head>
		<style type="text/css" media="screen">
			@import url("themes/pmms/sites/all/themes/pmms/styledaf9.css?ne7jek");
		</style>
		<style type="text/css" media="all">
			@import url("themes/pmms/sites/all/themes/pmms/style.responsivedaf9.css?ne7jek");
		</style>
		
		<script type="text/javascript" src="theme/pmms/sites/all/themes/pmms/jquery1cc4.js?v=1.4.4"></script>
		<script type="text/javascript" src="theme/pmms/misc/jquery.once7839.js?v=1.2"></script>
		<script type="text/javascript" src="theme/pmms/misc/drupaldaf9.js?ne7jek"></script>
		<script type="text/javascript" src="theme/pmms/sites/all/themes/pmms/scriptdaf9.js?ne7jek"></script>
		<script type="text/javascript" src="theme/pmms/sites/all/themes/pmms/script.responsivedaf9.js?ne7jek"></script>
		
		<!-- Menu css -->
		<link href="<?php echo WEB_ROOT; ?>css/menustyles.css" rel="stylesheet">
		<!-- end of Menu css -->
		
		<!-- button css -->
		<link rel="stylesheet" href="<?php echo WEB_ROOT; ?>css/normalize.css">
		<link rel="stylesheet" href="<?php echo WEB_ROOT; ?>css/buttonstyle.css">
		<!-- end of button css -->
		
		<!-- from other site -->
		<link href="<?php echo WEB_ROOT; ?>resource/font-awesome/css/font-awesome.css" rel="stylesheet">	                        
		<script src="<?php echo WEB_ROOT; ?>resource/js/jquery.js"></script>    
		<script type="text/javascript" language="javascript" src="<?php echo WEB_ROOT; ?>resource/js/ui.js"></script>              
		<script type="text/javascript" language="javascript" src="<?php echo WEB_ROOT; ?>resource/js/main.js"></script>    
		<link href="<?php echo WEB_ROOT; ?>resource/css/main.css" rel="stylesheet">  
		<link href="<?php echo WEB_ROOT; ?>resource/css/ui.css" rel="stylesheet">   
		
		<!-- end from other site-->
		
		<!-- Bootstrap core CSS -->
		<link href="<?php echo WEB_ROOT; ?>css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo WEB_ROOT; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
		<link href="<?php echo WEB_ROOT; ?>css/dataTables.bootstrap.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT; ?>css/jquery.dataTables.css">
		<script type="text/javascript" language="javascript" src="<?php echo WEB_ROOT; ?>js/bootstrap.min.js"></script>
		<script type="text/javascript" language="javascript" src="<?php echo WEB_ROOT; ?>js/jquery.dataTables.js"></script>
		
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				var t = $('#example').DataTable( {
					"columnDefs": [ {
						"searchable": false,
						"orderable": false,
						"targets": 1
					} ],
					"order": [[ 3, 'asc' ]]
				} );
				
				t.on( 'order.dt search.dt', function () {
					t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
						cell.innerHTML = i+1;
					} );
				} ).draw();
			} );
			
			
			
			
			
			
			
			
			
			
			
			
			
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
		<?php include 'banner.php';?>
	</head>	
	
	<?php include 'home.php';?>
	<br><br>
	<div class="footer">
		<p align="center">	All rights are reserved as the university property &copy; 2016 </p>
	</div>
</body>
</html>



