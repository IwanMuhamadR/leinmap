
<div id="page-wrapper" style="margin-top: 50px">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Users</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<?php if($this->session->userdata('usergroup')==1):?>
<div class="row" style="margin-bottom: 20px">
    <div class="col-lg-12">
        <a href="<?=base_url('admin/user/addview');?>" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i></a>
        <a onclick="location.reload();" href="#" class="btn btn-info"><i class="glyphicon glyphicon-refresh"></i></a>
    </div>
</div>
<?php endif;?>
<!-- /.row -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
    <div class="panel-heading">
        <i class="fa fa-tasks fa-fw"></i> User List
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
        			<td><div class="label label-<?=$row->status=='Available'?'success':'warning'?>"><?php echo $row->status; ?></div></td>
					<?php if($this->session->userdata('usergroup')==1):?>
        			<td>
                        <a onclick="window.location='<?=base_url();?>admin/user/updateview?uid=<?=$row->usersid;?>'" href="javascript:void(0)" class="btn btn-warning" ><i class="fa fa-edit"></i></a>
                        <a onclick="return confirm('Anda yakin akan menghapus data ini?')" href="<?=site_url('admin/user/delete?uid='.$row->usersid);?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
        			</td>
					<?php endif;?>
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

