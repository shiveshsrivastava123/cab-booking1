

<!DOCTYPE html>
<html>
<head>
	<title>signup Page</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js" integrity="sha512-eYSzo+20ajZMRsjxB6L7eyqo5kuXuS2+wEbbOkpaur+sA2shQameiJiWEzCIDwJqaB0a4a6tCuEvCOBHUg3Skg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
</head>
<body>
	<!--menu bar-->
	

		
<div class="container">
	<div class="icon">
        	<a href="index.php"><img class="logo" src="img/logo.png"></a>
    	</div>
    	<br/>
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>SIGN UP</h3>
				
			</div>
			<div class="card-body">
				<div>


					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input  id="user_id" type="NUMBER" class="form-control" placeholder="MOBILE NUMBER">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input id="user_password"type="password" class="form-control" placeholder="PASSWORD">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input id="confirm_password"type="password" class="form-control" placeholder=" CONFIRM PASSWORD">
					</div>
					
					<div class="form-group">
						<input id="signup_submit"type="submit" value="SIGN UP" class="btn float-right login_btn">
					</div>
				</div>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					ALREDY CREATED ACCOUNT?<a href="htmlLogin.php">LOG IN</a>
				</div>
				
			</div>
		</div>
	</div>
</div>
<script src="scripts/login.js"></script>
<!--footer-->
<footer>
    <div class="row">
        <div class="col">
        <img src="logo.png" class="logo"><br>
        
    </div>
    <div class="col">
        <h3>office</h3>
        <p>Main GT Road LPU</p>
        <p>LPU,Phagwara</p>
        <p>PUNJAB,PIN - 144411</p>
        <p class="email">rapidresponselpu@gmail.com</p>
        <h4>+91-1234567890</h4>
    </div>
    <div class="col">
        <h3>WE WILL CONTACT YOU<br> ENTER YOUR EMAIL ID</h3>
      
        <i class="far fa-envelope"></i>
        <form action="" method="POST">
        <input type="email" placeholder="enter your email id" name="email">
        <button type="submit"><i class="fas fa-arrow-right"></i></button>
    </form>
    <p>Made with <i class="fa fa-heart-o"></i> Rapid response</p>
    </div>
</div>
</footer>

</body>
</html>