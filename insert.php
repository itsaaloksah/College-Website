<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
if (!empty($fname) || !empty($lname) || !empty($email) || !empty($password) ||
!empty($gender) || !empty($phone)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "form";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	
	
	$connn = mysqli_connect("localhost","root","","logintable") OR die("unable to connect your login table");
	$query = ("INSERT INTO `login` (email, password) VALUES ('$email', '$password')");
	
	 mysqli_query($connn,$query);
	
	
	
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From signup Where email = ? Limit 1";
     $INSERT = "INSERT Into signup (fname, lname, email, password, gender, phone) values(?, ?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssssi", $fname, $lname, $email, $password, $gender, $phone);
      $stmt->execute();
      echo "Congratulation, You Are Registered Now";
     } else {
      echo "Someone Already Register Using This Email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>