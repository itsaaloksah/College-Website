<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Profile Page
}
?> 

<html>
<head>
<title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="loginstyle.css">
<body>
    <div class="loginbox">
    <img src="photos/avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form action="login.php" method="post">
            <p>User Name</p>
            <input type="text" name="email" placeholder="Enter User Name" required>
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" required>
            <input type="submit" name="submit" value="Login">
			
			<span><?php echo $error; ?></span>
			
              <br><a href="forgot.html">Forgot your password?</a><br>
            <a href="register.html">Don't have an account?</a>
        </form>
        
    </div>

</body>
</head>
</html>

