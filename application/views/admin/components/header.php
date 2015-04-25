<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="utf-8" />
  <meta name="author" content="Script Tutorials" />
  <title>Leinmap IT Solution</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <!-- attach CSS styles -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/metisMenu/metisMenu.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/timeline.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/sb-admin-2.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/morris.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">	
	<link href="<?php echo base_url(); ?>assets/css/jquery-ui.css" rel="stylesheet" >
    <link rel="SHORTCUT ICON" href="<?php echo base_url(); ?>assets/img/fav.png" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Leinmap</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <span class="text-muted"><?php echo $this->session->userdata('name');?><i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i></span>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="<?php echo site_url("admin/login/logout");?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a <?php echo $breadcrumb=="home"?'class="active"':"";?> href="<?php echo site_url("admin/home");?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a <?php echo $breadcrumb=="project"?'class="active"':"";?> href="<?php echo site_url("admin/project");?>"><i class="fa fa-tasks fa-fw"></i> Project</a>
                    </li>
                    <li>
                        <a <?php echo $breadcrumb=="finance"?'class="active"':"";?> href="<?php echo site_url("admin/finance");?>"><i class="fa fa-money fa-fw"></i> Finance</a>
                    </li>
					<li>
                        <a <?php echo $breadcrumb=="user"?'class="active"':"";?> href="<?php echo site_url("admin/user");?>"><i class="fa fa-users fa-fw"></i> Users</a>
                    </li>
					<?php if($this->session->userdata('usergroup')==1):?>
					<li>
                        <a <?php echo $breadcrumb=="log"?'class="active"':"";?> href="<?php echo site_url("admin/log");?>"><i class="fa fa-info fa-fw"></i> Log</a>
                    </li>
					<?php endif;?>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

<!-- /#wrapper -->
