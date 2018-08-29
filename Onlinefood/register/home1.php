<?php
   session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <meta charset="UTF-8">
        <title>LOGIN PAGE</title>
	<link rel="stylesheet"type="text/css"href="style.css">
 
    </head>
   
    <body>
        <div class="header">
            <h1>Log In</h1>
        </div>
        
	<form action="loginprocess.php" method="POST">
            <table>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" class="textInput"></td>
	        </tr>
 
     
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" name="textInput"></td>
	        </tr>
           
                <tr>
                    <td><input type="submit" name="btn" value="Login"></td>
	        </tr>
            </table>
        </form>
        
        
    </body>
</html>
