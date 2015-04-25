
<div id="page-wrapper" style="margin-top: 50px">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Finance</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row" style="margin-bottom: 20px">
    <div class="col-lg-12">
        <a href="<?=base_url('admin/finance/addfinance');?>" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i></a>
        <a onclick="location.reload();" href="#" class="btn btn-info"><i class="glyphicon glyphicon-refresh"></i></a>
    </div>
</div>
<!-- /.row -->
<?php $fdata = $this->session->flashdata('msg')?>
<?php 
	if($fdata):
	$fdataMsg = $this->session->flashdata('msgSts');
?>
	<div class="alert alert-<?php echo !empty($fdataMsg)?"success":"danger";?> alert-dismissable"> 
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times; </button> 
		<?=$fdataMsg==true?"Success! Data input success.":"Error! Data input failed.";?>
	</div>
<?php endif;?>
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
    <div class="panel-heading">
        <i class="fa fa-tasks fa-fw"></i> Finance List
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <table class="table table-striped table-hover">
        	<thead>
        		<tr>
        			<th>No</th>
        			<th>Date</th>
        			<th>Status</th>
        			<th>Nominal</th>
        			<th>Info</th>
        			<th>Action</th>
        		</tr>
        	</thead>
        	<tbody>
				<?php
				$nomor = 1;
					foreach($dataFinance as $row)
					{
				?>
        		<tr>
        			<td><?php echo $nomor; ?></td>
        			<td><?php echo $row->datefinance; ?></td>
        			<td><div class="label label-<?php echo $row->status=="Income"?"success":"warning"?>"><?php echo $row->status; ?></div></td>
        			<td><?php echo "Rp.".number_format($row->nominal,0,".",","); ?></td>
        			<td><?php echo $row->info; ?></td>
        			<td>
                        <a href="#" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                        <a onclick="return confirm('Anda yakin akan menghapus data ini?');" href="#" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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

