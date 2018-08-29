<?php
   session_start();
   if(isset($_SESSION['login_user'])){
?>
<!DOCTYPE html>
<html>
    <head>
	<title>Welcome <?php echo $_SESSION['login_user'];?></title>
           <meta charset="utf-8">

       <style>
           table {
    
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
    body {
    background-image: url("paper.jpg");  
}
h1 {
          color:darkred;
         }
              body {
          color:black;
         }
    .button{
    background-color: maroon;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration:white;
    display: inline-block;
    font-size: 20px;
    margin:10px auto;
    float:left;
    
   

    }

div {
    border: 1px  lightsalmon;
    margin-top: 0px;
    margin-bottom: 50px;
    margin-right: 0px;
    margin-left: 0px;
    
   
   
}

div.gellery {
    margin: 0px 0px 0px 0px;
    border: 1px lightsalmon;
    width: 200px;
}
div.new {
    margin: 5px;
    border: 1px solid white;
    width: 500px;
    
}
   

div.gallery {
    margin: 5px;
    border: 1px lightsalmon;
    float: left;
    width: 320px;
}

div.gallery:hover {
    border: 1px solid darkred;
}


div.gallery img {
    width: 100%;
    height: auto;
}
div.desc {
    padding: 15px;
    text-align: center;
}
</style>
    </head>
    <body>
        
        <h1>RESTAURANT</h1>
             <a href="http://localhost/Onlinefood/register/index.php" class="button">HOME</a>
            <a href="index.php" class="button">RESTAURANT</a>
            <a href="http://localhost/Onlinefood/register/contact.php" class="button">CONTACT</a>
            <a href="http://localhost/Onlinefood/register/about.php" class="button">ABOUT</a>
            <a href="logout.php" class="button">Logout</a>

<form  action ="menu.php" method ="GET">  
<?php

$conn=new mysqli("localhost","root","","onlinefood");

$sql ="select * from restaurant";
$result=$conn->query($sql);
echo " <table>
            <tr>
             
                <th>Restaurant Name</th>
                <th>Address</th>
                <th>Speciality</th>
                <th>Brand</th>
                <th>Branch Name</th>
            </tr>";
        
        
    while($row = $result->fetch_assoc()){        
        
           ?>
        <tr>
           <td><?php echo $row["R_name"]; ?></td>
           <td><?php echo $row["address"]; ?></td>
           <td><?php echo $row["speciality"]; ?></td>
           <td><?php echo $row["brand"]; ?></td>
           <td><?php echo $row["branch_name"]; ?><input type="submit" name="R_name" value="<?php echo $row["R_name"]; ?>"></td>
           
        </tr>        
       <?php 
      }   
        echo "</table>";
        ?>
   
         </form>

    </body>  
</html>
<?php 
}
else{
header ("Location: ../register/index.php");
}
?>


