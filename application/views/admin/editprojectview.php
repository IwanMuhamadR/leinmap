
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
					<div class='input-group date'>
						<input type='text' class="form-control" name="datebegin" id="datepicker" value="<?php echo $row->datebegin; ?>"/>
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
						<input type='text' class="form-control" name="dateend" id="datepicker2" value="<?php echo $row->dateend; ?>"/>
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar"></span>
						</span>
					</div>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-lg-2">
					<label>Price</label>
				</div>
				<div class="col-lg-4">
					<input type="text" class="form-control" name="price" value="<?php echo $row->price; ?>"><br />
				</div>
			</div>
			<input type="hidden" class="form-control" name="po" value="<?php echo $this->session->userdata('name');?>">
			<div class="row">
				<div class="col-lg-2">
					<label>Is Done</label>
				</div>
				<div class="col-lg-4">
					<div class="form-group">
						<select class="form-control" name="isdone" >
							<option value="<?php echo $row->isdone ;?>"><?php echo $row->isdone ;?></option>
							<option disabled="disabled">Select</option>
							<option value="On Progress">On Progress</option>
							<option value="Done">Done</option>
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

