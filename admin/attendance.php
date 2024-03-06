<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header('location:../index.php');  
    exit(); 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>RAD FITNESS GYM ILIGAN</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../css/uniform.css" />
<link rel="stylesheet" href="../css/select2.css" />
<link rel="stylesheet" href="../css/matrix-style.css" />
<link rel="stylesheet" href="../css/matrix-media.css" />
<link href="../font-awesome/css/fontawesome.css" rel="stylesheet" />
<link href="../font-awesome/css/all.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="header">
  <h1><a href="dashboard.html">RAD FITNESS GYM ILIGAN</a></h1>
</div>

<?php include 'includes/topheader.php'?>

<?php $page="attendance"; include 'includes/sidebar.php'?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="fas fa-home"></i> Home</a> <a href="attendance.php" class="current">Manage Attendance</a> </div>
    <h1 class="text-center">Attendance List <i class="fas fa-calendar"></i></h1>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
        <div class='widget-box'>
          <div class='widget-title'> <span class='icon'> <i class='fas fa-th'></i> </span>
            <h5>Attendance Table</h5>
          </div>
          <div class='widget-content nopadding'> 
            <table class='table table-bordered table-hover'>
              <thead>
                <tr>
                  <th>#</th>
                  <th>Fullname</th>
                  <th>Contact Number</th>
                  <th>Choosen Service</th>
                  <th>Action</th>
                </tr>
              </thead>
              <?php 
              include "dbcon.php";

              $current_date = date('Y-m-d H:i:s'); 
              $todays_date = date('Y-m-d');
              $qry="SELECT user_id, fullname, contact, services FROM members WHERE status = 'Active'";
              $result=mysqli_query($conn,$qry);
              $cnt = 1;
              while($row=mysqli_fetch_array($result)){ ?>
              <tbody> 
                <td><div class='text-center'><?php echo $cnt; ?></div></td>
                <td><div class='text-center'><?php echo $row['fullname']; ?></div></td>
                <td><div class='text-center'><?php echo $row['contact']; ?></div></td>
                <td><div class='text-center'><?php echo $row['services']; ?></div></td>
                <td>
                  <?php
                  $qry_attendance = "SELECT * FROM attendance WHERE curr_date = '$todays_date' AND user_id = '".$row['user_id']."'";
                  $res = $conn->query($qry_attendance);
                  if($res && $res->num_rows > 0) {
                    $row_exist = mysqli_fetch_array($res);
                    echo "<div class='text-center'><span class='label label-inverse'>".$row_exist['curr_date']."</span></div>";
                    echo "<div class='text-center'><a href='actions/delete-attendance.php?id=".$row['user_id']."'><button class='btn btn-danger'>Check Out <i class='fas fa-clock'></i></button></a></div>";
                  } else {
                    echo "<div class='text-center'><a href='actions/check-attendance.php?id=".$row['user_id']."'><button class='btn btn-info'>Check In <i class='fas fa-map-marker-alt'></i></button></a></div>";
                  }
                  ?>
                </td>
              </tbody>
              <?php $cnt++; } ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"><?php echo date("Y");?></div>
</div>

<style>
#footer {
  color: white;
}
</style>


<script src="../js/jquery.min.js"></script> 
<script src="../js/jquery.ui.custom.js"></script> 
<script src="../js/bootstrap.min.js"></script>  
<script src="../js/matrix.js"></script> 
<script src="../js/jquery.validate.js"></script> 
<script src="../js/jquery.uniform.js"></script> 
<script src="../js/select2.min.js"></script> 
<script src="../js/jquery.dataTables.min.js"></script> 
<script src="../js/matrix.tables.js"></script> 
</body>
</html>
