<?php
$con=mysqli_connect( 'localhost'  , 'root' , '' , 'trekking' ) ; 
    if ($con == false )
     {
      die('Error: Cannot connect');
     }
     

     //echo $result = mysqli_query($con, " desc abc");

     //$sql = "SELECT * FROM abc ";

     //$result = mysqli_query($con, $sql);


     // Fetch all
  //mysqli_fetch_all($result, MYSQLI_ASSOC);

  // Free result set
  //mysqli_free_result($result);
//////////////////////////////////////////////////////////////////////
 /* $sqli = "INSERT INTO abc VALUES ('pradeep','kota') ";

 if (mysqli_query($con, $sqli)) {
  echo "New record created successfully";
  } else {
  echo "Error: " . $sqli . "<br>" . mysqli_error($con);
 }
*/
 /*$sql = "SELECT * FROM abc ";

if ($result = mysqli_query($con, $sql)) {
                                              // Fetch one and one row
  while ($row = mysqli_fetch_row($result)) {
    printf ("%s (%s)\n", $row[0], $row[1]);
    printf("\n");
  }
  mysqli_free_result($result);
}
*/
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['fname'];
  $name1=$_POST['lname'];
  $name2=$_POST['gender'];
  $name3=$_POST['phone'];
  $name4=$_POST['mail'];
  $name5=$_POST['state'];
  $name6=$_POST['city'];
  $name7=$_POST['username'];
  $name8=$_POST['psw'];
  
  if (empty($name)) {
      echo "Name is empty";
  } else {
    $sqli = "INSERT INTO register (First_name,Last_name,Gender,Contact_no,Email,City,State,username,user_password)VALUES (?,?,?,?,?,?,?,?,?) ";
    if($stmt=mysqli_prepare($con,$sqli)){

      mysqli_stmt_bind_param($stmt, "sssdsssss", $name, $name1,$name2,$name3,$name4,$name5,$name6,$name7,$name8);

      if(mysqli_stmt_execute($stmt)){
        // Redirect to login page
        echo '<script>  alert ("Registered Sucessfully") </script>'; 
        header("location: login.php");
      //echo "bravoooooooooooooo";
    } else{
       // echo "Something went wrong. Please try again later.";
    }
    mysqli_stmt_close($stmt);  
  }

   
  

  

    if (mysqli_query($con, $sqli)) {
     echo "New record created successfully";
     } else {
     //echo "Error: " . $sqli . "<br>" . mysqli_error($con);
    }
      
  }
}
/*
   if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
          

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
*/









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
      <a href="login.php">Login</a>
      <a href="signup.php">Sign Up</a>
    </div>
  </div>



<div class="bg-img">
  <!---<form action="/action_page.php" class="container1">--->
  <form   method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" class="container1">
    <h1>Register</h1>

    <label for="fname"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="fname" required>

    <label for="lname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lname" required>

    <label for="gender"><b>Gender</b></label><br><br>
    <input type="text" placeholder="Male/Female" name="gender" required>
  <!---<label for="male"><b>Male</b></label>
  <input type="radio" placeholder="Female" name="gender" required>
<label for="female"><b>Female</b></label>
<input type="radio" placeholder="Other" name="gender" required>
<label for="other"><b>Other</b></label ---><br><br>

<label for="phone"><b>Contact No.</b></label>
<input type="text" placeholder="Enter Contact No." name="phone" required>

<label for="mail"><b>E-Mail</b></label>
<input type="text" placeholder="Enter E-Mail" name="mail" required>

<label for="state"><b>State</b></label>
<input type="text" placeholder="Enter State" name="state" required>

<label for="city"><b>City</b></label>
<input type="text" placeholder="Enter city" name="city" required>

<label for="username"><b>Username</b></label>
<input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="psw" required>

   <!--- <label for="psw"><b>Confirm Password</b></label><br>
    <input type="password" placeholder="Enter Password again" name="psw" required>--->

    <input type="checkbox" id="confirm" name="confirm" value="confirm">
  <label for="confirm"> <b>After checking the button, You confirm that you are 18 years of age or older.</b></label><br><br>

    <button type="submit" class="btn">Submit</button>
    <p class="re">
      <a href="signup.php">Already have an Account? Login!</a>
      </p>
  </form>
</div>


</body>
</html>
