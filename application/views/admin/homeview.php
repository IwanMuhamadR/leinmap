
<div id="page-wrapper" style="margin-top: 50px">
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $dataproject->countProject; ?></div>
                        <div>Total Project!</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-6 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-money fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo "Rp.".number_format($datafinance,0,".",","); ?></div>
                        <div>Finance!</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- /.row -->
<div class="row">
<div class="col-lg-12">
<div class="panel panel-default">
    <div class="panel-heading">
        <i class="fa fa-bar-chart-o fa-fw"></i> Progress
    </div>
    <!-- /.panel-heading -->
    <div class="panel-body">        
		<table class="table table-striped table-hover">
        	<thead>
        		<tr>
        			<th>Project Name</th>
        			<th>Deadline</th>
					<th></th>
        		</tr>
        	</thead>
        	<tbody>
				<?php
					foreach($getproject as $row)
					{
					$dayleft = date_diff(date_create(date("Y-m-d")), date_create($row->dateend));
					$deadline = 100 - (($dayleft->format('%d') / $row->period) * 100);
				?>
        		<tr>
        			<td width="20%"><a href="<?php echo site_url('admin/project/projectdetails/'.$row->projectid);?>"><?php echo $row->name; ?></td>
					<td>
						<div class="progress">
							<div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="<?php echo $deadline; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $deadline; ?>%">
								<span class="sr-only"><?php echo $deadline; ?> days left</span>
							</div>
						</div>
					</td>
        			<td width="15%"><?php echo $dayleft->format('%d'); ?> days left</td>					
        		</tr>
				<?php
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

