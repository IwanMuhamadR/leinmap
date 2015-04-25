
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
        <i class="fa fa-tasks fa-fw"></i> Add Team
    </div>
	
    <!-- /.panel-heading -->
    <div class="panel-body">
        <table class="table table-striped table-hover">
        	<thead>
        		<tr>
        			<th>Project Name</th>
        			<th>Begin Date</th>
        			<th>End Date</th>
        			<th>Periode</th>
        			<th>Price</th>
					<th>PO</th>
					<th>Status</th>
        		</tr>
        	</thead>
        	<tbody>
        		<tr>
        			<td><?php echo $find->name; ?></td>
        			<td><?php echo $find->datebegin; ?></td>
        			<td><?php echo $find->dateend; ?></td>
        			<td><?php echo $find->period; ?> hari</td>
					<td><?php echo "Rp. ".number_format($find->price,0,'.',','); ?></td>
					<td><?php echo $find->po; ?></td>
        			<td><div class="label label-<?php echo $find->isdone=="Done"?"success":"warning"?>"><?php echo $find->isdone; ?></div></td>
        		</tr>
        	</tbody>
        </table>
		<br />
		<table class="table table-striped table-hover"">
        	<thead>
        		<tr>
        			<th>Team on this Project</th>
        		</tr>
        	</thead>
        	<tbody>
				<?php
					foreach($detail as $det)
					{
				?>
        		<tr>
        			<td style="width:25%;"><?php echo $det->name; ?></td>
					<?php if($find->isdone != "Done"):?>
						<td style="width:20%;">Change with</td>
						<td>						
							<div class="form-group">
								<select class="form-control" name="team" >
									<?php
										foreach($users as $row)
										{								
									?>
										<option onclick="window.location='<?=base_url();?>admin/project/updateteam?dpid=<?=$det->detailprojectid;?>&pid=<?=$det->projectid;?>&uid=<?=$row->usersid;?>'"><?php echo $row->name ;?></option>
									<?php 
										}
									?>
								</select>
							</div>						
						</td>
						<td>
							<a onclick="window.location='<?=base_url();?>admin/project/deleteteam?dpid=<?=$det->detailprojectid;?>&pid=<?=$det->projectid;?>'" href="javascript:void(0)" class="btn btn-danger"><i class="fa fa-trash"></i></a>
						</td>
					<?php endif;?>
        		</tr>
				<?php
					}
				?>
        	</tbody>
        </table>
		<br />
		
		<?php
			echo form_open('admin/project/addteam');
		?>
		<input type="hidden" class="form-control" name="projectid" value="<?php echo $find->projectid; ?>">
		<?php if($find->isdone != "Done"):?>
		<div class="row">
			<div class="col-lg-2">
				<label>Select Team</label>
			</div>
			<div class="col-lg-4">
				<div class="form-group">
					<select class="form-control" name="team" >
						<?php
							foreach($users as $row)
							{								
						?>
							<option value="<?php echo $row->usersid ;?>"><?php echo $row->name ;?></option>
						<?php 
							}
						?>
					</select>
				</div>
			</div>
			<div class="col-lg-4">
				<button type="submit" class="btn btn-info">Add</button>
			</div>
		</div>
		<?php
		endif;
			echo form_close();
		?>
		<div class="row">
			<div class="col-lg-4" style="margin-top:25px;margin-bottom:25px;">
				<a href="<?=site_url("admin/project");?>" class="btn btn-success">Done</a>
			</div>
		</div>
    </div>
    <!-- /.panel-body -->
</div>
<!-- /.panel -->
</div>
<!-- /.col-lg-8 -->

<!-- /.col-lg-4 -->
</div>
<!-- /.row -->
</div>
<!-- /#page-wrapper -->

