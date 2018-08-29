<?php
   session_start();
?>
 
<?php    
  $valueToSearch=$_POST['valueToSearch'];
  $conn=new mysqli("localhost","root","","onlinefood");
  $sql="select * from menu where food_type='$valueToSearch'";
  $result=$conn->query($sql);
  echo " <table>
            <tr>
                
                <th>Restaurant Name</th>
                <th>Food Name</th>
                <th>Price</th>
              
            </tr>";
   while($row=$result->fetch_assoc())
        {
          echo "<tr>
                <td> " . $row["R_name"]."  </td>
                <td> " . $row["name"]."  </td>
                <td> " . $row["price"]."  </td>
                    
                
            </tr>"; 
        }
        echo "</table>";
  
 
  $conn->close();
?>


<!DOCTYPE html>
<html>
    <head>
	<title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
          color: darkred;
         }
     body {
          color:darkred;
         }
      body {
    background-image: url("paper.jpg");
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
    cursor: right-side;
    float:left;
   
}
</style>
       
    </head>
    <body

    </body>
    
</html>



