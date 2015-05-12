<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="utf-8" />
  <meta name="author" content="Script Tutorials" />
  <title>Leinmap IT Solution</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <!-- attach CSS styles -->
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" media="all" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/seicss.css" media="all" rel="stylesheet" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
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
	<table width="100%" style="background-color:#7e97ad; color:#fff; margin-bottom: 20px;">
		<tr>
			<th style="padding-top: 5px; padding-bottom: 5px; padding-left: 5px;">INVOICE <?php echo $datainvoice->nomorinvoice;?></th>
			<th align="right" style="padding-right: 5px;">DATE : <?php echo date('d-M-Y',strtotime($datainvoice->date));?></th>
		</tr>
	</table>
	<table  width="100%" style="margin-bottom: 20px;">
		<tr class="border_bottom" style="font-weight: bold;">
			<td style="padding-top: 5px; padding-bottom: 5px; font-weight: bold;">BILL TO</th>
			<td style="font-weight: bold;">SHIP TO</th>
			<td style="font-weight: bold;">PROJECT NAME</th>
		</tr>
		<tr>
			<td style="padding-top: 5px; padding-bottom: 5px;"><?=$dataproject->client;?></td>
			<td>Same as recipient</td>
			<td><?=$dataproject->name;?></td>
		</tr>
	</table>		
	<table width="100%" style="margin-bottom: 20px;">
		<tr style="background-color:#7e97ad;">
			<th style="color:#fff; padding-top: 5px; padding-bottom: 5px; padding-left: 5px;">QUANTITY</th>
			<th style="color:#fff;">DESCRIPTION</th>
			<th style="color:#fff;">UNIT PRICE</th>
			<th style="color:#fff;">TOTAL</th>
		</tr>
		<?php foreach($dataitem as $row):?>
		<tr class="border_bottom">
			<td style="padding-top: 5px; padding-bottom: 5px; "><?=$row->quantity;?></td>
			<td><?=$row->qtylabel;?></td>
			<td><?=$row->price;?></td>
			<td><?=$row->totalprice;?></td>
		</tr>
		<?php endforeach;?>
	</table>
	<div class="row">
		<div class="col-xs-6 col-xs-offset-6">
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
</body>
</html>