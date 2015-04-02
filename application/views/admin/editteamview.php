
<div id="page-wrapper" style="margin-top: 50px">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Team</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
    <div class="panel-heading">
        <i class="fa fa-tasks fa-fw"></i> Edit User
    </div>
	
	<?php
		echo form_open('admin/team/update?uid='.$id.'');
		foreach($find as $row)
		{
	?>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <div class="form-group">
			<div class="row">
				<div class="col-lg-2">
					<label>Name</label>
				</div>
				<div class="col-lg-4">
					<input class="form-control" name="name" value="<?php echo $row->name; ?>"><br />
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2">
					<label>Address</label>
				</div>
				<div class="col-lg-4">
					<textarea class="form-control" rows="3" name="address"><?php echo $row->address; ?></textarea><br />
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2">
					<label>Phone</label>
				</div>
				<div class="col-lg-4">
					<input class="form-control" name="phone" value="<?php echo $row->phone; ?>"><br />
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2">
					<label>Email</label>
				</div>
				<div class="col-lg-4">
					<input class="form-control" name="email" value="<?php echo $row->email; ?>"><br />
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2">
					<label>Status</label>
				</div>
				<div class="col-lg-4">
					<input class="form-control" name="status" value="<?php echo $row->status; ?>"><br />
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2">
				</div>
				<div class="col-lg-4">
					<button type="submit" class="btn btn-success">Save</button>
				</div>
			</div>
		</div>
    </div>
    <!-- /.panel-body -->
	<?php 
		}
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

