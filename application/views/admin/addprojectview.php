<script>

	var counterId = 0;
	var arrayId = 0;
	var totalPrice = 0;
	function validasiAngka(inputData){
		var hasil = true;
		if(inputData.value != null)
        {
            if(isNaN(inputData.value))
            {
                hasil = false;
            }
            // var harga = document.getElementById("nominal").value;
        }
        else{
            hasil = false;
        }
		return hasil;
	}
	
	function priceTotal(){
		//
		var i;
		totalPrice = 0;
		for(i=0;i<=counterId;i++){
			if(document.getElementById("itemtotalprice"+i) != null){
				totalPrice = totalPrice + parseInt(document.getElementById("itemtotalprice"+i).value);
			}
		}
		if(!isNaN(totalPrice)){
			document.getElementById("price").value = totalPrice;
		}
		else{
			document.getElementById("price").value = 0;
		}
	}
	
	function hitungTotalItem(count, inputData){
		//
		if(validasiAngka(inputData)){
			var itemValue = document.getElementById("itemprice"+count).value;
			var itemQty = document.getElementById("itemqty"+count).value;
			document.getElementById("itemtotalprice"+count).value = itemValue * itemQty;		
			//
			//alert(document.getElementById("itemtotalprice"+count).value);
		}
		else{
			document.getElementById("itemtotalprice"+count).value = 0;
			document.getElementById("itemprice"+count).value = 0;
		}
		priceTotal();
	}

    function addRow()
    {
		counterId++;
		var table = document.getElementById("myTable");
		var row = table.insertRow(1);
		var cell1 = row.insertCell(0);
		var cell2 = row.insertCell(1);
		var cell3 = row.insertCell(2);
		var cell4 = row.insertCell(3);
		var cell5 = row.insertCell(4);
		var cell6 = row.insertCell(5);
		cell1.innerHTML = "<input type=\"text\" class=\"form-control\" name=\"itemname[]\">";
		cell2.innerHTML = "<select class=\"form-control\" name=\"itemqty\" id=\"itemqty"+counterId+"\" onchange=\"hitungTotalItem("+counterId+",this)\"><option value=\"1\">1</option><option value=\"2\">2</option><option value=\"3\">3</option><option value=\"4\">4</option><option value=\"5\">5</option></select>";
		cell3.innerHTML = "<input type=\"text\" class=\"form-control\" name=\"qtylabel[]\">";
		cell4.innerHTML = "<input type=\"text\" class=\"form-control\" name=\"itemprice[]\" id=\"itemprice"+counterId+"\" onkeyup=\"hitungTotalItem("+counterId+",this)\">";
		cell5.innerHTML = "<input type=\"text\" class=\"form-control\" name=\"itemtotalprice[]\" id=\"itemtotalprice"+counterId+"\" readonly>";
		cell6.innerHTML = "<button type=\"button\" class=\"btn btn-danger\" onClick=\"deleteRow(this)\"><i class=\"fa fa-sm fa-minus\"></i></button>";
		arrayId++;
	}
	
	function deleteRow(t)
	{
		var msg = "Are you sure?";
		if(confirm(msg)){
			var row = t.parentNode.parentNode;
			document.getElementById("myTable").deleteRow(row.rowIndex);
			console.log(row);
		}
		//counterId--;
		//arrayId--;
		priceTotal();
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
			<br>
			<div class="row">
				<div class="col-lg-2">
					<label>Client</label>
				</div>
				<div class="col-lg-4">
					<input type="text" class="form-control" name="client" required><br />
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
					<table class="table" id="myTable">
						<tr>
							<th>Name</th>
							<th width="50">Quantity</th>
							<th width="100">Qty Label</th>
							<th>Price</th>
							<th>Total Price</th>
							<th>Action</th>
						</tr>
						<!--<tr id="input0"></tr>-->
						<!--<div id="input0"></div>-->
						<tr>
							<td><input type="text" class="form-control" name="itemname[]" required></td>
							<td>
								<select class="form-control" name="itemqty" id="itemqty0" onChange="hitungTotalItem(0,this)"> 
									<?php for($i=1;$i<=5;$i++):?>
										<option value="<?=$i;?>"><?=$i;?></option>
									<?php endfor;?>
								</select>
							</td>
							<td><input type="text" class="form-control" name="qtylabel[]"></td>
							<td><input type="text" class="form-control" name="itemprice[]" id="itemprice0" onkeyup="hitungTotalItem(0,this)"></td>
							<td><input type="text" class="form-control" name="itemtotalprice[]" id="itemtotalprice0" readonly></td>
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
					<input type="text" id="price" class="form-control" name="price" readonly><br />
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

