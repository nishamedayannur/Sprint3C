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
		/*$(document).ready(function(){
	    	$('[data-toggle="popover"]').popover();   
		});*/
	</script>
</head>
<body>

	<div class="container-fluid">
		<div class="row fb_head">
			<div class="col-md-offset-1 col-md-5">
				<img src="<?php echo base_url().'images/fb_head.png'?>" class="img-responsive fb_head_height">
			</div>
			<div class="col-md-6 head_off">
				<form role="form" method="post" action="<?php echo base_url().'index.php/login/loginControl'?>">
					<div class="col-md-4 form-group head_foot">
						<label for="email" class="white">Email or password:</label>
						<input type="email" name="email" class="form-control" placeholder="Enter email" value="nishamedayannur@gmail.com">
						<input type="checkbox" name="">Keep me logged in</input>
					</div>
					<div class="col-md-4 form-group white">
						<label for="password" >Password:</label>
						<input type="password" class="form-control" name="password" placeholder="Enter password" value="nishampk6668">
						<a href="#" class="head_foot">Forgotten your Password?</a>
					</div>
					<div class="col-md-4 form-group per_3">
						<button id="login" type="submit" class="login">Login</button>
					</div>
				</form>
			</div>
		</div>
		<div class="row second_div" >
			<div class="col-md-offset-1 col-md-4 col-md-offset-1 per_3 margin_25">
				<h3 class="map_head"><b>Facebook helps you connect and share with the people in your life.</b></h3>
				<img src="<?php echo base_url(); ?>images/map.png" class="img-responsive map_img">
			</div>
 			<div class="col-md-offset-1 col-md-5 per_1">
				<h1 class="left_2"><b>Create an account</b></h1>
				<h3 class="left_2">It's free and always will be.</h3>
				<form role="form" method="post" action="<?php echo base_url().'index.php/SignUp/signupControl'?>" enctype="multipart/form-data">

					<div class="col-md-12">
					</div>
					<div class="form-group col-md-5">
						<input type="text" name="fname" placeholder="First name" class="col-md-3 form-control" id="form-first-name">
						
					</div>
					<div class="form-group col-md-5">
						<input type="text" name="lname" placeholder="sur name" class="col-md-3 form-control" id="form-first-name">	
					</div>
					<div class="form-group col-md-10">
						<input type="email" name="email" placeholder="Email or mobile number" class="form-control" id="form-id">

					</div>
					<div class="form-group col-md-10">
						<input type="email" name="re-email" placeholder="Re-enter email or mobile number" class="form-control" id="form-re-id">
					</div>
					<div class="form-group col-md-10">
						<input type="password" name="password" placeholder="Password" class="form-control" id="form-pwd">
					</div>
					<div class="col-md-5 col-sm-5">
						<input type="file" name="profilepic" class="btn btn-info">
					</div>
					<div class="col-sm-12"><label>Birthday</label></div>
         			<div class="col-sm-3 col-md-3">
         				<select class="form-control" name="day">
         				<option>Day</option>
         				<?php
         				for($i=1;$i<=31;$i++){
         				?>
         				<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
         				<?php } ?>
         				</select>

         			</div>
         			<div class="col-sm-3 col-md-3">
         				<!--<select class="form-control" name="month">
         				<option>Month</option>
         				<option value="Jan">Jan</option>
         				<option value="Feb">Feb</option>
         				<option value="Mar">Mar</option>
         				<option value="Apr">Apr</option>
         				<option value="Jun">Jun</option>
         				<option value="Jul">Jul</option>
         				<option value="Aug">Aug</option>
         				<option value="Sep">Sep</option>
         				<option value="Oct">Oct</option>
         				<option value="Nov">Nov</option>
         				<option value="Dec">Dec</option>
         				</select>-->
         				<select class="form-control" name="month">
         				<option>Month</option>
         				<?php
         				for($i=1;$i<=12;$i++){
         				?>
         				<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
         				<?php } ?>
         				</select>
         			</div>
         			<div class="col-sm-3 col-md-3">
         				<select class="form-control" name="year">
         				<option>Year</option>
         				<?php
         				for($i=2016;$i>=1905;$i--){
         				?>
         				<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
         				<?php } ?>
         				</select>
         			</div> 
					<div class="form-group col-md-10">
						<input type ="radio" name ="gender" value="f" >Female <input type ="radio" name ="gender" value="m">Male
					</div>
					<div class="col-md-10">
						<p class="grey">By clicking Create an account, you agree to our <span class="map_head">Terms</span> and that you have read our <span class="map_head">Data Policy</span>, including our <span class="map_head">Cookie Use</span>.</p>
					</div>
					<div class="col-md-10">
						<button type="submit" class="btn btn-success">Create an account</button>
					</div>
					<div class="col-md-10">
						<hr style="width: 100%; color: #AFA7A7; height: 1px; background-color:#AFA7A7;"/>
					</div>
					<div class="col-md-10">
						<h5><b><span class="map_head">Create a Page</span> <span class="grey">for a celebrity, band or business.</span></b></h5><br/>
					</div>
				</form>
			</div>			
		</div>
		<br/>
		<div class="row col-md-offset-3 col-md-6 col-md-offset-3">
			<ul class="list-inline">
				<li><a>English</a></li>
				<li><a>മലയാളം</a></li>
				
				<li><a>Português (Brasil)</a></li>
				<li><button class="btn-xs btn-btn-info">...</button></li>
			</ul>
		</div> 
		<div class="col-md-offset-3 col-md-6 col-md-offset-3">
			<hr style="width: 100%; color: #AFA7A7; height: 1px; background-color:#AFA7A7;"> 
		</div>
		<div class="row col-md-offset-3 col-md-6 col-md-offset-3">
			<ul class="list-inline">
				<li><a>Sign Up</a></li>
				<li><a>Log In</a></li>	
				<li><a>Messenger</a></li>	
				<li><a>Facebook</a></li> 
			</ul>
		</div> 
		<div class="col-md-offset-3 col-md-6 col-md-offset-3">
			<h6>Facebook © 2016</h6>
		</div>
	</div>
</body>
</html>