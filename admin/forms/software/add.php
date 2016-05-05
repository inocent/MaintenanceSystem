<form name="form2" method="post" action="forms/building/controller.php?action=add">
<div class="container">
	<fieldset>
		<legend>Software Informations</legend>
			<div class="form-group">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="name">Name :</label>
					<div class="col-md-8">
						<input class="form-control input-sm" id="name" name="name" placeholder="name" type="text" value="">
					</div>
				</div>
			</div>
			<br>
				<div class="form-group">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="type">Version :</label>
					<div class="col-md-8">
						<input class="form-control input-sm" id="type" name="version" placeholder="version" type="text" value="">
					</div>
				</div>
			</div>
			<br>
			<div class="form-group">
				<div class="col-md-8">
					<label class="col-md-4 control-label" for="description">Description</label>
					<div class="col-md-8">
						<textarea class="form-control input-sm" id="description" name="description" placeholder="description" type="text"></textarea>
							</div>
				</div>
			</div>
						<br>
						<br>
						<div class="form-group">
							<div class="col-md-8">
								<label class="col-md-4 control-label" for= "idno"></label>
								<div class="col-md-8">
									<button class="btn btn-default" name="save" type="save" ><span class="glyphicon glyphicon-floppy-save"></span> Save</button>
								</div>
							</div>
						</div>  
					</fieldset> 
					</form>