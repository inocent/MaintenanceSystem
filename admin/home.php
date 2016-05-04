
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <div class="panel panel-info">
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" href="#collapse1">Assets</a>
				</h4>
			</div>
			<div id="collapse1" class="panel-collapse collapse">
				<div class="panel-body"><a href="#building" data-toggle="tab">Buildings</a></div>
				<div class="panel-body"><a href="#calender" data-toggle="tab">Calender</a></div>
				 <div class="panel-body"><a href="#fixture" data-toggle="tab">Fixtures</a></div>
			</div>
			
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" href="#collapse2">Departments</a>
				</h4>
			</div>
			<div id="collapse2" class="panel-collapse collapse">
				<div class="panel-body">Panel Body</div>
			</div>
			<div class="panel-heading">
				<h4 class="panel-title">
					<a data-toggle="collapse" href="#collapse3">Components</a>
				</h4>
			</div>
			<div id="collapse3" class="panel-collapse collapse">
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

    <div class="col-sm-10">
          <div class="tab-content">		
    <div class="tab-pane fade in active" id="homepanel" style="background:white;height:1000px">
		<div class="panel-body">
			<div class="form-group">
			   <?php require_once('forms/homepanel.php'); ?>
			</div>
		</div>
		</div>		
		<div class="tab-pane fade" id="building" style="background:white;height:1000px">
			<div class="panel-body">
			   <?php require_once('forms/building.php'); ?>
		</div>
		</div>

		<div class="tab-pane fade" id="fixture" style="background:white;height:1000px">
			<div class="panel-body">
				<div class="form-group">
			   <?php require_once('forms/fixtures/fixture.php'); ?>
			</div>
		</div>
		</div>	
	</div>
  </div>
</div>
