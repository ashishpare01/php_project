<?php
// Replace the values in the following lines with your own database credentials
$host = "localhost";
$username = "root";
$password = "";
$database = "db_jobportal";

// Create a connection to the database
$con = mysqli_connect($host, $username, $password, $database);

// Check if the connection was successful
if (mysqli_connect_errno()) {
  die("Failed to connect to MySQL: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<title> Registration or Sign Up form in HTML CSS | CodingLab </title>-->
   <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  
}
.wrapper{
  position: relative;
  max-width: 430px;
  width: 100%;
  background: #fff;
  padding: 34px;
  border-radius: 6px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}
.wrapper h2{
  position: relative;
  font-size: 22px;
  font-weight: 600;
  color: #333;
}
.wrapper h2::before{
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 28px;
  border-radius: 12px;

}
.wrapper form{
  margin-top: 30px;
}
.wrapper form .input-box{
  height: 52px;
  margin: 18px 0;
}
form .input-box input{
  height: 100%;
  width: 100%;
  outline: none;
  padding: 0 15px;
  font-size: 17px;
  font-weight: 400;
  color: #333;
  border: 1.5px solid #C7BEBE;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
}
.input-box input:focus,
.input-box input:valid{
  border-color: #4070f4;
}
form .policy{
  display: flex;
  align-items: center;
}
form h3{
  color: #707070;
  font-size: 14px;
  font-weight: 500;
  margin-left: 10px;
}
.input-box.button input{
  color: #fff;
  letter-spacing: 1px;
  border: none;
  background: #4070f4;
  cursor: pointer;
}
.input-box.button input:hover{
  background: #0e4bf1;
}
form .text h3{
 color: #333;
 width: 100%;
 text-align: center;
}
form .text h3 a{
  color: #4070f4;
  text-decoration: none;
}
form .text h3 a:hover{
  text-decoration: underline;
}
.background{
  min-height:100vh;
  display: flex;
  justify-content:center;
  align-items:center;
  position:relative;

}
.background::before{
  content:'';
  background-image:url(bac.png);
  background-repeat:no-repeat;
  background-size:cover;
  background-position:center;
  position:absolute;
  top:0;
  left:0;
  bottom:0;
  right:0;
 background-color:black;
 opacity:30%;
}


</style>
   </head>
<body class="background">
 
  <div class="wrapper">
    <h3>SignUp</h3>
    <form action="#" method="post">
      <div class="input-box">
        <input type="text" placeholder="Enter your name" name="nam" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter your last name" name="surname" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Choose Your username" name="username" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter your email" name="email" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Create password" name="pass" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Confirm password" name=" " required>
      </div>
      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Register Now" name="submit">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="index.php">Login now</a></h3>
      </div>
    </form>
  
</div>
<?php 
require_once("include/initialize.php");
if(isset($_POST['submit'])) {
  $name = $_POST['nam'];
  $surname = $_POST['surname'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  
$stmt = mysqli_prepare($con, "INSERT INTO  tblapplicants (FNAME, LNAME,USERNAME,EMAILADDRESS,PASS) VALUES (?, ?, ?, ?, ?, ?)");
mysqli_stmt_bind_param($stmt, 'ssssss',$name, $surname, $username, $email, $pass);
$result = mysqli_stmt_execute($stmt);


}
?>
</body>
</html>