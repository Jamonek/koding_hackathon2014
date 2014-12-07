<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CoCo-Code Collaboration &rsaquo; <?=$site_sub_page;?></title>

    <!-- Bootstrap -->
    <link href="<?=base_url();?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url();?>css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="container-fluid">
  <div class="header"
  <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
  
	  	 <div class="navbar-header">
	  	 	 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav-col">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
             </button>
		  	 <a class="navbar-brand" href="#">
			 <!-- image of logo -->
			 </a>
		</div>
		
		<div class="collapse navbar-collapse" id="nav-col">
			<ul class="nav navbar-nav navbar-left" >
			<li <?=($active_nav == 'home') ? "class='active'":'';?>><a href="<?=base_url();?>">Home <span class="sr-only">(current)</span></a></li>
			<li <?=($active_nav == 'about') ? "class='active'":'';?>><a href="<?=base_url('about');?>">About</a></li>
			<li <?=($active_nav == 'contact') ? "class='active'":'';?>><a href="<?=base_url('contact');?>">Contact Us</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
			<li <?=($active_nav == 'signup') ? "class='active'":'';?>><a href="<?=base_url('signup');?>">Signup</a></li>
			<li <?=($active_nav == 'login') ? "class='active'":'';?>><a href="<?=base_url('login');?>">Login</a></li>
			<li <?=($active_nav == 'my_work') ? "class='active'":'';?>><a href="<?=base_url('work');?>">My Work</a></li>
		</div>
  </nav>
  </div>


