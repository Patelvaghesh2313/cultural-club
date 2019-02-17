<?php
		
			$email=$_POST['Email'];
			$passw=$_POST['pwd1'];
			$passw1=$_POST['pwd2'];
		
		$host="localhost";
			$dbUsername="root";
			$dbpassword="";
			$dbname="cultural";
			$conn=new mysqli($host,$dbUsername,$dbpassword,$dbname); //create a connection with DB
	if($_SERVER['REQUEST_METHOD']=='POST')
	{
		
		if($_POST['pwd1']!=$_POST['pwd2'])
		{
			echo "Please Enter Same Password and Confirm Password";			
			$sql="INSERT INTO signup(Email,Password) VALUES('$email','$passw')";
			
			if($conn->query($sql) === TRUE)
			{
				$_SESSION['message'] = 'Registration Sucessfully, Added To The DB';
				//header("location:/Login.html");
			}
			else
			{
				$_SESSION['message']="User Could Not Adder To The DB";
			}
		}
		
		else
		{
				$sql="INSERT INTO signup(Email,Password) VALUES('$email','$passw')";
			
			if($conn->query($sql) === TRUE)
			{
				$_SESSION['message'] = 'Registration Sucessfully, Added To The DB';
				header("location:/web/Login.html");
			}
			else
			{
				$_SESSION['message']="User Could Not Adder To The DB";
			}
		
		}
		
	}
	
?>