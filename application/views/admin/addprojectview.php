<script>
	counter = 0;
    function addRow()
    {
		alert(counter);
		CountNext = counter+1;
		/*
		document.getElementById("input"+counter).innerHTML = "<tr id=\"input"+CountNext+"\"></tr>"+
												"<tr><td><input type=\"text\" class=\"form-control\" name=\"itemname[]\"></td>"+
												"<td><select class=\"form-control\" name=\"itemqty\">"+ 
												"<option value=\"1\">1</option><option value=\"2\">2</option><option value=\"3\">3</option><option value=\"4\">4</option><option value=\"5\">5</option></select></td>"+
							"<td><input type=\"text\" class=\"form-control\" name=\"qtylabel[]\"></td>"+
							"<td><input type=\"text\" class=\"form-control\" name=\"itemprice[]\"></td>"+
							"<td><input type=\"text\" class=\"form-control\" name=\"itemtotalprice[]\" disabled></td>"+
							"<td><button type=\"button\" class=\"btn btn-danger\"><i class=\"fa fa-sm fa-minus\"></i></button></td></tr>";
		counter++;*/
	}

</script>


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
        <i class="fa fa-tasks fa-fw"></i> Add Project
    </div>
	
	<?php
		echo form_open('admin/project/add');
	?>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <div class="form-group">
			<div class="row">
				<div class="col-lg-2">
					<label>Project Name</label>
				</div>
				<div class="col-lg-4">
					<input type="text" class="form-control" name="name" required><br />
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2">
					<label>Begin Date</label>
				</div>
				<div class="col-lg-4">
					<div class='input-group date'>
						<input type='text' class="form-control" name="datebegin" id="datepicker" required/>
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
						<input type='text' class="form-control" name="dateend" id="datepicker2" required/>
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar"></span>
						</span>
					</div>
				</div>
			</div>
			<br />
			<div class="row">
				<div class="col-lg-2">
					<label>Team</label>
				</div>
				<div class="col-lg-4">
					<?php foreach($team as $row):?>
						<div class="checkbox"> 
							<label><input name="teamCB[]" id="<?php echo $row->usersid;?>" type="checkbox" value="<?php echo $row->usersid;?>"><?php echo $row->name;?></label> 
						</div>
					<?php endforeach;?>
				</div>
			</div><br>
			<div class="row">
				<div class="col-lg-2">
					<label>Item</label>
				</div>
				<div class="col-lg-10">
					<table class="table">
						<tr>
							<th>Name</th>
							<th width="50">Quantity</th>
							<th width="100">Qty Label</th>
							<th>Price</th>
							<th>Total Price</th>
							<th>Action</th>
						</tr>
						<tr id="input0"></tr>
						<tr>
							<td><input type="text" class="form-control" name="itemname[]"></td>
							<td>
								<select class="form-control" name="itemqty"> 
									<?php for($i=1;$i<=5;$i++):?>
										<option value="<?=$i;?>"><?=$i;?></option>
									<?php endfor;?>
								</select>
							</td>
							<td><input type="text" class="form-control" name="qtylabel[]"></td>
							<td><input type="text" class="form-control" name="itemprice[]"></td>
							<td><input type="text" class="form-control" name="itemtotalprice[]" disabled></td>
							<td><button type="button" class="btn btn-success" onClick="addRow()"><i class="fa fa-sm fa-plus"></i></button></td>
						</tr>
					</table>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2">
					<label>Total Price</label>
				</div>
				<div class="col-lg-4">
					<input type="text" class="form-control" name="price" readonly><br />
				</div>
			</div>
			<input type="hidden" class="form-control" name="po" value="<?php echo $this->session->userdata('name');?>">
			<input type="hidden" class="form-control" name="isdone" value="On Progress">			
			<div class="row">
				<div class="col-lg-2">
				</div>
				<div class="col-lg-4">
					<button type="submit" class="btn btn-success">Save</button>
					<button type="reset" class="btn btn-warning">Reset</button>
				</div>
			</div>
		</div>
    </div>
    <!-- /.panel-body -->
	<?php 
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

