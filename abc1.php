<?php
$con=mysqli_connect( 'localhost'  , 'root' , '' , 'test' ) ; 
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
*///////////////////////////////////////////////////////////////////////////////////////////////////////
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
/*if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['email'];
  $name1=$_POST['psw'];
  if (empty($name)) {
      echo "Name is empty";
  } else {
    $sqli = "INSERT INTO abc(name,city ) VALUES  (?,?) ";
    if($stmt=mysqli_prepare($con,$sqli)){

      mysqli_stmt_bind_param($stmt, "ss", $name, $name1);

      if(mysqli_stmt_execute($stmt)){
        // Redirect to login page
        echo '<script>alert("DATA ENTERED SUCESSFULLY")</script>'; 
        header("location: ex.html");
      //echo "bravoooooooooooooo";
    } else{
       // echo "Something went wrong. Please try again later.";
    }
    mysqli_stmt_close($stmt);  
  }
if (mysqli_query($con, $sqli)) {
    // echo "New record created successfully";
     } else {
     //echo "Error: " . $sqli . "<br>" . mysqli_error($con);
    }
      
  }
}%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
////////////////////////////////////////////////////////////////////////////////////*/
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['email'];
  $name1=$_POST['psw'];
  //if (empty($name)) {
    //  echo "Name is empty";
  //}
  if(empty($name) && empty($name1)){
    // Prepare a select statement
    $sql = "SELECT name, city,  FROM abc WHERE name = ? and city =?";
if($stmt=mysqli_prepare($con,$sql)){
  mysqli_stmt_bind_param($stmt, "ss", $name,$name1);
  if(mysqli_stmt_execute($stmt)){
    //mysqli_stmt_store_result($stmt);
    header("location: ex.html");
  }else 
  {
    echo '<script>alert ("data is invalid")  </script>';
  }
  mysqli_stmt_close($stmt);
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

  min-height: 673px;

  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container1 {
  position: absolute;
  top: 100px;
  left: 600px;
  margin: 20px;
  max-width: 300px;
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
body {


margin: 0;
font-family:"Comic Sans MS", cursive, sans-serif;
font-weight: bold;
}
}
.container {
position: relative;

margin: 0 auto;
}

.container img {vertical-align: middle;}

.container .content {
position: absolute;
bottom: 480px;

background: rgb(0, 0, 0); /* Fallback color */
background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
color: #f1f1f1;
width: 100%;
padding: 2px;
}

input[type=text] {
width: 130px;
box-sizing: border-box;
border: 2px solid #ccc;
border-radius: 4px;
font-size: 16px;
background-color: white;
background-image: url('searchicon.png');
background-position: 10px 10px;
background-repeat: no-repeat;
padding: 12px 20px 12px 40px;
-webkit-transition: width 0.4s ease-in-out;
transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
width: 100%;
}

.hi {font-size:40px;}

.hi1 {font-size:20px;}

.topnav {
overflow: hidden;
background-color: #333;
}

.topnav a {
float: left;
color: white;
text-align: center;
padding: 14px 16px;
text-decoration: none;
font-size: 17px;
}



.topnav-right {
float: right;
}
.dropdown {
float: left;
overflow: hidden;
font-family:"Comic Sans MS", cursive, sans-serif;
font-weight: bold;
font-size: 16px;
}

.dropdown .dropbtn {
font-size: 16px;
border: none;
outline: none;
color: white;
padding: 14px 16px;
background-color: inherit;
font-family: inherit;
margin: 0;
font-family:"Comic Sans MS", cursive, sans-serif;
font-weight: bold;
}

.topnav a:hover, .dropdown:hover .dropbtn {
background-color: red;
}

.dropdown-content {
display: none;
position: absolute;
background-color: #f9f9f9;
min-width: 160px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 1;
}
.dropdown-content a {
float: none;
color: black;
padding: 12px 16px;
text-decoration: none;
display: block;
text-align: left;
}

.dropdown-content a:hover {
background-color: #ddd;
}

.dropdown:hover .dropdown-content {
display: block;
}


form.example input[type=text] {
padding: 10px;
font-size: 17px;
border: 1px solid grey;
float: left;
width: 80%;
background: #f1f1f1;
}

form.example button {
float: left;
width: 20%;
padding: 10px;
background: #2196F3;
color: white;
font-size: 17px;
border: 1px solid grey;
border-left: none;
cursor: pointer;
}

form.example button:hover {
background: #0b7dda;
}

form.example::after {
content: "";
clear: both;
display: table;
}

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

<!---
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
!</form>

--->
<div class="bg-img">
  <form   method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" class="container1">
    <h1>Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn">Login</button>
    <p class="re">
      <a href="signup.html">New User? Create one now!!</a>
      </p>
  </form>
</div>
</body>
</html>












