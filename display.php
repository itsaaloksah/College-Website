<?php

$con = mysqli_connect("localhost","root","","mydatabase") or die ("error");

$reg =$_POST['usn'];
$query = "SELECT * FROM cse where ussn='$reg' ";
$result = mysqli_query($con,$query);
$roow = mysqli_fetch_array($result);


if( $roow != 0){

echo "<center><table border=2 cellpadding=10>
<h2>Student Name:".$roow['name']."</h2><h2>Branch: Computer Science Engineering.</h2><h2>Semester: IV</h2>
<tr align=center>
	<th>USN</th>
	<th>Name</th>
	<th>Engineering Mathematics-IV</th>
	<th>Software Engineering</th>
	<th>Object Oriented Programming in Java</th>
	<th>Design and Analysis of Algorithm</th>
	<th>Data Communication</th>
	<th>Microprocessor and Microcontroller</th>
	<th>Design and Analysis of Algorithm Laboratory</th>
	<th>Microprocessor and Microcontroller Laboratory</th>
	<th>Result</th>
</tr>";
}
else{
	echo " Unable To Find USN";
}

$resultt = mysqli_query($con,$query);
while ($row = mysqli_fetch_array($resultt)) {
	echo "<tr align=center>";
	echo "<td>".$row['ussn']."</td>
		 <td> ".$row['name']."</td>
		 <td> ".$row['maths-4']."</td>
		 <td> ".$row['se']."</td>
		 <td> ".$row['oops']."</td>
		 <td>".$row['daa']."</td>
		 <td> ".$row['dc']."</td>
		 <td> ".$row['mp']."</td>
		 <td> ".$row['dal']."</td>
		 <td> ".$row['mpl']."</td>
		 <td> ".$row['result']."</td>";
	echo "</tr></table></center>";
}

?>