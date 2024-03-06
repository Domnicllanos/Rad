<?php
session_start();
if(!isset($_SESSION['user_id'])){
header('location:../index.php');	
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
<link rel="stylesheet" href="../css/fullcalendar.css" />
<link rel="stylesheet" href="../css/matrix-style.css" />
<link rel="stylesheet" href="../css/matrix-media.css" />
<link href="../font-awesome/css/all.css" rel="stylesheet" />
<link href="../font-awesome/css/fontawesome.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<div id="header">
  <h1><a href="dashboard.html">RAD FITNESS GYM ILIGAN</a></h1>
</div>


<?php include 'includes/topheader.php'?>
<?php $page='c-p-r'; include 'includes/sidebar.php'?>

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="fas fa-home"></i> Home</a> <a href="member-report.php" class="current">Member Reports</a> </div>
    <h1 class="text-center">Progress Report <i class="fas fa-tasks"></i></h1>
  </div>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
	          <div class="widget-box">
      <?php
            include 'dbcon.php';
            $id=$_GET['id'];
            $qry= "select * from members where user_id='$id'";
            $result=mysqli_query($conn,$qry);
            while($row=mysqli_fetch_array($result)){
            ?> 
      
     <div class="widget-content">
            <div class="row-fluid">
              <div class="span4">
                <table class="">
                  <tbody>
                  <tr>
                      <td><h4>RAD FITNESS GYM ILIGAN</h4></td>
                    </tr>
                    <tr>
                      <td>PRK.1 TOMAS CABILI</td>
                    </tr>
                    
                    <tr>
                      <td>Tel: 231-267-6011</td>
                    </tr>
                    <tr>
                      <td >Email: support@RADFITNESSGYMILIGAN.com</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              
              <div class="span8">
                <table class="table table-bordered table-invoice-full">
                  <thead>
                    <tr>
                      <th class="head0">Membership ID</th>
                      <th class="head1 right">Initial Weight</th>
                      <th class="head0 right">Current Weight</th>
                      <th class="head1">Services Taken</th>
                      <th class="head0 right">Plans (Upto)</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><div class="text-center">PGC-SS-<?php echo $row['user_id']; ?></div></td>
                      <td><div class="text-center"><?php echo $row['ini_weight']; ?> KG</div></td>
                      <td><div class="text-center"><?php echo $row['curr_weight']; ?> KG</div></td>
                      <td><div class="text-center"><?php echo $row['services']; ?></div></td>
                      <td><div class="text-center"><?php echo $row['plan']; ?> Month/s</div></td>
                    </tr>
                  </tbody>
                </table>
                <table class="table table-bordered table-invoice-full">
                  <tbody>
                    <tr>
                      <td class="msg-invoice" width="55%"> <div class="text-center"><h5><?php echo $row['fullname']; ?>'s Body Structure stated as from <?php echo $row['ini_bodytype']; ?> to <?php echo $row['curr_bodytype']; ?>. <br /> With Total Weight Differences of <?php include 'actions/weight-diff.php';?> KG <br /> As per records of <?php echo $row['progress_date']; ?></h5>
                        
                        </div>
                    </tr>
                  </tbody>
                </table>
              </div> 
              
            </div>

            <div class="row-fluid">
                <div class="pull-left">
                <br>
                
                <h4>GYM Member: <?php echo $row['fullname']; ?> <br> Weight Variation of <em style="color:green"><?php include 'actions/progress-percent.php';?>%</em> as per current updates! <i class="fa fa-spinner fa-spin" style="font-size:24px"></i><br/> <br/>  <br/></h4><p>Thank you for choosing our services.<br/>- on the behalf of whole team</p>
                </div>
                <div class="pull-right">
                  <h4><span>Approved By:</h4>
                  <img src="../img/report/stamp-sample.png" width="124px;" alt=""><p class="text-center">Note:AutoGenerated</p> </div>
                  
            </div>
          </div>
   
		</div>
	
      </div>
      <?php
}
      ?>
    </div>

  </div>
</div>


<div class="row-fluid">
  <div id="footer" class="span12"> <?php echo date("Y");?> </a> </div>
</div>

<style>
#footer {
  color: white;
}
</style>


<script src="../js/excanvas.min.js"></script> 
<script src="../js/jquery.min.js"></script> 
<script src="../js/jquery.ui.custom.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/jquery.flot.min.js"></script> 
<script src="../js/jquery.flot.resize.min.js"></script> 
<script src="../js/jquery.peity.min.js"></script> 
<script src="../js/fullcalendar.min.js"></script> 
<script src="../js/matrix.js"></script> 
<script src="../js/matrix.dashboard.js"></script> 
<script src="../js/jquery.gritter.min.js"></script> 
<script src="../js/matrix.interface.js"></script> 
<script src="../js/matrix.chat.js"></script> 
<script src="../js/jquery.validate.js"></script> 
<script src="../js/matrix.form_validation.js"></script> 
<script src="../js/jquery.wizard.js"></script> 
<script src="../js/jquery.uniform.js"></script> 
<script src="../js/select2.min.js"></script> 
<script src="../js/matrix.popover.js"></script> 
<script src="../js/jquery.dataTables.min.js"></script> 
<script src="../js/matrix.tables.js"></script> 

<script type="text/javascript">
  function goPage (newURL) {

      if (newURL != "") {
      
          if (newURL == "-" ) {
              resetMenu();            
          } 
          else {  
            document.location.href = newURL;
          }
      }
  }

function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
