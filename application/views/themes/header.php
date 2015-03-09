<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="utf-8" />
  <meta name="author" content="Script Tutorials" />
  <title>Leinmap IT Solution</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <!-- attach CSS styles -->
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" />
</head>
<body>
  <!--  BODY PAGE CONTENT -->
	<!-- navigation panel -->
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="<?php echo base_url(); ?>">Leinmap</a>
		</div>

		<div class="collapse navbar-collapse" id="navbar-collapse-main">
		  <ul class="nav navbar-nav navbar-right">
			<li><a class="page-scroll" href="#home">Home</a></li>
			<li><a class="page-scroll" href="#about">About</a></li>
			<li><a class="page-scroll" href="#services">Services</a></li>
			<li><a class="page-scroll" href="#portfolio">Portfolio</a></li>
			<li><a class="page-scroll" href="#contact">Contact</a></li>
			<li id="login">
				<a id="login-trigger" href="#login">Login</a>
				<div id="login-content">
					<?php echo form_open('login/attempt'); ?>
						<fieldset id="inputs">
							<input id="username" type="text" name="username" placeholder="Username" required>   
							<input id="password" type="password" name="password" placeholder="Password" required>
						</fieldset>
						<fieldset id="actions">
							<input type="submit" id="submit" value="Login">
							<label><input type="checkbox" checked="checked"> Keep me signed in</label>
						</fieldset>
					<?php echo form_close(); ?>
				</div> 
			</li>
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	
	<!-- first section - Home -->
	<div id="home" class="home">
	  <div class="text-vcenter">
		<h1>Leinmap</h1>
		<h3>Lead-Innovation-Mobile-Application</h3>
		<a href="#about" class="btn btn-default btn-lg page-scroll">Continue</a>
	  </div>
	</div>
	<!-- /first section -->