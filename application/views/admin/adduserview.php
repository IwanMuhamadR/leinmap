
<div id="page-wrapper" style="margin-top: 50px">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Users</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
    <div class="panel-heading">
        <i class="fa fa-tasks fa-fw"></i> Add User
    </div>
	
	<?php
		echo form_open('admin/user/add');
	?>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <div class="form-group">
			<div class="row">
				<div class="col-lg-2">
					<label>Username</label>
				</div>
				<div class="col-lg-4">
					<input type="text" class="form-control" name="username"><br />
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2">
					<label>Password</label>
				</div>
				<div class="col-lg-4">
					<input type="password" class="form-control" name="password"><br />
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2">
					<label>Name</label>
				</div>
				<div class="col-lg-4">
					<input type="text" class="form-control" name="name"><br />
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2">
					<label>Address</label>
				</div>
				<div class="col-lg-4">
					<textarea type="text" class="form-control" rows="3" name="address"></textarea><br />
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2">
					<label>Phone</label>
				</div>
				<div class="col-lg-4">
					<input type="text" class="form-control" name="phone"><br />
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2">
					<label>Email</label>
				</div>
				<div class="col-lg-4">
					<input type="text" class="form-control" name="email"><br />
				</div>
			</div>
			<input type="hidden" class="form-control" name="status" value="Available"><br />
			<div class="row">
				<div class="col-lg-2">
					<label>User Group</label>
				</div>
				<div class="col-lg-4">
					<div class="form-group">
						<select class="form-control" name="usergroupid">
							<option value="2">Admin</option>
							<option value="3">Marketing</option>
						</select>
					</div>
					<br />
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

