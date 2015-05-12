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
        <i class="fa fa-tasks fa-fw"></i> <?=$title_form?>
    </div>
	
	<?php
		echo form_open($form_action);
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
						<input type='text' class="form-control" value="<?php echo empty($table_data->datefinance)?"":$table_data->datefinance;?>" name="date" id="datepicker" required/>
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
							<input type="radio" name="status" id="optionsRadios3" value="Income" <?php echo !empty($table_data->status)?($table_data->status=="Income"?"checked":""):"checked"?>> Income 
						</label> 
						<label class="checkbox"> 
							<input type="radio" name="status" id="optionsRadios4" value="Spent" <?php echo !empty($table_data->status)?($table_data->status=="Spent"?"checked":""):""?>> Spent 
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
					<input type="text" class="form-control" name="nominal" id="nominal" value="<?php echo empty($table_data->nominal)?"":$table_data->nominal;?>" onkeyup="hitung()"><br>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2">
					<label>Info</label>
				</div>
				<div class="col-lg-4">
					<input type="text" class="form-control" name="info" value="<?php echo empty($table_data->info)?"":$table_data->info;?>"><br />
				</div>
			</div>			
			<div class="row">
				<div class="col-lg-2">
				</div>
				<div class="col-lg-4">
					<!--<button type="submit" class="btn btn-success" name="submit" id="submit">Save</button>-->
					<input type="submit" value="Save" class="btn btn-success" name="submit">
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

