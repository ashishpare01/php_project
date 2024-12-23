<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'db_jobportal';

$conn = mysqli_connect($servername, $username, $password, $dbname);



// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Run query to count number of rows in tbljob
$sql = "SELECT COUNT(*) as count FROM tbljob";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];



// Display result on webpage
//echo "Number of rows in tbljob: " . $count;

// Close database connection

?>

   
   
   <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li> 
      </ol> 
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo $count ?></h3> 
        
              <p>jobs</p>
              <?php   mysqli_close($conn);  ?>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
      <!--      <a href="jobportal/admin/vacancy/index.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>  -->
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'db_jobportal';

$conn = mysqli_connect($servername, $username, $password, $dbname);



// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Run query to count number of rows in tbljob
$sql = "SELECT COUNT(*) as count FROM tblcompany";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];



// Display result on webpage
//echo "Number of rows in tbljob: " . $count;

// Close database connection

?>
          <div class="small-box bg-green">
            <div class="inner">
              <h3>   <?php echo $count  ?> </sup></h3> 
              <p>companies</p>
            </div>

            <?php   mysqli_close($conn);  ?>

            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
         <!--   <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->

          <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'db_jobportal';

$conn = mysqli_connect($servername, $username, $password, $dbname);



// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Run query to count number of rows in tbljob
$sql = "SELECT COUNT(*) as count FROM tblapplicants";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];
?>
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php echo $count ?></h3>

              <p>User Registrations</p>
            </div>
            <?php   mysqli_close($conn);  ?>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
         <!--   <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
        
        <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'db_jobportal';

$conn = mysqli_connect($servername, $username, $password, $dbname);



// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Run query to count number of rows in tbljob
$sql = "SELECT COUNT(*) as count FROM tblemployees";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];
?>
          <!-- small box 
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo $count ?></h3> 
              <p>Employees</p>
            </div>
            <?php   mysqli_close($conn);  ?>

-->

            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
       <!--     <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a> -->
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
    

     