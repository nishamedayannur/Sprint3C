<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php $this->load->helper('url'); ?>
	<link rel="shortcut icon" type="text/css" href="<?php echo base_url().'images/fb.ico' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/main.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/bootstrap.min.css' ?>">
	<script type="text/javascript" src="<?php echo base_url().'js/bootstrap.min.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'js/jquery-2.2.3.js' ?>"></script>
	<script type="text/javascript">
		/*$(document).ready(function(){
			$('[data-toggle="popover"]').poopover();
		});*/
	</script>
</head>
<body>
	<div class="conatiner-fluid">
		<div class="row fb_head">
			<div class="col-md-offset-1 col-md-2">
				<!--<img src="<?php echo base_url().'images/fb_head.png' ?>" class="img-responsive fb_head_height">-->
			</div>	
			<div class="col-md-2 per_2">
				<button class="btn btn-success">Sign Up</button>
			</div>
		</div>
		<div class="row second_div">
			<div class="col-md-offset-3 col-md-6 col-md-offset-3 login-box-img backwhite">
				<br/>
				<h4><b>Facebook Login</b></h4>
				<hr/>
				<div class="row md-offset-2 col-md-9 ol-md-offset-1">
					<div class="row">
					<form role="form" method="post" action="loginControl">
						<div class="col-md-5">
							Email or phone :
						</div>
						<div class="col-md-7 from-group">
							<input type="text" name="email" class="form-control" data-toggle="popover" data-content="username wrong."></input>
						</div>
						<div class="col-md-5">
							Password :
						</div>
						<div class="col-md-7 form-group">
							<input type="password" name="password" class="form-control"></input>
						</div>
						<div class="col-md-offset-5 col-md-7 form-group">
							<input type="checkbox" name="reminder"> Keep me logged in</input>
						</div>
						<div class="col-md-offset-5 col-md-7 form-group">
							<button type="submit" class="btn btn-primary">Login</button> or <a href="#"><b class="map_head"> Sign up for Facebook</b></a>
						</div>
						<div class="col-md-offset-5 col-md-7 form-group">
							<a href="#">Forgotten password</a>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
		<div class="row col-md-offset-3 col-md-6 col-md-offset-3 per_1">
			<ul class="list-inline">
				<li><a>English</a></li>
				<li><a>മലയാളം</a></li>
				<li><button class="btn-xs btn btn-info" data-toggle="model" data-target="#mymodal">...</button></li>
				<div class="modal fade" id="mymodal" role="dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss>&items;</button>
							<h4 class="modal-title">Other Languages</h4>
						</div>
						<div class="modal-body">
							<p>Just for test</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dissmiss="modal">Close</button>
						</div>
					</div>
				</div>
			</ul>
		</div>
		<div class="row col-md-offset-3 col-md-6 col-md-osffset-3">
			<hr style=" width: 100%; color: #AFA7A7; height: 1px; background-color: #AFA7A7;">
		</div>
		<div class="row col-m-offset-3 col-md-6 col-md-offset-3">
			<ul class="list-inline">
				<li><a>Sign Up</a></li>
				<li><a>Log In</a></li>
				<li>,<a>Messenger</a></li>
			</ul>
			<br/>
			<h6 class="grey">Facebook @ 2016</h6>
			<h6 class="map_head">English(UK)</h6>
		</div>
	</div>
</body>
</html>