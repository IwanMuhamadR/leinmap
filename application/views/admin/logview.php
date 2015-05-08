
<div id="page-wrapper" style="margin-top: 50px">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Log</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row 
<div class="row" style="margin-bottom: 20px">
    <div class="col-lg-12">
        <a href="<?=base_url('admin/project/addproject');?>" class="btn btn-success"><i class="glyphicon glyphicon-plus"></i></a>
        <a onclick="location.reload();" href="#" class="btn btn-info"><i class="glyphicon glyphicon-refresh"></i></a>
    </div>
</div>-->
<!-- /.row -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
    <div class="panel-heading">
        <i class="fa fa-tasks fa-fw"></i> Log List
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <table class="table table-striped table-hover">
        	<thead>
        		<tr>
        			<th>No</th>
        			<th>Date</th>
        			<th>Time</th>
        			<th>Username</th>
        			<th>Name</th>
        			<th>Ipaddress</th>
        			<th>Log</th>
        		</tr>
        	</thead>
        	<tbody>
				<?php
				$nomor = 1;
					foreach($logData as $row)
					{
				?>
        		<tr>
        			<td><?php echo $nomor; ?></td>
        			<td><?php echo substr($row->logdate,0,10); ?></td>
        			<td><?php echo substr($row->logdate,-8); ?></td>
        			<td><?php echo $row->username; ?></td>
        			<td><?php echo $row->name; ?></td>
        			<td><?php echo $row->ipaddress; ?></td>
					<td><?php echo $row->log; ?></td>
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

