<!DOCTYPE html>
<html lang="en">
<head>
  <title>contact</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
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
    float:left;
    
   

    }
</style>
<body>
    <div class="container">
  <h2>INFORMATION</h2>
   
   
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
           
</div>
       
       <form  action ="pay.php" method ="POST">
            <table>
                
                 <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" class="textInput"></td>
                                
                </tr>
                 <tr>
                    <td>Address</td>
                    <td><input type="text" name="address" class="textInput"></td>
                                 
                </tr>
	        <tr>
                    <td>Phone No.</td>
                    <td><input type="text" name="phone" class="textInput"></td>
                                 
                </tr>
		
                <tr>
                    <td>Payment System</td>
                    <td><input type="text" name="choice" class="textInput"></td
                     
                 <tr>
                    <td></td>
                    <td><input type="submit" name="btn" value="Submit"></td>
                </tr>
            
        </table>
 
        </form>


</body>
</html>
