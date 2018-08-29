<?php
   session_start();
?>
 
<?php    
  $username=$_POST['username'];
  $password=$_POST['password'];
  $password=md5($password);
  $conn=new mysqli("localhost","root","","registration");
  $sql="select * from users where username='$username' and password='$password' ";
  $result=$conn->query($sql);
  $row=$result->fetch_assoc();
  if($row['username']==$username && $row['password']==($password)){
    
	$_SESSION['login_user'] = $username;
    header ("Location: ../Welcome/index.php");
  }else{
    echo"failed to login";
     header('Refresh: 2; URL = ../register/home1.php'); 
  }
  
 
  $conn->close();
?>
   






