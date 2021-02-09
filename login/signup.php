<?php
	include 'includes/autoloader.php';   
?>

<?php
// class customException extends Exception {
// 	public $errors;
// 	function __construct($errors){
// 		$this->errors=$errors;
// 		return $this->errors;
// 	}
//   }
  $errors = array();
if(isset($_REQUEST['btn_submit'])){
	unset($_REQUEST['btn_submit']);
	$user = new User();
	$user->firstname=$_REQUEST['fname'];
	$user->lastname=$_REQUEST['lname'];
	$user->email=$_REQUEST['email'];
	$user->gender=$_REQUEST['gender'];
	$user->city=$_REQUEST['city'];
	$user->password=$_REQUEST['pass'];


	


	// $validateuser = new UsersView();
	// $validateuser -> validateUser($user);

	try{
		$userView = new UsersView();
		$userView -> validateUser($user);
		$userView -> registerUser($user);
	}
	catch(customException $e)
	{
		$errors = $e->errors;
	}

}
?>

<html>
<head>
    <title>Register User</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
	<script>
	$().ready(()=>{
		$('#btn_submit').click(()=>{
			console.log('asdjjsahdkashdkj');
		});
		$("#signupform").validate({
			rules: {
				fname: "required",
				lname: "required",
				email:{
					required: true,
					email: true
				},
				pass: {
					required: true,
					minlength: 5
				},
				city: "required"

			},
			messages: {
				fname:"Please enter firstname",
				lname:"Please enter lastname",
				pass: {
					required: "Please provid a password",
					minlength: "Your password must be 5 characters long"
				},
				email:{
					required: "Please enter email"
				},
				city: "Please enter city"
			}
		});
	});
	</script>
	<style>
	.error {
      color: red;
   }
	</style>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<div class="card">
					<header class="card-header">
						<a href="login.php" class="float-right btn btn-outline-primary mt-1">Log in</a>
						<h4 class="card-title mt-2">Sign up</h4>
					</header>
						<article class="card-body">
							<form method = "POST" action = "signup.php" id="signupform">
								<div class="errors">
								<?php
									if($errors!=null)
									{
										foreach ($errors as $err){
											echo "<p>$err</p>";
										}
										
									}
								?>
								</div>
								<div class="form-row">
									<div class="col form-group">
										<label>First name </label>   
										<input type="text" id="fname" name="fname" class="form-control" placeholder="">
									</div> <!-- form-group end.// -->
									<div class="col form-group">
										<label>Last name</label>
										<input type="text" id="lname" name="lname" class="form-control" placeholder=" ">
									</div> <!-- form-group end.// -->
								</div> <!-- form-row end.// -->
								<div class="form-group"> 
									<label>Email address</label>
									<input type="email" id="email" name="email" class="form-control" placeholder="">
									<small class="form-text text-muted">We'll never share your email with anyone else.</small>
								</div> <!-- form-group end.// -->
								<div class="form-group">
										<label class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gender" value="male" checked>
									<span class="form-check-label"> Male </span>
									</label>
									<label class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gender" value="female">
									<span class="form-check-label"> Female</span>
									</label>
								</div> <!-- form-group end.// -->
								<div class="form-row">
									<div class="form-group col-md-6">
									<label>City</label>
									<input type="text" id="name" name="city" class="form-control">
									</div> <!-- form-group end.// -->
									<div class="form-group col-md-6">
									<label>Country</label>
									<select id="inputState" class="form-control">
										<option> Choose...</option>
										<option>Uzbekistan</option>
										<option>Russia</option>
										<option selected="">United States</option>
										<option>India</option>
										<option>Afganistan</option>
									</select>
									</div> <!-- form-group end.// -->
								</div> <!-- form-row.// -->
								<div class="form-group">
									<label>Create password</label>
									<input class="form-control" type="password" id="pass" name="pass">
								</div> <!-- form-group end.// -->  
								<div class="form-group">
									<button type="submit" name="btn_submit" id="btn_submit" class="btn btn-primary btn-block"> Register  </button>
								</div> <!-- form-group// -->      
								<small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>                                          
							</form>
						</article> <!-- card-body end .// -->
					<div class="border-top card-body text-center">Have an account? <a href="login.php">Log In</a></div>
				</div> <!-- card.// -->
			</div> <!-- col.//-->

		</div> <!-- row.//-->


	</div> 
	<!--container end.//-->
	<br><br>
</body>
</html>