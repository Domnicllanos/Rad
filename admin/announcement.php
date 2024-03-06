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
<link href="../font-awesome/css/fontawesome.css" rel="stylesheet" />
<link href="../font-awesome/css/all.css" rel="stylesheet" />
<link rel="stylesheet" href="../css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<div id="header">
  <h1><a href="dashboard.html">RAD FITNESS GYM ILIGAN</a></h1>
</div>

<?php include 'includes/topheader.php'?>

  <?php $page='announcement'; include 'includes/sidebar.php'?>
<div id="content">
<div id="content-header">
  <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="fas fa-home"></i> Home</a><a href="announcement.php" class="current">Announcements</a> </div>
  <h1>Announcement</h1>
</div>
<div class="container-fluid">
  <hr>
  <a href="manage-announcement.php"><button class="btn btn-danger" type="button">Manage Your Announcements</button></a>
  <div class="row-fluid">
    <div class="widget-box">
      <div class="widget-title"> <span class="icon"> <i class="fas fa-align-justify"></i> </span>
        <h5>Make Announcements</h5>
      </div>
      <div class="widget-content">
        <div class="control-group">
          <form action="post-announcement.php" method="POST">
            <div class="controls">
              <textarea class="span12" name="message" rows="6" placeholder="Enter text ..."></textarea>
            </div>
            <div class="controls">
                <h5><label for="Announce Date">Applied Date: 
              <input type="date" name="date"></h5> </label>
            </div>
            <div class="text-center">
            <button type="submit" class="btn btn-info btn-large">Publish Now</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


</div></div>



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
<script src="../js/matrix.js"></script> 
<script src="../js/matrix.dashboard.js"></script> 
<script src="../js/jquery.gritter.min.js"></script> 
<script src="../js/matrix.interface.js"></script> 
<script src="../js/matrix.chat.js"></script> 
<script src="../js/jquery.validate.js"></script>  
<script src="../js/select2.min.js"></script> 
<script src="../js/matrix.popover.js"></script> 
<script src="../js/jquery.dataTables.min.js"></script> 
<script src="../js/matrix.tables.js"></script>
<script src="../js/wysihtml5-0.3.0.js"></script> 
<script src="../js/bootstrap-wysihtml5.js"></script>

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
<script>
	$('.textarea_editor').wysihtml5();
</script>
</body>
</html>
