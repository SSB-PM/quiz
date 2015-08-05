<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
   <title><?php if($title){ echo $title; } ?></title>
<link rel="stylesheet" href="<?php echo base_url();?>css/normalize.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="<?php echo base_url();?>css/style.css" type="text/css" media="screen"/>
<script type="text/javascript" src="<?php echo base_url();?>editor/tiny_mce.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/js/basic.js?rd=<?php echo time();?>"></script>	<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
	</script>
 </head>
 <body>
<?php
 if($this->session->userdata('logged_in'))
   {
   $logged_in=$this->session->userdata('logged_in');
   ?>
   	<nav class="clearfix">
		<ul class="clearfix">
			<li><a href="<?php echo site_url('home');?>"  >Home</a></li>
			<li>   <?php 
   if($logged_in['su']=="1"){ ?>
   <a href="<?php echo site_url('user_data');?>"  >Users</a>
   <?php }else{ ?>
   <a href="<?php echo site_url('user_data/my_account');?>"  >My Account</a>
   <?php
   }
   ?></li>
		 <?php 
   if($logged_in['su']=="1"){ ?>
 <li> <a href="<?php echo site_url('qbank');?>"  >Question Bank</a></li>   
	<?php
	}
	?>	
			<li> <a href="<?php echo site_url('quiz');?>" >Quiz/Test</a></li>
			 <?php 
   if($logged_in['su']=="1"){ ?>
<li><a href="<?php echo site_url('result/');?>"  >Result</a></li>
<li> <a href="<?php echo site_url('home/setting');?>" >Setting</a></li>
	<?php
	}else{
	?>
<li> <a href="<?php echo site_url('result/user');?>"  >Result</a></li>
  
	<?php
	}
	?>
	<li>	<a href="<?php echo site_url('liveclass');?>"  >Live Classroom</a></li>
			<li> 	<a href="<?php echo site_url('home/logout');?>"  >Logout</a></li>	
		</ul>
		<a href="#" id="pull">Menu</a>
	</nav>
	
	
   <?php
   }
   ?>
   <div style="clear:both;"></div>
