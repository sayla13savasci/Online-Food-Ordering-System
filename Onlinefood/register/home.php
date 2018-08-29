
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
       <div class="container">
        <div class ="header">
      
            <h2>Creat New Account</h2>
        </div>

	<form  action ="process.php" method ="POST">
            <table>
			  <tr>
                    <td>Firstname</td>
                    <td><input type="text" name="firstname" class="textInput"></td>
                </tr>
				  <tr>
                    <td>Lastname</td>
                    <td><input type="text" name="lastname" class="textInput"></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" class="textInput"></td>
                </tr>
                 <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" class="textInput"></td>
                </tr>
                 <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" class="textInput"></td>
                </tr>
                 <tr>
                    <td>Password Again</td>
                    <td><input type="password" name="password2" class="textInput"></td>
                </tr>
                 <tr>
                    <td></td>
                    <td><input type="submit" name="register_btn" value="Register"></td>
                </tr>
            
        </table>
 
        </form>
        </div>
    </body>
    
</html>

