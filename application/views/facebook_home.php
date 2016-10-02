<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php $this->load->helper('url') ?>
	<link rel="shortcut icon" type="text/css" href="<?php echo base_url().'images/fb.ico' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/main.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/bootstrap.min.css' ?>">
	<script type="text/javascript" src="<?php echo base_url().'js/bootstrap.min.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'js/jquery-2.2.3.js' ?>"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row fb_head">
			<div class="col-md-offset-1 col-md-6 head_items">
				<form name="search" method="POST" action="<?php echo base_url().'index.php/Search/searchControl'?>">
					<div class="col-md-6">
						<input type="text" name="search" placeholder="search facebook" style="width:300px" class="form-control">
						<buttom class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i>
					</div>
					<div class="col-md-6">
						<input type="submit" name="" value="Search" class="search">
					</div>
				</form>
			</div>
			<div class="col-md-offset-1 col-md-3 head_items white ">
				<ul class="list-inline">
					<li><img class="img-responsive head_img" src="<?php echo base_url().'images/'?><?php echo $profilepic?>"></li>
					<li><h5 class=""><b><?php echo $Fname," ",$Lname; ?></b></h5></li>
				</ul>
			</div>
		</div>
		<div class="row second_div">
			<div class="col-md-2 head_items">
				<ul class="list-inline">
					<li><img class="img-responsive head_img" src="<?php echo base_url().'images/'?><?php echo $profilepic?>"></li>
					<li><h5><?php echo $Fname," ",$Lname; ?></h5></li>
				</ul>
				<ul class="list-inline">
					<li><img src="<?php echo base_url().'images/Edit.png' ?>" class="img-responsive head_img"></li>
					<li><a href="" >Edit Profile</a></li>
				</ul>
			</div>
			<div class="col-md-6 backwhite1 per_1">
				<div class="col-md-4">
					<ul class="list-inline per_3">
						<li><img src="<?php echo base_url().'images/Edit.png' ?>" class="img-responsive head_img"></li>
						<li><a><b>Update Status</b></a></li>
					</ul>
				</div>
				<div class="col-md-4">
					<ul class="list-inline per_3">
						<li><img src="<?php echo base_url().'images/Edit.png' ?>" class="img-responsive head_img"></li>
						<li><a><b>Add Photo/Video</b></a></li>
					</ul>
					
				</div>
				<div class="col-md-4">
					<ul class="list-inline per_3">
						<li><img src="<?php echo base_url().'images/Edit.png' ?>" class="img-responsive head_img"></li>
						<li><a><b>Write Note</b></a></li>
					</ul>
				</div>
				<div class="col-md-12">
					<hr>
				</div>
				<div class="col-md-12 head_items per_1">
					<div class=col-md-2>
						<img class="img-responsive Status_img" src="<?php echo base_url().'images/'?><?php echo $profilepic?>">
					</div>
					<div class="col-md-10">
						<textarea placeholder="What's on your mind?" class="form-control" ></textarea>
					</div>
				</div>
			</div>
			<div class="col-md-3 backwhite1 left_2 per_1">
				<div class="col-md-14">
					<select class="backwhite1 form-control">
						
					</select>
				</div>
			</div>
			<div class="col-md-offset-2 col-md-6 backwhite1 left_2 per_1">
			abc	
			</div>
		</div>
	</div>
</body>
</html>