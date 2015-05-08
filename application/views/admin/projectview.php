
<div id="page-wrapper" style="margin-top: 50px">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Project</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row" style="margin-bottom: 20px">
    <div class="col-lg-12">
        <a href="<?=base_url('admin/project/addproject');?>" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i></a>
        <a onclick="location.reload();" href="#" class="btn btn-info"><i class="glyphicon glyphicon-refresh"></i></a>
    </div>
</div>
<!-- /.row -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
    <div class="panel-heading">
        <i class="fa fa-tasks fa-fw"></i> Project List
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <table class="table table-striped table-hover">
        	<thead>
        		<tr>
        			<th>No</th>
        			<th>Project Name</th>
        			<th>Begin Date</th>
        			<th>End Date</th>
        			<th>Periode</th>
        			<th>Price</th>
					<th>PO</th>
					<th>Client</th>
					<th>Status</th>
					<th>Action</th>
        		</tr>
        	</thead>
        	<tbody>
				<?php
				$nomor = 1;
					foreach($results as $row)
					{
				?>
        		<tr>
        			<td><?php echo $nomor; ?></td>
        			<td><a href="<?php echo site_url('admin/project/projectdetails/'.$row->projectid);?>"><?php echo $row->name; ?></td>
        			<td><?php echo $row->datebegin; ?></td>
        			<td><?php echo $row->dateend; ?></td>
        			<td><?php echo $row->period; ?> days</td>
					<td><div class="text text-success"><?php echo "Rp. ". number_format($row->price,0,'.',',')?></div></td>
					<td><?php echo $row->po; ?></td>
					<td><?php echo $row->client; ?></td>
        			<td><div class="label label-<?php echo $row->isdone=="Done"?"success":"warning"?>"><?php echo $row->isdone; ?></div></td>
        			<td>
						<a onclick="window.location='<?=base_url();?>admin/project/addteamview?pid=<?=$row->projectid;?>'" href="javascript:void(0)" class="btn btn-info"><i class="fa fa-list"></i></a>
                        <a href="<?=base_url('admin/project/updateview/'.$row->projectid);?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                        <a onclick="return confirm('Anda yakin akan menghapus data ini?');" href="<?=base_url('admin/project/delete/'.$row->projectid);?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
        			</td>
        		</tr>
				<?php
					$nomor++;
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

