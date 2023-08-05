<?php 
	$conn = mysqli_connect("localhost", "root", "","alumni");?>
	 
         
    
    <?php
	// Define the query:
	$pid=$_POST['names'];
	$fname=$_POST['gender'];//SADIQ'
	$lname=$_POST['phone'];
	$oname=$_POST['email'];
    $sex=$_POST['school'];
	$state=$_POST['dept'];
	
    $dob=$_POST['cgpa'];
    $homeadd=$_POST['graduation'];
    $phonenum=$_POST['work'];
    $nok=$_POST['position'];
    $kinadd=$_POST['passwords'];
//education info
    
	$cof=$_POST['repasswords'];
	$we=$_POST['address'];
	
	
	
 
	
	$pid = mysqli_real_escape_string($conn,$pid);
	//$busn= mysqli_real_escape_string($conn,$busn);
	$fname= mysqli_real_escape_string($conn,$fname);
$lname= mysqli_real_escape_string($conn,$lname);
$oname= mysqli_real_escape_string($conn,$oname);
$sex= mysqli_real_escape_string($conn,$sex);
$state= mysqli_real_escape_string($conn,$state);

$dob= mysqli_real_escape_string($conn,$dob);
$homeadd= mysqli_real_escape_string($conn,$homeadd);
$phonenum= mysqli_real_escape_string($conn,$phonenum);
$nok= mysqli_real_escape_string($conn,$nok);
$kinadd= mysqli_real_escape_string($conn,$kinadd);
//education string escape

$cof= mysqli_real_escape_string($conn,$cof);
$we= mysqli_real_escape_string($conn,$we);



    
    

	$query = "INSERT INTO alumas (id, names, gender, phone, email, school, dept, cgpa, graduation, work, position, passwords, repasswords, address)
	VALUES(null, '$pid', '$fname', '$lname', '$oname', '$sex', '$state','$dob', '$phonenum','$homeadd','$nok','$kinadd', '$cof', '$we')";
				//echo $query;
	// Execute the query:
	if (@mysqli_query($conn, $query)) 
	{
		echo "<script>alert('Registration Successful');
			window.location.href = 'index.php';
		</script>";

	}
	else 
	{
		echo "<script>alert('User already exist');
			window.location.href = 'contact.php';
		</script>";
	}
	mysqli_close($conn); // Close the connection.		
?>
         
    
