
<div id="page-wrapper" style="margin-top: 50px">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Team</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row" style="margin-bottom: 20px">
    <div class="col-lg-12">
        <a href="<?=base_url('admin/team/addview');?>" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i></a>
        <a onclick="location.reload();" href="#" class="btn btn-info"><i class="glyphicon glyphicon-refresh"></i></a>
    </div>
</div>
<!-- /.row -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
    <div class="panel-heading">
        <i class="fa fa-tasks fa-fw"></i> Team List
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <table class="table table-striped table-hover">
        	<thead>
        		<tr>
        			<th>Name</th>
        			<th>Address</th>
        			<th>Phone</th>
        			<th>Email</th>
        			<th>Status</th>
        		</tr>
        	</thead>
        	<tbody>
				<?php foreach($results as $row)
					  { 
				?>				
        		<tr>
        			<td><?php echo $row->name; ?></td>
        			<td><?php echo $row->address; ?></td>
        			<td><?php echo $row->phone; ?></td>
        			<td><?php echo $row->email; ?></td>
        			<td><?php echo $row->status; ?></td>
        			<td>
                        <a onclick="window.location='<?=base_url();?>admin/team/updateview?uid=<?=$row->usersid;?>'" href="javascript:void(0)" class="btn btn-warning" ><i class="fa fa-edit"></i></a>
                        <a onclick="window.location='<?=base_url();?>admin/team/delete?uid=<?=$row->usersid;?>'" href="javascript:void(0)" class="btn btn-danger"><i class="fa fa-trash"></i></a>
        			</td>
        		</tr>
				<?php 
					  }
				?>
        	</tbody>
        </table>
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

