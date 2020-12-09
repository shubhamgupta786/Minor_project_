<?php
$con=mysqli_connect( 'localhost'  , 'root' , '' , 'trekking' ) ; 
    if ($con == false )
     {
      die('Error: Cannot connect');
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['trip_start'];
    $name1=$_POST['fname'];
    $name2=$_POST['lname'];
    $name3=$_POST['lna'];
    $name4=$_POST['trip_stop'];
    $name5=$_POST['phone'];
    $name6=$_POST['mail'];
    $name7=$_POST['ame'];
    $name8=$_POST['state'];
    $name9=$_POST['city'];
    $name10=$_POST['lp'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        $sqli = "INSERT INTO manali_hospital VALUES (?,?,?,?,?,?,?,?,?,?,?) ";
        if($stmt=mysqli_prepare($con,$sqli)){
            mysqli_stmt_bind_param($stmt, "sssssssdsss", $name, $name1,$name2,$name3,$name4,$name5,$name6,$name7,$name8,$name9,$name10);
    
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                echo '<script>  alert ("Registered Sucessfully") </script>'; 
               // header("location: login.php");
              //echo "bravoooooooooooooo";
            } else{
               echo "Something went wrong. Please try again later.";
            }
            mysqli_stmt_close($stmt);  

    
    }
}

}

?>



<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<style>
body, html {
  height: 100%;
  font-family:"Comic Sans MS", cursive, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("p4.jpg");

  min-height: 1270px;

  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container1 {
  position: absolute;
  top: 20px;
  left: 450px;
  margin: 20px;
  max-width: 600px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: black;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}

.re {
  font-size:15px;
  text-align: center;

}
#text {display:none;color:red}
</style>
<body>

  <div class="topnav">
    <a href="ex.html">Home</a>
    <a href="contact.html">Contact Us</a>
    <div class="dropdown">
          <button class="dropbtn">Places
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="place_1.html">Manali</a>
            <a href="place_2.html">Nainital</a>
            <a href="place_3.html">Mussoorie</a>
            <a href="place_4.html">Rishikesh</a>

          </div>
        </div>
        <a href="index10.html">Search</a>
    <div class="topnav-right">
      <a href="login.html">Login</a>
      <a href="signup.html">Sign Up</a>
    </div>
  </div>



<div class="bg-img">
 <!--- <form action="/action_page.php" class="container1">--->
 <form   method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" class="container1">   
 <h1>Hospital Facility</h1>

    <label for="start">Registration Date:</label>

    <input type="date" id="start" name="trip_start"
           value="2021-01-01"
           min="2020-01-01" max="2025-12-31"><br><br>

    <label for="fname"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="fname" required>

    <label for="lname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lname" required>

    <label for="lname"><b>Gender</b></label>
    <input type="text" placeholder="Enter Gender" name="lna" required>

    <label for="start">Date of Birth:</label>

    <input type="date" id="start" name="trip_stop"
           value="2021-01-01"
           min="2020-01-01" max="2025-12-31"><br><br>

<label for="phone"><b>Contact No.</b></label>
<input type="text" placeholder="Enter Contact No." name="phone" required>

<label for="mail"><b>E-Mail</b></label>
<input type="text" placeholder="Enter E-Mail" name="mail" required>

<label for="lname"><b>Age</b></label>
<input type="text" placeholder="Enter Age" name="ame" required>

<label for="state"><b>State</b></label>
<input type="text" placeholder="Enter State" name="state" required>

<label for="city"><b>City</b></label>
<input type="text" placeholder="Enter city" name="city" required>

<label for="lname"><b>Any Underlying Disease</b></label>
<input type="text" placeholder="Enter.." name="lp" required>

    <button type="submit" class="btn">Submit</button>
  </form>
</div>


</body>
</html>