<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="header">
	<h2>Home Page</h2>
</div>
	Welcome to my project page	
<header>
      <nav>
          <ul class="_links">
              <li><a href="./home.html">Home</a></li>
              <li><a href="dashboard.html">Dashboard</a></li>
              <li><a href="./vaccine_details.html">Vaccinated</a></li>
          </ul>
      </nav>
      <a href="./register.html" class="rgst"><button>Register</button></a>
  </header>
  <hr>
  <div class="bg-image"></div>
  <div class="bg-text">
      <h1>Fight it back together....</h1>
      <h3 id="h3">Don't Hesitate Let's Vaccinate</h3>
      <p>Register now....<a href="./register.html" ><span id="link"> click here 👩‍⚕️</span></a></p>
  </div>


<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>

</body>
</html>