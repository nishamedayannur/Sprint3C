<!DOCTYPE html>
<html>
<head>
	<?php $this->load->helper('url'); ?>
	<title></title>
	<link rel="shortcut icon" type="text/css" href="<?php echo base_url().'images/fb.ico' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/main.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/bootstrap.min.css' ?>">
	<script type="text/javascript" src="<?php echo base_url().'js/bootstrap.min.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'js/jquery-2.2.3.min.js' ?>"></script>
	<script type="text/javascript">
		$(document).read(function()
		{
			$('[data-toggle="popover"]').popover();
		});
	</script>
</head>
<body>
	<div class="container-fluid">

		<div class="row fb_head">
			<div class="col-md-offset-1 col-md-2">
				<img src="<?php echo base_url().'images/fb_head.png' ?>" class="img-responsive fb_head_height">
			</div>
			<div class="col-md-2 per_2">
				<button class="btn btn-success">Sign Up</button>
			</div>
		</div>
		<div class="row second_div">
		
			



			<div class="col-md-offset-3 col-md-6 col-md-offset-3 login-box-image backwhite">
				<br/>
				<h4><b>Facebook Login</b></h4>
				<hr/>
				<div class="row col-md-offset-2 col-md-9 col-md-offset-1">
					<div class="row">
						<form role="form" methode="post" action="">
							<div class="col-md-5">
								Login as :
							</div>
							<div class="col-md-3">
								<img class="img-responsive" src="<?php echo base_url().'images/'?><?php echo $profilepic ?>">
								<a href="#">Not <?php echo $Fname ?></a>
							</div>
							<div class="col-md-4">
								<label><?php echo$Fname," ",$Lname ?></label>
								<p class="grey"><?php echo $Email?></p>
								<br/>
								<input type="hidden" name="email" value=""><br/>
							</div>
							<div class="col-md-5">
								Password :
							</div>
							<div class="col-md-7 form-group">
								<input type="text" name="password" data-toggle="popover" data-contend="password is wrong" class="form-control"></input>
							</div>
							<div class="col-md-offset-5 col-md-7 form-group">
								<input type="checkbox" name="reminder"> Keep me logged in</input>
							</div>
							<div class="col-md-offset-5 col-md-7 form-group">
								<button type="submit" class="btn btn-primary">Login</button> or <a href="#"><b class="map_head">Sign up for Facebook</b></a>
							</div>
							<div class="col-md-offset-5 col-md-7 form-group">
								<a href="#">Forgotten password</a>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="row col-md-offset-3 col-md-6 col-md-offset-3 per_1">
			<ul class="list-inline">
				<li><a>English</a></li>
				<li><a>മലയാളം</a></li>
				<li><button class="btn-xs btn-btn-info" data-toggle="modal" data-target="#mymodel">...</button></li>
				<div class="modal fade" id="mymodal" role="dialog">
					<div class="modal-dialog">
						<div class="modal-contend">
							<div class="model-header">
								<button type="button" class="close" data-dismiss="modal">&items;</button>
								<h4 class="model-tittle">Other Languages</h4>
							</div>
							<div class="model-body">
								<p>Just for teat</p>								
							</div>
							<div class="model-footer">
								<button type="button" class="btn btn-default" data-dissmiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			</ul>
			<hr style="width: 100%; color: #AFA7A7; height: 1px; background-color: #AFA7A7;">
			<ul class="list-inline">
				<li><a>Sign Up</a></li>
			</ul>
		</div>
	</div>
</body>
</html>