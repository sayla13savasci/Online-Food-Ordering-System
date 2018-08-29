<?php
session_start();
if(isset($_SESSION['login_user'])){
?>
<!DOCTYPE html>
<html>
    <head>
	<title>Welcome to Bill payment</title>
        <?php
include 'connection.php';

$name=$_POST["name"];
$choice=$_POST['choice'];
$quant=$_POST['quantity'];
$price=$_POST['price'];



 $sql ="select name,price from menu  where R_name='$name'";
 $result= $conn->query($sql);
 $count=0;
  while( $row = $result->fetch_assoc() ){   
  $name_price[]=$row;
  $count++;
  }
$arrlength = count($choice);
//print_r($quant);
$quantity;
$totalPrice=0;
$totalItem=0;
$j=0;
   for($i = 0;$i<$count;$i++){
   if($quant[$i]!=""){
   $quantity[$j]=$quant[$i];
   $j++;
   }
   }
   ?>
		<style>
                             
   .button{
    background-color: maroon;
    border: none;
    color: white;
    padding: 15px 30px;
    text-align: center;
    text-decoration:white;
    display: inline-block;
    font-size: 20px;
    margin:10px auto;
    float:left;
   
   }
   
    .betton{
    background-color: wheat;
    border: none;
    color:black;
    padding: 1px 1px;
    text-align: center;
    text-decoration:black;
    display: inline-block;
    font-size: 20px;
    margin:5px auto;
    float:left;
   }
    

   body {
    background-image: url("paper.jpg");  
}
h1 {
          color: darkred;
         }
              body {
          color:black;
         }

div {
    border: 1px solid white;
    margin-top: 0px;
    margin-bottom: 100px;
    margin-right: 0px;
    margin-left: 0px;
    background-color:greenyellow;
   
}

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 50%;
}

td, th {
    border: 1px darkred;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: darkred;
}
</style>
	</head>
	<body>
            <h1>TOTAL BILL</h1>
            <a href="http://localhost/Onlinefood/register/index.php" class="button">HOME</a>
            <a href="http://localhost/Onlinefood/Welcome/index.php" class="button">RESTAURANT</a>
            <a href="http://localhost/Onlinefood/Welcome/index.php" class="button">CONTACT</a>
            <a href="http://localhost/Onlinefood/Welcome/index.php" class="button">ABOUT</a>
	<p align="Right"><form  action ="logout.php" method ="POST">
            <table>
                <td></td>
                    <td><input type="submit" class="button" value="Logout"></td>
                    
                </tr>
            
            </table>
 
        </form>
		</p>
        
            
       
		<table>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>
			<?php 
			
			foreach ( $name_price as $var ) { 
			
			for($i=0;$i<$arrlength;$i++){
			if($var["name"]==$choice[$i]){
			$totalPrice=$totalPrice+ intval($var["price"])*intval($quantity[$i]);
			$totalItem=$totalItem+intval($quantity[$i]);
                         
      
			?>
			<tr>
           <td><?php echo $var["name"] ; ?></td>
		   <td><?php echo $var["price"]; ?></td>
		   <td><?php echo $quantity[$i]; ?></td>
		   </tr>
		   <?php }
		   }
		   }
                                      
            $conn=new mysqli("localhost","root","","onlinefood");   
            
            $sql2 ="select * from customer where name ='".$_SESSION['login_user']."'";
            $result1=$conn->query($sql2);
            $row = mysqli_fetch_array($result1);
            $id = $row['id']; 
            $username = $row['name'];
            $email = $row['email'];
            $password = $row['password'];
                   
            if(isset($_POST['order'])){
            $sql="INSERT INTO bill(user_id,total_price,total_quantity) VALUES('$id','$totalPrice',' $totalItem')";
            $query=$conn->query($sql);
            }
		  ?>
		  <tr>
		  <td>Total</td>
		  <td><?php echo "TK ".$totalPrice ;?></td>
		  <td><?php echo $totalItem." item";?></td>
		  </tr>
         </table>
		 <form action ="contact.php" method ="POST">
		            <table>
                <td></td>
                    <td><input type="submit" class="button" value="Confirm"></td>
                </tr>
            
            </table>
		 </form>
       
   
     	

    
        </body>
</html>
<?php
//$update= "INSERT INTO bill(username,email,password) VALUES('$username','$email','$password')";
//$conn->query($update);
}
else{
header ("Location: ../register/index.php");
}
?>