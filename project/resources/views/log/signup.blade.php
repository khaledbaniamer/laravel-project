<!doctype html>
<html lang="en">
  <head>
  	<title>Sign up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="log/css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(log/images/back10.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				
				<div class="col-md-6 text-center mb-3">
					
					<h2 class="heading-section">Sign Up </h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	{{-- <h3 class="mb-4 text-center">Have an account?</h3> --}}
		      	<form action="#" class="signin-form">
		      		<div class="form-group ">
		      			<input type="text" class="form-control" placeholder="Firstname" name="fname" required style="margin-bottom: 10px">
                        <input type="text" class="form-control" placeholder="Lastname" name="lname" required>
		      		</div>
	            <div class="form-group">
	              <input id="password-field" type="password" class="form-control" placeholder="Set Password" required style="margin-bottom: 10px">
	              {{-- <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> --}}
                  <input id="password-field" type="password" class="form-control" placeholder="retype Password" required>

	            </div>
                <select class="form-control mb-3">
                    <option> Select region</option>
                  </select>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign Up</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
		            	<label class="checkbox-wrap checkbox-primary">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Have an account?</a>
								</div>
	            </div>
	          </form>
	          {{-- <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="#" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Facebook</a>
	          	<a href="#" class="px-2 py-2 ml-md-1 rounded"><span class="ion-logo-twitter mr-2"></span> Twitter</a>
	          </div> --}}
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

