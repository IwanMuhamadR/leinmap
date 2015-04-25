
<div id="page-wrapper" style="margin-top: 50px">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Project Details</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row" style="margin-bottom: 20px">
    <div class="col-lg-12">
        <a href="<?=base_url('admin/project')?>" class="btn btn-success"><i class="glyphicon glyphicon-arrow-left"></i></a>
        <a href="<?=base_url('admin/project/addview');?>" class="btn btn-info"><i class="fa fa-lg fa-save"></i></a>
    </div>
</div>
<!-- /.row -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
    <!-- /.panel-heading -->
    <div class="panel-body">
		<table>
			<tr>
				<th width="150">Nama Proyek</th>
				<td width="30">:</td>
				<td><?=$dataproject->name;?></td>
			</tr>
			<tr>
				<th>Tanggal mulai</th>
				<td>:</td>
				<td><?=$dataproject->datebegin;?></td>
			</tr>
			<tr>
				<th>Tanggal selesai</th>
				<td>:</td>
				<td><?=$dataproject->dateend;?></td>
			</tr>
			<tr>
				<th>Harga</th>
				<td>:</td>
				<td><?="Rp. ".number_format($dataproject->price,0,'.',',');?></td>
			</tr>
			<tr>
				<th>Client</th>
				<td>: </td>
				<td><?=$dataproject->client;?></td>
			</tr>
			<tr>
				<th>P.O</th>
				<td>: </td>
				<td><?=$dataproject->po;?></td>
			</tr>
			<?php 
				$count=0;
				foreach($datateam as $row):
			?>
			<tr>
				<th><?=$count==0?'Team':'';?></th>
				<td><?=$count==0?':':'';?></td>
				<td>  <?=$row->name;?></td>
			</tr>
			<?php
				$count++;
				endforeach
			;?>
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

