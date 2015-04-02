
<div id="page-wrapper" style="margin-top: 50px">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Project</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
    <div class="panel-heading">
        <i class="fa fa-tasks fa-fw"></i> Add Project
    </div>
	
	<?php
		echo form_open('admin/project/add');
	?>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <div class="form-group">
			<div class="row">
				<div class="col-lg-2">
					<label>Project Name</label>
				</div>
				<div class="col-lg-4">
					<input type="text" class="form-control" name="name"><br />
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2">
					<label>Begin Date</label>
				</div>
				<div class="col-lg-4">
					<div class='input-group date' id='datetimepicker1'>
						<input type='text' class="form-control" name="datebegin" />
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar"></span>
						</span>
					</div>
				</div>
			</div>			
			<br />
			<div class="row">
				<div class="col-lg-2">
					<label>End Date</label>
				</div>
				<div class="col-lg-4">
					<div class='input-group date' id='datetimepicker1'>
						<input type='text' class="form-control" name="dateend" />
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar"></span>
						</span>
					</div>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-lg-2">
					<label>Periode</label>
				</div>
				<div class="col-lg-4">
					<input type="text" class="form-control" name="period"><br />
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2">
					<label>Price</label>
				</div>
				<div class="col-lg-4">
					<input type="text" class="form-control" name="price"><br />
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2">
					<label>PO</label>
				</div>
				<div class="col-lg-4">
					<input type="text" class="form-control" name="po"><br />
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2">
					<label>isdone</label>
				</div>
				<div class="col-lg-4">
					<input type="text" class="form-control" name="isdone"><br />
				</div>
			</div>			
			<div class="row">
				<div class="col-lg-2">
				</div>
				<div class="col-lg-4">
					<button type="submit" class="btn btn-success">Save</button>
					<button type="reset" class="btn btn-warning">Reset</button>
				</div>
			</div>
		</div>
    </div>
    <!-- /.panel-body -->
	<?php 
		echo form_close();
	?>
</div>
<!-- /.panel -->
</div>
<!-- /.col-lg-8 -->

<!-- /.col-lg-4 -->
</div>
<!-- /.row -->
</div>
<!-- /#page-wrapper -->

