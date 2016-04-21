<html>	      
	<head>	
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
		
		<!-- Bootstrap core CSS -->
		<link href="<?php echo WEB_ROOT; ?>css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo WEB_ROOT; ?>css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
		<link href="<?php echo WEB_ROOT; ?>css/dataTables.bootstrap.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" type="text/css" href="<?php echo WEB_ROOT; ?>css/jquery.dataTables.css">
		<script type="text/javascript" language="javascript" src="<?php echo WEB_ROOT; ?>js/jquery.js"></script>
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
			
		</script>
		<?php include 'banner.php'; 
			 include 'navbar.php';
			 check_message();
		?>
	</head>	
	<body>
 <!-- something-->
 <br>
 <br>
 <br>
 <br>
 <br>
	</body>
</html>
<footer>
		
		<!-- end of button css -->
		<script src="<?php echo WEB_ROOT; ?>js/tooltip.js"></script>
		<!--     <script src="assets/js/jquery.js"></script>>-->
		<script src="<?php echo WEB_ROOT; ?>js/bootstrap.min.js"></script>
		<script src="<?php echo WEB_ROOT; ?>js/popover.js"></script>
		<script type="text/javascript" src="<?php echo WEB_ROOT; ?>js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
		<script type="text/javascript" src="<?php echo WEB_ROOT; ?>js/locales/bootstrap-datetimepicker.uk.js" charset="UTF-8"></script>
		
		<script type="text/javascript">
			$('.form_curdate').datetimepicker({
				language:  'en',
				weekStart: 1,
				todayBtn:  1,
				autoclose: 1,
				todayHighlight: 1,
				startView: 2,
				minView: 2,
				forceParse: 0
			});
			$('.form_bdatess').datetimepicker({
				language:  'en',
				weekStart: 1,
				todayBtn:  1,
				autoclose: 1,
				todayHighlight: 1,
				startView: 2,
				minView: 2,
				forceParse: 0
			});
		</script>
		<script>
			function checkall(selector)
			{
				if(document.getElementById('chkall').checked==true)
				{
					var chkelement=document.getElementsByName(selector);
					for(var i=0;i<chkelement.length;i++)
					{
						chkelement.item(i).checked=true;
					}
				}
				else
				{
					var chkelement=document.getElementsByName(selector);
					for(var i=0;i<chkelement.length;i++)
					{
						chkelement.item(i).checked=false;
					}
				}
			}
			function checkNumber(textBox){
				while (textBox.value.length > 0 && isNaN(textBox.value)) {
					textBox.value = textBox.value.substring(0, textBox.value.length - 1)
				}
				textBox.value = trim(textBox.value);
			}
			//
			function checkText(textBox)
			{
				var alphaExp = /^[a-zA-Z]+$/;
				while (textBox.value.length > 0 && !textBox.value.match(alphaExp)) {
					textBox.value = textBox.value.substring(0, textBox.value.length - 1)
				}
				textBox.value = trim(textBox.value);
			}
			function calculate(){  
				
				var first = document.getElementById('first').value; 
				var second = document.getElementById('second').value; 
				var third = document.getElementById('third').value;  
				var fourth = document.getElementById('fourth').value;  
				
				var totalVal = parseInt(first) + parseInt(second) + parseInt(third) + parseInt(fourth) ;
				document.getElementById('finalave').value = totalVal;
				document.getElementById('finalave').value = Math.round((parseInt(totalVal)/4));  
			}
		</script> 
	</footer>
</body>
</html>																																					



