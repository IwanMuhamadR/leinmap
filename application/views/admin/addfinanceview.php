<script language="JavaScript">
	function hitung(){
		if(document.getElementById("nominal").value != null)
        {
            if(isNaN(document.getElementById("nominal").value))
            {
                document.getElementById("nominal").value = 0;
            }
            // var harga = document.getElementById("nominal").value;
        }
        else{
            document.getElementById("nominal").value = 0;
        }
	}
</script>
<div id="page-wrapper" style="margin-top: 50px">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Finance</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
    <div class="panel-heading">
        <i class="fa fa-tasks fa-fw"></i> Add Finance
    </div>
	
	<?php
		echo form_open('admin/finance/add');
	?>
    <!-- /.panel-heading -->
    <div class="panel-body">
        <div class="form-group">
			<!--
			<div class="row">
				<div class="col-lg-2">
					<label>Project Name</label>
				</div>
				<div class="col-lg-4">
					<input type="text" class="form-control" name="name" required><br />
				</div>
			</div>
			-->
			<div class="row">
				<div class="col-lg-2">
					<label>Date</label>
				</div>
				<div class="col-lg-4">
					<div class='input-group date'>
						<input type='text' class="form-control" name="date" id="datepicker" required/>
						<span class="input-group-addon">
							<span class="glyphicon glyphicon-calendar"></span>
						</span>
					</div>
				</div>
			</div>			
			<br />
			<div class="row">
				<div class="col-lg-2">
					<label>Status</label>
				</div>
				<div class="col-lg-4">
					<div class='input-group'>
						<label class="checkbox"> 
							<input type="radio" name="status" id="optionsRadios3" value="Income" checked> Income 
						</label> 
						<label class="checkbox"> 
							<input type="radio" name="status" id="optionsRadios4" value="Spent"> Spent 
						</label>
					</div>
				</div>
			</div>	
			<br />
			<div class="row">
				<div class="col-lg-2">
					<label>Nominal</label>
				</div>
				<div class="col-lg-4">
					<input type="text" class="form-control" name="nominal" id="nominal" onkeyup="hitung()"><br>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2">
					<label>Info</label>
				</div>
				<div class="col-lg-4">
					<input type="text" class="form-control" name="info"><br />
				</div>
			</div>			
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

