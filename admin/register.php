<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">


  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>


<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
          <div class="col-lg-7">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Admin Account!</h1>
              </div>
                <div class="form-group row">
                  <div class="col-sm-12 mb-6 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="fname" placeholder="First Name">
                  </div>
            <!--       <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" id="lname" placeholder="Last Name">
                  </div> -->
                </div>
                    <div class="form-group row">
                  <!-- <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="datepicker" placeholder="date of birth">
                  </div> -->
                  <div class="col-sm-12">
                    <input type="text" class="form-control form-control-user" id="mobile" placeholder="mobile">
                  </div>
                </div>
                <div class="form-group row">
                   <div class="col-sm-12">
                    <input type="text" class="form-control form-control-user" id="designation" placeholder="designation">
                   </div>

             <!--      <div class="col-sm-12 mb-12 mb-sm-12">
                    <p> Select your gender:</p>
                      <input type="radio" name="gender" value="male"> Male
                      <input type="radio" name="gender" value="female"> Female
                    
                  </div> -->
                </div>


                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="email" placeholder="Email Address">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password" placeholder="Password">
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="repeatpassword" placeholder="Repeat Password">
                  </div>
                </div>
                <button class="btn btn-primary btn-user btn-block"v id="registerbtn">
                  Register Account
                </button>
              <hr>
              <div class="text-center">
                <a class="small" href="#">Forgot Password?</a>
              </div>
              <div class="text-center">
                <a class="small" href="login.php">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->


  <script>


    // $( "#datepicker" ).datepicker();

 $("#datepicker").datepicker({
        changeMonth: true,
        changeYear: true
    });


  	$(document).ready(function(){
		$("#registerbtn").click(function(){
			var fname = $("#fname").val();
			var designation = $("#designation").val();
			var email = $("#email").val();
			var password = $("#password").val();
			var repeatpassword = $("#repeatpassword").val();


      var mobile = $("#mobile").val();
      // var datepicker = $("#datepicker").val();
      // var gender = $("input[name='gender']:checked").val();
     





			if(password == ""){
				$("#password").focus();
				return;
			}
			if(repeatpassword == ""){
				$("#repeatpassword").focus();
				return;
			}
			if(password == repeatpassword){
				$.ajax('../functions/adminregisteration.php', {
				    type: 'POST',  // http method
				    data: { 'fname': fname, 'designation': designation, 'email': email, 'password': password ,'mobile':mobile },  // data to submit
				    success: function (data, status, xhr) {
        
				        if(data != "0"){
				        	alert("New Admin created successfully");
				        	$(location).attr('href', 'login.php')
				        }
				        else{
				        	alert("Something went wrong. Please try again in sometime.");
				        }
				    },
				    error: function (jqXhr, textStatus, errorMessage) {
				            alert('Error' + errorMessage);
				    }
				});
			}
			else{
				alert("Password does not match");
				$("#password").val("");
				$("#repeatpassword").val("");
				$("#password").focus();
			}
		});
	});
  </script>

</body>

</html>
