
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
					<input type="text" class="form-control" name="name" required><br />
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2">
					<label>Begin Date</label>
				</div>
				<div class="col-lg-4">
					<div class='input-group date'>
						<input type='text' class="form-control" name="datebegin" id="datepicker" required/>
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
					<div class='input-group date'>
						<input type='text' class="form-control" name="dateend" id="datepicker2" required/>
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar"></span>
						</span>
					</div>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-lg-2">
					<label>Team</label>
				</div>
				<div class="col-lg-4">
					<input type="text" class="form-control" name="price" disabled><br>
				</div>
				<div class="col-lg-4">
					<a href="#" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i></a>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2">
					<label>Item</label>
				</div>
				<div class="col-lg-4">
					<input type="text" class="form-control" name="price" disabled><br>
				</div>
				<div class="col-lg-4">
					<a href="#" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i></a>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2">
					<label>Total Price</label>
				</div>
				<div class="col-lg-4">
					<input type="text" class="form-control" name="price" readonly><br />
				</div>
			</div>
			<input type="hidden" class="form-control" name="po" value="<?php echo $this->session->userdata('name');?>">
			<input type="hidden" class="form-control" name="isdone" value="On Progress">			
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

