<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php echo $title;?></title>

    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/sb-admin-2.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/metisMenu/metisMenu.min.css" rel="stylesheet" />
    <link rel="SHORTCUT ICON" href="<?php echo base_url(); ?>assets/img/fav.png" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Leinmap Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" action="<?php echo base_url('admin/login');?>" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" value="<?php echo set_value('username');?>" name="username" autofocus>
                                <?php echo form_error('username','<p class="text-danger">','</p>');?>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" value="<?php echo set_value('password');?>" name="password" type="password" value="">
                                <?php echo form_error('password','<p class="text-danger">','</p>');?>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                </label>
                            </div>
                            <input type="submit" class="btn btn-lg btn-success btn-block" value="Login" name="submit">
                        </fieldset>
                    </form>
                </div>
            </div>
            <?php if(!empty($pesan)):?>
            <div class="alert alert-danger">
                <?php echo $pesan;?>
            </div>
            <?php endif;?>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="js/plugins/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/sb-admin-2.js"></script>

</body>

</html>
