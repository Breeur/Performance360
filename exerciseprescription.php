<?php

session_start();
error_reporting(0);
include "config.php";
if($_SESSION["id"] == ""){
	header("Location: login.php");
}
else{

	$name = $_SESSION["name"];

}



?>




<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script type="text/javascript">
$(window).load(function() {
    $(".loader").fadeOut("slow");
});
</script> -->
  
</head>

<body id="page-top">
<div class="loader"></div>

  <!-- Page Wrapper -->
  <div id="wrapper">

	<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-text mx-3">Ultimate Performance</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
 <?php include"header.php";?>
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $name; ?></span>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
         <!--       <a class="dropdown-item" href="#">-->
         <!--         <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>-->
         <!--         Profile-->
         <!--       </a>-->
         <!--        <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a> -->
                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
                <!--<div class="dropdown-divider"></div>-->
                <!--<a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">-->
                <!--  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>-->
                <!--  Logout-->
                <!--</a>-->
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Exercise Prescription</h1>
          </div>

   <div class="row" id="daily">

            <!-- Content Column -->
            <div class="col-lg-12 mb-12">

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-body">
<center style="padding-bottom: 15px" ><button onclick="weeklydairy()" class="btn btn-primary"> Weekly Excersice Schedule  </button></center>

                      <table id="tablePreview" class="table table-bordered">
          <!--Table head-->
            <thead>
              <tr>
                <th>Session</th>
                <th>Today</th>
              </tr>
            </thead>
  <tbody>
              <tr>
                <th scope="row">1</th>
  <td><span style='color:red'  id = "20" >  </span><a class='avc'  href="#" data= "" ><span  class="badge badge-success badge-counter">+</span></a></td>
</tr>

  <tr  id='row2'>
                <th scope="row">2</th>
                <td ><span style='color:blue' id="21">  </span><a class='avc'  href="#" ><span   class="badge badge-success badge-counter">+</span></a></td>


              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


          <!-- Content Row -->
          <div class="row" id="weekly">

            <!-- Content Column -->
            <div class="col-lg-12 mb-12">

	          <!-- DataTales Example -->
	          <div class="card shadow mb-4">
	            <div class="card-body">
<center style="padding-bottom: 15px" ><button onclick="weeklydairy1()" class="btn btn-primary"> Go Back </button></center>

				<!-- 	<div class="form-group">
					  <label class="col-md-4 control-label" for="selectbasic">Select Training Phase:</label>
					  <div class="col-md-5">
					    <select id="Training" name="Training" class="form-control">
					    	 <option value="Competition">Competition</option>
					      <option value="Preparatory">Preparatory</option>
					      <option value="Pre-competition">Pre-competition</option>
					      <option value="Taper">Taper</option>
					     
					      <option value="Transition">Transition</option>
					    </select>
					  </div>
					</div> -->
		<!-- 			<div class="form-group">
					  <label class="col-md-4 control-label" for="selectbasic">Number of Sessions:</label>
					  <div class="col-md-5">
					    <select id="Sessions" name="Sessions" class="form-control">
					      <option value="1">1</option>
					      <option value="2">2</option>
					    </select>
					  </div>
					</div> -->
					<!--Table-->
					<table id="tablePreview" class="table table-bordered">
					<!--Table head-->
					  <thead>
					    <tr>
					      <th>Session</th>
					      <th>Monday</th>
					      <th>Tuesday</th>
					      <th>Wednesday</th>
					      <th>Thursday</th>
					      <th>Friday</th>
					      <th>Saturday</th>
					      <th>Sunday</th>
					    </tr>
					  </thead>
					  <!--Table head-->
					  <!--Table body-->
					  <tbody>
					    <tr>
					      <th scope="row">1</th>
  <td><span style='color:red'  id = "1" >  </span><a class='avc'  href="selectexerciseprescription.php?w=1" data= "" ><span  class="badge badge-success badge-counter">+</span></a></td>
  <td><span style='color:blue' id = "2">  </span><a class='avc'  href="selectexerciseprescription.php?w=2" data=""><span   class="badge badge-success badge-counter">+</span></a></td>
  <td><span style='color:blue' id="3">  </span><a class='avc'  href="selectexerciseprescription.php?w=3" data=""><span  class="badge badge-success badge-counter">+</span></a></td>
  <td><span style='color:blue' id="4">  </span><a class='avc'  href="selectexerciseprescription.php?w=4"data=""><span   class="badge badge-success badge-counter">+</span></a></td>
  <td><span style='color:blue' id="5">  </span><a class='avc' href="selectexerciseprescription.php?w=5" data=""><span   class="badge badge-success badge-counter">+</span></a></td>
  <td><span style='color:blue' id="6">  </span><a class='avc' href="selectexerciseprescription.php?w=6" data=""><span  class="badge badge-success badge-counter">+</span></a></td>
  <td><span style='color:blue' id="7">  </span><a class='avc'  href="selectexerciseprescription.php?w=7" data=""><span  class="badge badge-success badge-counter">+</span></a></td>

					    </tr>

              <tr  id='row2'>
                <th scope="row">2</th>
                <td ><span style='color:blue' id="8">  </span><a class='avc'  href="selectexerciseprescription.php?w=8" ><span   class="badge badge-success badge-counter">+</span></a></td>
                <td><span style='color:blue' id="9">  </span><a  class='avc' href="selectexerciseprescription.php?w=9" ><span class="badge badge-success badge-counter">+</span></a></td>
                <td><span style='color:blue' id="10">  </span><a class='avc'  href="selectexerciseprescription.php?w=10" ><span  class="badge badge-success badge-counter">+</span></a></td>
                <td><span style='color:blue' id="11">  </span><a class='avc' href="selectexerciseprescription.php?w=11"><span   class="badge badge-success badge-counter">+</span></a></td>
                <td><span style='color:blue' id="12">  </span><a class='avc'  href="selectexerciseprescription.php?w=12"><span  class="badge badge-success badge-counter">+</span></a></td>
                <td><span style='color:blue' id="13">  </span><a  class='avc' href="selectexerciseprescription.php?w=13"><span  class="badge badge-success badge-counter">+</span></a></td>
                <td><span style='color:blue' id="14">  </span><a  class='avc' href="selectexerciseprescription.php?w=14"><span  class="badge badge-success badge-counter">+</span></a></td>
              </tr>



					  </tbody>
					  <!--Table body-->
					</table>
					<!--Table-->
	            </div>
	          </div>


            </div>

          </div>

          <!-- dive end   -->

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Ultimate Performance 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

<style>
  .badge.badge-success.badge-counter{

    display: none;
  }
</style>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

<script>

$( document ).ready(function() {
  // Handler for .ready() called.

  $('#weekly').hide();

if($('#Sessions').val() == 2){

// $('#row2').hide();
$('#row2').show();

}else{

  // $('#row2').hide();
}
  
});





 $('#Sessions').change(function(){

if(this.value == 2){
$('#row2').hide();
$('#row2').show();

}else{

  $('#row2').hide();
}


 $.session.set("trainingphase", "Hello World!");

 });

$('#Training').change(function(){

  // alert(this.value);
var abc ='&tp='+this.value;


$("a.avc").each(function() {
   var $this = $(this); 

   var _href = $this.attr("href"); 

   var link = _href.split('&');

   $this.attr("href", link[0] +abc);
});



})



function weeklydairy(){

$('#daily').hide();
$('#weekly').show();

}
function weeklydairy1(){

$('#weekly').hide();
$('#daily').show();

}


// $(".tdelete").on("click",function(e){
//     e.preventDefault();
//     var varFromPhp = $(this).attr("data");

// });

</script>


<?php 

$sql = "SELECT * FROM `excersice_prescription` WHERE user_id = '".$_SESSION['id']."' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { 

 while($row = mysqli_fetch_assoc($result)) {   ?>


<script>

$('#'+"<?php echo $row['check_id']?>").html("<?php echo 'Title :'. $row['session_title'].',<br> Name :'.$row['exercise_name'].',<br> Group :'.$row['exercise_group'].',<br> Set :'.$row['sets_1'].',<br> Rep :'.$row['rep_1'].',<br> intensity :'.$row['intensity'].',<br>Recovery :'.$row['recovery']?>");
$('#'+"<?php echo $row['check_id']?>").css({"color":"<?php echo $row['session_color'] ?>"});


 </script>

<?php if($row['week_day'] == strtolower(date("l")) &&  $row['check_id'] <=7 ){  ?>
<script>

$('#20').html("<?php echo 'Title :'. $row['session_title'].',<br> Name :'.$row['exercise_name'].',<br> Group :'.$row['exercise_group'].',<br> Set :'.$row['sets_1'].',<br> Rep :'.$row['rep_1'].',<br> intensity :'.$row['intensity'].',<br>Recovery :'.$row['recovery']?>");
$('#20').css({"color":"<?php echo $row['session_color'] ?>"});

  </script>

  <?php  }else if($row['week_day'] == strtolower(date("l")) &&  $row['check_id'] >=7 ){  ?>

<script>

$('#21').html("<?php echo 'Title :'. $row['session_title'].',<br> Name :'.$row['exercise_name'].',<br> Group :'.$row['exercise_group'].',<br> Set :'.$row['sets_1'].',<br> Rep :'.$row['rep_1'].',<br> intensity :'.$row['intensity'].',<br>Recovery :'.$row['recovery']?>");
$('#21').css({"color":"<?php echo $row['session_color'] ?>"});

  </script>
  <?php  } 
 }



}

?>



</body>

</html>
