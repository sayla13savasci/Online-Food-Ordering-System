<?php
   session_start();
   if(isset($_SESSION['login_user'])){
?>
<!DOCTYPE html>
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
		</p>
            <?php 
            if(isset($_GET['R_name'])){
            ?>
         <form  action ="bill.php" method ="POST">
		 
        <?php
		
        $sql ="select * from menu  where R_name='$restaurant' ORDER BY food_type ASC";
        $result= $conn->query($sql);
        
        echo " <table>
            <tr>
	        <th>Food Type</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>";
      while($row = $result->fetch_assoc()){        
        
           ?>
        <tr>
           <td><?php echo $row["food_type"]; ?></td>
           <td><?php echo $row["name"]; ?><input id="checkbox" type="checkbox" name="choice[]" value="<?php echo $row["name"]; ?>"></td>
           <td><?php echo $row["price"]; ?><input type="hidden" name="price[]" value="<?php echo $row["price"]; ?>"></td>
           <td><input type="number" name="quantity[]" min="1" ></td>
        </tr>        
       <?php 
      }   
        echo "</table>";
        ?>
        <tr>
            <td><input type="hidden" name="name" value="<?php echo $restaurant ?>"></td>
            <td><input type="submit" name="order" value="Order"></td>
         </tr    
    </form>  


                
	 <?php
            }
            ?>
	
	</body>
    
</html>
<?php }
else {
header ("Location: ../register/index.php");
}


 ?>
