<?php
	session_start();
	if (isset($_SESSION['user'])){
		header('location:home.php'); 
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="author" content="Achilles Drenos">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="with=device-with, initial-scale=1, shrink-to-fit=no">
	<title>SmartFarm</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style2.css ">
</head>
<body>
	<div class="container">
		<!-- Login Form Start -->
		<div class="row justify-content-center wrapper" id="login-box">
			<div class="col-lg-10 my-auto">
				<div class="card-group myShadow">
					<div class="card rounded-left p-4" style="flex-grow:1.4;">
						<h1 class="text-center font-weight-bold text-primary">Σύνδεση Χρήστη</h1>
						<hr class="my-3">
						<form action="#" method="post" class="px-3" id="login-form">
							<div id="loginAlert"></div>
							<div class="input-group input-group-lg form-group">
								<div class="input-group-prepend">
									<span class="input-group-text rounded-0">
										<i class="far fa-envelope fa-lg"></i>
									</span>							
								</div>
								<input type="email" name="email" id="email" class="form-control rounded-0" placeholder="E-Mail" required value="<?php if(isset ($_COOKIE['email'])) {echo $_COOKIE['email']; } ?>">		
							</div>
							<div class="input-group input-group-lg form-group">
								<div class="input-group-prepend">
									<span class="input-group-text rounded-0">
										<i class="fas fa-key fa-lg"></i>
									</span>							
								</div>
								<input type="password" name="password" id="password" class="form-control rounded-0" placeholder="Password" required value="<?php if(isset ($_COOKIE['password'])) {echo $_COOKIE['password']; } ?>">		
							</div>
							<div class="form-group">
								<div class="custom-control custom-checkbox float-left">
									<input type="checkbox" name="rem" class="custom-control-input" id="customCheck" <?php if(isset($_COOKIE['email'])) { ?> checked <?php } ?>>
									<label for="customCheck" class="custom-control-label">Να με θυμάσαι</label> 
								</div>
								<div class="forgot float-right">
									<a href="#" id="forgot-link">Ξεχάσατε τον κωδικό?</a>
								</div>
								<div class="clearfix"></div>
							</div>	
							<div class="form-group">
									<input type="submit" value="Σύνδεση" id="login-btn" class="btn btn-primary btn-lg btn-block myBtn">
							</div>					
						</form>
					</div> 
					<div class="card justify-content-center rounded-right myColor p-4"> 
						<h1 class="text-center font-weight-bold text-white">Καλως Ορίσατε!</h1>
						<hr class="my-3 bg-light myHr">
						<p class="text-center font-weight-bolder text-light lead">Δημιουργήστε έναν καινούργιο λογαριασμό, εισάγοντας τα προσωπικά σας στοιχεία και ξεκινήστε να χρησιμοποιείται το Smart Farm!</p>
						<button class="btn btn-outline-light btn-lg align-self-center font-weight-bolder mt-4 myLinkBtn" id="register-link">Εγγραφή</button>
					</div>
				</div>
			</div>
		</div>
		<!-- Login Form End -->

		<!-- Register Form Start -->
		<div class="row justify-content-center wrapper" id="register-box" style="display: none;">
			<div class="col-lg-10 my-auto">
				<div class="card-group myShadow">
					<div class="card justify-content-center rounded-left myColor p-4"> 
						<h1 class="text-center font-weight-bold text-white">Επιστρέψτε πίσω!</h1>
						<hr class="my-3 bg-light myHr">
						<p class="text-center font-weight-bolder text-light lead">Συνδεθείτε με τα προσωπικά σας στοιχεία</p>
						<button class="btn btn-outline-light btn-lg align-self-center font-weight-bolder mt-4 myLinkBtn" id="login-link">Σύνδεση</button>
					</div>
					<div class="card rounded-right p-4" style="flex-grow:1.4;">
						<h1 class="text-center font-weight-bold text-primary">Δημιουργία Λογαριασμού</h1>
						<hr class="my-3">
						<form action="#" method="post" class="px-3" id="register-form">
							<div id="regAlert"></div>
							<div class="input-group input-group-lg form-group">
								<div class="input-group-prepend">
									<span class="input-group-text rounded-0">
										<i class="far fa-user fa-lg"></i>
									</span>							
								</div>
								<input type="text" name="name" id="name" class="form-control rounded-0" placeholder="Full Name" required>		
							</div>
							<div class="input-group input-group-lg form-group">
								<div class="input-group-prepend">
									<span class="input-group-text rounded-0">
										<i class="far fa-envelope fa-lg"></i>
	 								</span>							
								</div>
								<input type="email" name="email" id="remail" class="form-control rounded-0" placeholder="E-Mail" required>		
							</div>

							<div class="input-group input-group-lg form-group">
								<div class="input-group-prepend">
									<span class="input-group-text rounded-0">
										<i class="fas fa-key fa-lg"></i>
									</span>							
								</div>
								<input type="password" name="password" id="rpassword" class="form-control rounded-0" placeholder="Password" required minlength="5">		
							</div>


							<div class="input-group input-group-lg form-group">
								<div class="input-group-prepend">
									<span class="input-group-text rounded-0">
										<i class="fas fa-key fa-lg"></i>
									</span>							
								</div>
								<input type="password" name="cpassword" id="cpassword" class="form-control rounded-0" placeholder="Confirm Password" required minlength="5">			
							</div>	

							<div class="form-group">
								<div id="passError" class="text-danger font-weight-bold">	
								</div>								
							</div>

							<div class="form-group">
									<input type="submit" value="Εγγραφή" id="register-btn" class="btn btn-primary btn-lg btn-block myBtn">
							</div>					
						</form>
					</div> 
				</div>
			</div>
		</div>
		<!-- Register Form End-->
		
		<!--Forgot Password Form Start-->
		<div class="row justify-content-center wrapper" id="forgot-box" style="display: none;">
			<div class="col-lg-10 my-auto">
				<div class="card-group myShadow">
					<div class="card justify-content-center rounded-left myColor p-4"> 
						<h1 class="text-center font-weight-bold text-white">Επαναφορά Κωδικού</h1>
						<hr class="my-3 bg-light myHr">
						<button class="btn btn-outline-light btn-lg align-self-center font-weight-bolder mt-4 myLinkBtn" id="back-link">Πίσω</button>
					</div>
					<div class="card rounded-right p-4" style="flex-grow:1.4;">
						<h1 class="text-center font-weight-bold text-primary">Ξεχάσατε τον κωδικό σας ; </h1>
						<hr class="my-3">
						<p class="lead text-center text-secondary">Για να επαναφέρετε τον κωδικό πρόσβασής σας, εισαγάγετε την καταχωρισμένη διεύθυνση e-mail και θα σας στείλουμε τις υπόλοιπες οδηγίες στο email σας!</p>
						<form action="#" method="post" class="px-3" id="forgot-form">
							<div id="forgotAlert"></div>
							<div class="input-group input-group-lg form-group">
								<div class="input-group-prepend">
									<span class="input-group-text rounded-0">
										<i class="far fa-envelope fa-lg"></i>
									</span>							
								</div>
								<input type="email" name="email" id="femail" class="form-control rounded-0" placeholder="E-Mail" required>		
							</div>	
							<div class="form-group">
									<input type="submit" value="Επαναφορά Κωδικού" id="forgot-btn" class="btn btn-primary btn-lg btn-block myBtn">
							</div>					
						</form>
					</div> 
					
				</div>
			</div>
		</div>
		<!--Forgot Password Form End-->
	</div>

	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>	
	<script type="text/javascript">
		$(document).ready(function(){
			$("#register-link").click(function(){
				$("#login-box").hide();
				$("#register-box").show();
			});

			$("#login-link").click(function(){
				$("#login-box").show();
				$("#register-box").hide();
			});	 

			$("#forgot-link").click(function(){
				$("#login-box").hide();
				$("#forgot-box").show();
			});

			$("#back-link").click(function(){
				$("#login-box").show();
				$("#forgot-box").hide();
			});

			//Register Ajax Request
			$("#register-btn").click(function(e){
				if($("#register-form")[0].checkValidity()){
					e.preventDefault();
					$("#register-btn").val('please Wait...'); 
					if($("#rpassword").val() != $("#cpassword").val()){
						$("#passError").text('* Password did not matched!');
						$("#register-btn").val('Sign Up'); 
					}
					else{
						$("#passError").text('');
						$.ajax({
							url: 'assets/php/action.php', 
							method: 'post', 
							data: $("#register-form").serialize()+'&action=register',
							success: function(response){
								$("#register-btn").val('Sign Up'); 
								if(response === 'register'){
									window.location = 'home.php';
								}
								else{
									$("#regAlert").html(response); 
								}
							}
						});
					}
				}
			});

			//Login Ajax Request
			$("#login-btn").click(function(e){
				if($("#login-form")[0].checkValidity()){
					e.preventDefault();

					$("#login-btn").val('Please Wait...');
					$.ajax({
						url: 'assets/php/action.php',
						method:'post',
						data: $("#login-form").serialize()+'&action=login',
						success:function(response){
							console.log(response);
							$("#login-btn").val('Sign In');
							if (response === 'login') {
								window.location = 'home.php';
							}
							else{
								$("#loginAlert").html(response);
							}
						}
					});
				}
			});

			//Forgot Password Ajax Request
			$("#forgot-btn").click(function(e){
				if($("#forgot-form")[0].checkValidity()){
					e.preventDefault();
					$("#forgot-btn").val('Please Wait...');
					$.ajax({
						url: 'assets/php/action.php',
						method:'post',
						data: $("#forgot-form").serialize()+'&action=forgot',
						success:function(response){
							$("#forgot-btn").val('Reset Password');
							$("#forgot-form")[0].reset();
							$("#forgotAlert").html(response);
						}
					});
				}
			});

		}); 
	</script>
</body>
</html>