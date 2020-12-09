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
  $name = $_POST['email'];
  $name1=$_POST['psw'];
  if (empty($name)) {
      echo "Name is empty";
  } else {
  $sql="select * from register where Email='$name' and user_password='$name1' ";
  $result=mysqli_query($con,$sql);
  if(mysqli_num_rows($result)>0){
     //echo '<script type ="text/javascript"> alert("LOGIN SUCESSFULLY")</script>';
    header("location: ex.html");
   // echo '<script> alert("LOGIN SUCESSFULLY")</script>';
  }
  else{echo "invalid";}

 }
 /*
    $sqli = "select username from  register  where Email=? and  user_password=?";
                           //$rtt = mysqli_query($con, $sqli);
                           if($stmt=mysqli_prepare($con,$sqli)){

                            mysqli_stmt_bind_param($stmt, "ss",$name,$name1);

                            if(mysqli_stmt_execute($stmt)){
        // Redirect to login page
                          mysqli_stmt_bind_result($stmt, $name,$name1);
                          mysqli_stmt_fetch($stmt);
                            if (mysqli_num_rows($rtt) > 0) {
                            
          
                            }


        
        //header("location: ex.html");
      
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
  */
  //yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy
  
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
  <!---<form action="/action_page.php" class="container1">
    <h1>Login</h1>
--->
    <form   method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" class="container1">
    <h1>Login</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" class="btn">Login</button>
    <p class="re">
      <a href="signup.php">New User? Create one now!!</a>
      </p>
  </form>
</div>


</body>
</html>
