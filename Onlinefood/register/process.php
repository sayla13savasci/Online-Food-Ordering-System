<?php
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
	
    $username = $_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password2=$_POST['password2'];
    $db=new mysqli("localhost","root","","registration");
    $conn=new mysqli("localhost","root","","onlinefood");
    if(isset($_POST['register_btn'])){
		
        if($password==$password2){
            $password=md5($password);
            $sql="INSERT INTO users(fname,lname,username,email,password) VALUES('$fname','$lname','$username','$email','$password')";
            $sql1="INSERT INTO customer(name,email,password) VALUES('$username','$email','$password')";
            $query=$db->query($sql);
            $query1=$conn->query($sql1);
			if ($query) {
             header ("Location: ../register/index.php");
             } 
			 else {
             echo "Username already exist!!";
	         header('Refresh: 2; URL = ../register/index.php');
             }
        }
        else{
            echo "password doesn't match";
			header('Refresh: 2; URL = ../register/index.php');
        }
        
    }
$db->close();
?>