<html>
    <head>
	<title>Welcome <?php echo  $_SESSION['login_user']?></title>
        <?php
include 'connection.php';
  $restaurant= $_GET['R_name'];
        ?>
		<style>
 
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
    border: 10px darkred;
    margin-top: 0px;
    margin-bottom: 5px;
    margin-right: 0px;
    margin-left: 0px;
    
   
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
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 52%;
}

td, th {
    border: 1px darkred;
    text-align: left;
    padding:10px;
}

tr:nth-child(even) {
    background-color: maroon;
}




div {
    border: 1px solid darkred;
    margin-top: 0px;
    margin-bottom: 5px;
    margin-right: 0px;
    margin-left: 0px;
   
   
}
div.gellery {
    margin: 0px 0px 0px 0px;
    border: 1px solid darkred;
    width: 200px;
}
div.new {
    margin: 5px;
    border: 1px solid white;
    width: 500px;
    
}
   

div.gallery {
    margin: 5px;
    border: 1px solid maroon;
    float: left;
    width: 300px;
}

div.gallery:hover {
    border: 1px solid darkred;
}


div.gallery img {
    width: 70%;
    height: auto;
}
div.desc {
    padding: 15px;
    text-align: center;
}
</style>

	</head>
	<body>
          
            <h1> <?php echo $restaurant; ?></h1>
          
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



<?php

$conn=new mysqli("localhost","root","","onlinefood");
$R_name = $_GET['R_name'];
$sql ="select * from restaurant where R_name = R_name ";
$result=$conn->query($sql);
echo " <table>
            <tr>
             
                <th>Restaurant Name<th>
                <th>Address</th>
                <th>Speciality</th>
                <th>Brand</th>
                <th>Branch Name</th>
            </tr>";
   while($row=$result->fetch_assoc())
        {
          echo "<tr>
                <td> " . $row["R_name"]."  </td>
                <td> " . $row["address"]."  </td>
                <td> " . $row["speciality"]."  </td>
                <td> " . $row["brand"]."  </td>
                <td> " . $row["branch_name"]."  </td>
                <td>"."<a href=menu.php?id='".$row['id']."'>Menu</a>"."</td>
            </tr>"; 
        }
        echo "</table>";
		
?>
</body>
</html>

