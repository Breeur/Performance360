<?php

session_start();
include "config.php";

if($_SESSION["id"] == ""){
	header("Location: login.php");
}
else{

	$name = $_SESSION["name"];

}
// $sql = "SELECT * FROM medical_test_data where user_id = '".$_SESSION['id']."' ";
// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
  
// echo'<table style="table-layout:fixed;" class="table table-striped table-bordered table-hover" id="dataTables-example">';
//     echo '<thead>';
//         echo '<tr>';
//             echo '<th>Test name</th>';
//             echo '<th>Description</th>';
//             echo '<th>Unit</th>';
//             echo '<th>Normal value</th>';
//             echo '<th>Male</th>';
//             echo '<th>Female</th>';
//             echo '<th>Children</th>';
//             echo '<th>High value mean</th>';
//             echo '<th>Low value mean</th>';
//             echo '<th>Create date </th>';
//             echo '<th>Timestamp</th>';
//         echo '</tr>';
//     echo '</thead>';
//     echo '<tbody>';
//   while($row = mysqli_fetch_assoc($result)) {

//     // print_R($row);
//         // if (($row['test_name']==$XXX || $row['description']==$YYY ) && ($row['field2']>=$field1sw && $row['field1']<=$largesw) && ($txtbrand != "" && $size1=="" && $row['field2'] != "" && $row['Brand_Name']!="") ) 
//         {   
//             echo "<tr'>";                 
//                 echo "<td style=' width:150px;  text-align:left; padding: 10px;vertical-align: middle;'>";echo $row['test_name'];echo"</td>";
//                 echo "<td style='width:110px;  text-align:left; vertical-align: middle;'>";echo $row['description'];"</td>";
// echo "<td style='width:110px;  text-align:left; vertical-align: middle;'>";echo $row['unit'];"</td>";
// echo "<td style='width:110px;  text-align:left; vertical-align: middle;'>";echo $row['normalvalue'];"</td>";
// echo "<td style='width:110px;  text-align:left; vertical-align: middle;'>";echo $row['male'];"</td>";
// echo "<td style='width:110px;  text-align:left; vertical-align: middle;'>";echo $row['female'];"</td>";
//  echo "<td style='width:110px;  text-align:left; vertical-align: middle;'>";echo $row['children'];"</td>";
// echo "<td style='width:110px;  text-align:left; vertical-align: middle;'>";echo $row['highvaluemean'];"</td>";
// echo "<td style='width:110px;  text-align:left; vertical-align: middle;'>";echo $row['lowvaluemean'];"</td>";
// echo "<td style='width:110px;  text-align:left; vertical-align: middle;'>";echo $row['cr_date'];"</td>";
// echo "<td style='width:110px;  text-align:left; vertical-align: middle;'>";echo $row['timestamp'];"</td>";

//             echo '</tr>';
//         }
//     }
//     echo '</tbody>';
// echo '</table>';


// } else {
//     echo "0";
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Medical Test Database </title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

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
    <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i  class="fas fa-fw fa-plus"></i>
          <span>Add New</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-glass"></i>
          <span>Food Database</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="fo.php">
          <i class="fas fa-fw fa-heartbeat"></i>
          <span>Exercise Database</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="medical_test.php">
          <i class="fas fa-fw fa-stethoscope"></i>
          <span>Medical Test Database</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="competition.php">
          <i class="fas fa-fw fa-line-chart"></i>
          <span>competition</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="medicalreport.php">
          <i class="fas fa-fw fa-file"></i>
          <span>Medical Report</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="adminmedicalreport.php">
          <i class="fas fa-fw fa-inr"></i>
          <span>Admin View medical report</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="injury.php">
          <i class="fas fa-fw fa-pie-chart"></i>
          <span>Injury</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="sport_event.php">
          <i class="fas fa-fw fa-bicycle"></i>
          <span>Sports Events Database</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="questionnaire.php">
          <i class="fas fa-fw fa-users"></i>
          <span>Club Data</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="exerciseprescription.php">
          <i class="fas fa-fw fa-file"></i>
          <span>Exercise Prescription</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-file"></i>
          <span>Diet Prescription</span></a>
      </li>
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
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Medical Test Database </h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-12">


	          <!-- DataTales Example -->
	          <div class="card shadow mb-12">
	            <div class="card-body">



    <form>
     <!--new page -->
		 <div class="form-group row">
	 		<label class="col-md-2 control-label" for="selectbasic">Name of the test:</label>
	 		<div class="col-md-6">
	 <input type="text" name="name" id="name" value="" >
	 		</div>
	 		<label class="col-md-2 control-label" for="selectbasic"></label>
	 		<div class="col-md-4">
 	 		</div>
	 	</div>


		<div class="form-group row">
 		<label class="col-md-2 control-label" for="selectbasic">Description:</label>
 		<div class="col-md-8">
  <input type="text" name="Description" value="" >
 		</div>
  		<div class="col-md-2">
 		</div>
 	</div>
	<div class="form-group row">
	 <label class="col-md-2 control-label" for="selectbasic">Protocol:</label>
	 <div class="col-md-4">
<input type="text" name="Protocol" value="">
	 </div>
	 <label class="col-md-2 control-label" for="selectbasic"></label>
	 <div class="col-md-4">
	 </div>
 </div>
 <div class="form-group row">
	<label class="col-md-2 control-label" for="selectbasic">Unit:</label>
	<div class="col-md-4">
<input type="text" name="Unit" value="" onkeypress="return validInput(event);">
	</div>
	<label class="col-md-2 control-label" for="selectbasic"></label>
	<div class="col-md-4">
	</div>
</div>
<div class="form-group row">
 <label class="col-md-2 control-label" for="selectbasic">Normal value:</label>
 <div class="col-md-4">
<input type="text" name="normalvalue" value="">
 </div>
 <label class="col-md-2 control-label" for="selectbasic"></label>
 <div class="col-md-4">
 </div>
</div>
<div class="form-group row">
 <label class="col-md-2 control-label" for="selectbasic">Male:</label>
 <div class="col-md-4">
<input type="text" name="Male" value="">
 </div>
 <label class="col-md-2 control-label" for="selectbasic"></label>
 <div class="col-md-4">
 </div>
</div>
<div class="form-group row">
 <label class="col-md-2 control-label" for="selectbasic">Female:</label>
 <div class="col-md-4">
<input type="text" name="Female" value="">
 </div>
 <label class="col-md-2 control-label" for="selectbasic"></label>
 <div class="col-md-4">
 </div>
</div>
<div class="form-group row">
 <label class="col-md-2 control-label" for="selectbasic">children:</label>
 <div class="col-md-4">
<input type="text" name="children" value="">
 </div>
 <label class="col-md-2 control-label" for="selectbasic"></label>
 <div class="col-md-4">
 </div>
</div>


<!-- button -->
<div class="form-group row">
 <label class="col-md-2 control-label" for="selectbasic">High value means </label>
 <div class="col-md-4">
<input type="text" name="highvaluemean" value="">
 </div>
 <label class="col-md-2 control-label" for="selectbasic"></label>

</div>

<div class="form-group row">
 <label class="col-md-2 control-label" for="selectbasic">Low value means:</label>
 <div class="col-md-4">
<input type="text" name="lowvaluemean" value="">
 </div>
 <label class="col-md-2 control-label" for="selectbasic"></label>
  <div class="col-md-4">

 </div>
 <div class="col-md-4"><button type="button" class="btn btn-primary" id="save">Save </button>
    <button type="button" class="btn btn-success">List</button>
    <button type="button" class="btn btn-secondary">Back</button>
 </div>
</div>

  <!-- <div class="form-group row">
    <div class="col-md-8">
   </div>
   <div class="col-md-4">

   </div>
  </div> -->

</form>







	            </div>
	          </div>

            <div class="row">

            <!-- Content Column -->
            <div class="col-lg-12 mb-12">

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                          <th>Test name</th>
                          <th>Description</th>
                          <th>Unit</th>
                          <th>Normal value</th>
                          <th>Male</th>
                          <th>Female</th>
                          <th>Children</th>
                          <th>High value mean</th>
                          <th>Low value mean</th>
                          <th>Create date </th>
                        
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                          <th>Test name</th>
                          <th>Description</th>
                          <th>Unit</th>
                          <th>Normal value</th>
                          <th>Male</th>
                          <th>Female</th>
                          <th>Children</th>
                          <th>High value mean</th>
                          <th>Low value mean</th>
                          <th>Create date </th>
                      </tr>
                    </tfoot>
                    <tbody>
                    
<?php 

$sql = "SELECT * FROM medical_test_data where user_id = '".$_SESSION['id']."' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) { 

 while($row = mysqli_fetch_assoc($result)) {  
?>

                      <tr>
                        <td><?php echo $row['test_name'] ?></td>
                        <td><?php echo $row['description'] ?></td>
                        <td><?php echo $row['unit'] ?></td>
                        <td><?php echo $row['normalvalue'] ?></td>
                        <td><?php echo $row['male'] ?></td>
                        <td><?php echo $row['female'] ?></td>
                        <td><?php echo $row['children'] ?></td>
                        <td><?php echo $row['highvaluemean'] ?></td>
                        <td><?php echo $row['lowvaluemean'] ?></td>
                        <td><?php echo $row['cr_date'] ?></td>
                      </tr>



<?php }}  ?>                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>


            </div>

          </div>


            </div>

          </div>

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
  function validInput(e) {
  e = (e) ? e : window.event;
  // a = document.getElementById('mobile');
  // b = document.getElementById('mobile');
  cPress = (e.which) ? e.which : e.keyCode;

  if (cPress > 31 && (cPress < 45 || cPress > 57)) {
    return false;
  } else if (a.value.length >= 10) {
    return false;
  }

  return true;
} 
</script>


  <script>



$("#save").click(function(){

// alert($('#name').val());
// return false;

if($('#name').val() == ''){
alert("fill fields ");

}else{



  $.ajax({
            type: 'post',
            url: 'functions/medicaltest.php',
            data: $('form').serialize(),
            success: function (data) {
              var lastinsertid = data;
              if(data > 0){
              alert('success');
              location.reload();

            }else{
              alert("someting went wrong ");  
            }
            }
          });
}

});


</script>

</body>

</html>
