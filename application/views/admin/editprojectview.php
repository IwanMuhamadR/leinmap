
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
        <i class="fa fa-tasks fa-fw"></i> Edit Project
    </div>
	
	<?php
		echo form_open('admin/project/update?pid='.$id.'');
		foreach($find as $row)
		{
	?>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <div class="form-group">
			<div class="row">
				<div class="col-lg-2">
					<label>Project Name</label>
				</div>
				<div class="col-lg-4">
					<input type="text" class="form-control" name="name" value="<?php echo $row->name; ?>"><br />
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2">
					<label>Begin Date</label>
				</div>
				<div class="col-lg-4">
					<input type="text" class="form-control" name="datebegin" value="<?php echo $row->datebegin; ?>"><br />
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2">
					<label>End Date</label>
				</div>
				<div class="col-lg-4">
					<input type="text" class="form-control" name="dateend" value="<?php echo $row->dateend; ?>"><br />
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2">
					<label>Periode</label>
				</div>
				<div class="col-lg-4">
					<input type="text" class="form-control" name="period" value="<?php echo $row->period; ?>"><br />
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2">
					<label>Price</label>
				</div>
				<div class="col-lg-4">
					<input type="text" class="form-control" name="price" value="<?php echo $row->price; ?>"><br />
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2">
					<label>PO</label>
				</div>
				<div class="col-lg-4">
					<input type="text" class="form-control" name="po" value="<?php echo $row->po; ?>"><br />
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2">
					<label>isdone</label>
				</div>
				<div class="col-lg-4">
					<input type="text" class="form-control" name="isdone" value="<?php echo $row->isdone; ?>"><br />
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

