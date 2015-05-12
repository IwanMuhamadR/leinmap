
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
<<<<<<< HEAD
        <a href="<?=base_url();?>admin/invoice/pdf?pid=<?=$dataproject->projectid;?>" class="btn btn-info"><i class="fa fa-lg fa-save"></i></a>
=======
        <a href="<?=base_url('admin/project/addview');?>" class="btn btn-info"><i class="fa fa-lg fa-save"></i></a>
>>>>>>> origin/master
    </div>
</div>
<!-- /.row -->
<div class="row">
<div class="col-lg-10 col-lg-offset-1">
	<div class="panel panel-info">
		<div class="panel-body">
			<div class="row">
				<div class="col-lg-12">
					<p class="text-right">
						<img src="<?=base_url('assets/img/logoinvoice.png');?>">
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<address> 
						<strong>Leinmap</strong><br> 
						Cisaranten Wetan Ujung Berung Bandung 40293<br> 
						085722688411
					</address>
				</div>
			</div>
			<table class="table table-responsive">
				<tr style="background-color:#7e97ad;color:#fff;">
					<th>INVOICE <?php echo $datainvoice->nomorinvoice;?></th>
					<th><div class="text-right">DATE : <?php echo date('d-M-Y',strtotime($datainvoice->date));?></div></th>
				</tr>
			</table>
			<table class="table table-striped">
				<tr>
					<th>BILL TO</th>
					<th>SHIP TO</th>
					<th>PROJECT NAME</th>
				</tr>
				<tr>
					<td><?=$dataproject->client;?></td>
					<td>Same as recipient</td>
					<td><?=$dataproject->name;?></td>
				</tr>
			</table>		
			<table class="table table-responsive">
				<tr style="background-color:#7e97ad;color:#fff;">
					<th>QUANTITY</th>
					<th>DESCRIPTION</th>
					<th>UNIT PRICE</th>
					<th>TOTAL</th>
				</tr>
				<?php foreach($dataitem as $row):?>
				<tr>
					<td><?=$row->quantity;?></td>
					<td><?=$row->qtylabel;?></td>
					<td><?=$row->price;?></td>
					<td><?=$row->totalprice;?></td>
				</tr>
				<?php endforeach;?>
			</table>
			<div class="col-lg-6 col-lg-offset-6">
				<table width="100%">
					<tr class="border_bottom">
						<td style="color:#7e97ad;">SUBTOTAL</td>
						<td class="text-right"><?=$dataproject->price;?></td>
					</tr>
					<tr class="border_bottom">
						<td style="color:#7e97ad;">SALES TAX</td>
						<td class="text-right">-</td>
					</tr>
					<tr class="border_bottom">
						<td style="color:#7e97ad;">SHIPPING HANDLING</td>
						<td class="text-right">-</td>
					</tr>
					<tr class="border_bottom">
						<td style="color:#7e97ad;"><strong>TOTAL DUE BY </strong></td>
						<td class="text-right"><?=$dataproject->price;?></td>
					</tr>
				</table>
				<br><br>
				<p>Thank you for your business!</p>
				<br><br>
			</div>
		</div>
		<!-- /.panel-body -->
	</div>
	<!-- /.panel -->
</div>
<!-- /.col-lg-8 -->
</div>

</div>
<!-- /#page-wrapper -->

