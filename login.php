<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script type="text/javascript">
$(window).load(function() {
    $(".loader").fadeOut("slow");
});
</script> -->
<!--  -->
</head>

<body class="bg-gradient-primary">
	<div class="loader"></div>


  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"> Welcome </h1>
                  </div>
                    <div class="form-group">
                      <input type="email" class="form-control form-control-user" id="username" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" placeholder="Password">
                    </div>
                     <div class="form-group">
                      <div class="form-check">
                      <input type="checkbox" class="form-check-input form-control-user" id="rem" >
                      <label class="form-check-label" for="rem"> Remember me</label>
                    </div>
                    </div>
                    <button class="btn btn-primary btn-user btn-block" id="loginbtn">
                      Login
                    </button>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.php">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.php">Create an Account!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <script>
  	$(document).ready(function(){
		$("#loginbtn").click(function(){
			var username = $("#username").val();
			var password = $("#password").val();
			$.ajax('functions/userlogin.php', {
			    type: 'POST',  // http method
			    data: { 'username': username, 'password': password },  // data to submit
			    success: function (data, status, xhr) {
            // alert(data);
            // return false;
			        if(data > 0){
                
			          alert("Login Successful");
                $(location).attr('href', 'index.php')
			        }
			        else{
			         alert("Username or Password is incorrect");
			        }
			    },
			    error: function (jqXhr, textStatus, errorMessage) {
			            alert('Error' + errorMessage);
			    }
			});
		});
	});
  </script>

</body>

</html>
