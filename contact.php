<?php
$con=mysqli_connect( 'localhost'  , 'root' , '' , 'trekking' ) ; 
    if ($con == false )
     {
      die('Error: Cannot connect');
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['email'];
    $name1=$_POST['city'];
    $name2=$_POST['subject'];
  
    if (empty($name)) {
        echo "Name is empty";
    } else {
        $sqli = "INSERT INTO contact_us VALUES (?,?,?) ";
        if($stmt=mysqli_prepare($con,$sqli)){
            mysqli_stmt_bind_param($stmt, "sss", $name, $name1,$name2);
    
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

  min-height: 873px;

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
      <a href="login.html">Login</a>
      <a href="signup.html">Sign Up</a>
    </div>
  </div>



<div class="bg-img">
  <!---<form action="/action_page.php" class="container1">--->
  <form   method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" class="container1">
    <h1>Any Problem?? Contact Us!!</h1>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <!---<label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>--->

    <label for="city"><b>City</b></label>
    <input type="text" placeholder="Enter city" name="city" required>


    <label for="subject">Subject</label><br>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:100px"></textarea><br><br>

    <button type="submit" class="btn">Submit</button>
  </form>
</div>


</body>
</html>