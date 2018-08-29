<?php
   session_start();   
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
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
    header("Location:index.php"); 
  }
  
 
  $conn->close();
  }
?>




<!DOCTYPE html>
<html>
    <head>
	<title>Welcome</title>
   <meta charset="utf-8">
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
      
 
        body{
   background-image: url("paper.jpg");
   }

input[type=text]:focus {
    width: 50%;
}
      
      
      div.absolute {
    position: absolute;
    right: 0px;
    width: 100px;
    height: 120px;
    border: 3px red;
}
      body{
          background-color: darkred;
      }
 
      .button{
    background-color:darkred;
    border: none;
    color: white;
   
    text-align: center;
    text-decoration:white;
    display: inline-block;
    font-size: 14px;
    margin:10px auto;
    cursor: right-side;
    float:left;
   
}

ul {
    list-style-type: none;
    background-color:darkred;
}

li a {
    display: block;
    color: white;
    text-decoration: none;
}

/* Change the link color on hover */
li a:hover {
    background-color:#555;
    color: white;
}

  h2{
  color:darkred;
  }


  h1{
  color:darkred;
  }
  h3{
      color:darkred;
  }
  p{
      color:orangered;
  }
  body{
  color:darkred;
  }
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 5;
      border-radius: 0;
      background-color:darkred;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: white;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
</style>
</head>
<body>
    <div class="container">

<h2><i class="fa fa-envira" style="font-size:48px;color:olivedrab"></i>FOOD BAZAR<h2>
 
        </div>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
       
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      
	
    </div>
	
    <div class="collapse navbar-collapse" id="myNavbar">
	
      <ul class="nav navbar-nav">
	
              <ul class="nav navbar-nav navbar-left">
        
             <form  action ="index.php" method ="POST">
            <table>
               <input type="submit" class="button" value="HOME"> 
            </table>
 
        </form>
      </ul>
          
           <ul class="nav navbar-nav navbar-left">
         <form  action ="restaurant.php" method ="POST">
            <table>
               <input type="submit" class="button" value="RESTAURANT"> 
            </table>
         </form>
      </ul>
              <ul class="nav navbar-nav navbar-left">
        
             <form  action ="gallery.php" method ="POST">
            <table>
               <input type="submit" class="button" value="GALLARY"> 
            </table>
 
        </form>
      </ul>
              <ul class="nav navbar-nav navbar-left">
        
             <form  action ="about.php" method ="POST">
            <table>
               <input type="submit" class="button" value="ABOUT"> 
            </table>
 
        </form>
      </ul>

          <ul class="nav navbar-nav navbar-left">
        
             <form  action ="contact.php" method ="POST">
            <table>
               <input type="submit" class="button" value="CONTACT"> 
            </table>
 
        </form>
      </ul>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        
        
           
                <a href="home.php" style="color:white;font-size:15px;top:-10px;">SIGN UP</a><br />
            
 
      </ul>
        <ul class="nav navbar-nav navbar-right">;
      
          <table>
         
                 
              <td>  <i class="fa fa-user" style="font-size:25px;color:white"></i><a href="#" style="color:white;font-size:15px;top:-10px;" data-toggle="modal" data-target="#myModal">SIGN IN</a><br /></td>
    
            
            </table>
        </ul>
    </div>
  </div>
</nav>
    
  <!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <form class="form-horizontal" action="" method="post">
            <!-- Modal content-->
            <form class="form-horizontal" action="" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Login form</h4>
                </div>
                <div class="modal-body"> 
                    <div class="form-group">
                        <label class="control-label col-sm-4" for="text">User Name:</label>
                        <div class="col-sm-8">
                            <input type="text" name="username" class="textInput"></br>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-4" for="text">Password:</label>
                        <div class="col-sm-8">
                            <input type="password" name="password" class="textInput"></br>
                        </div>
                    </div> 
                </div>

                <div class="modal-footer">
                    <input type="submit" name="save_btn" class="btn btn-info" value="Login" />
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>                                
            </div>
        </form>
    </div>

    </div>
   
  

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
 
    <!-- Wrapper for slides -->
    <div class="container">
    <div class="carousel-inner" role="listbox">
      <div class="item active">
            <form  action ="search.php" method ="POST">
              <input type="text" name="valueToSearch" placeholder="Search">
              <input type="submit" name="btn" value=">>">
         
            </form>
        <img src="food.jpg" alt="Image">
        <div class="carousel-caption">
          
            <h2>...</h2>
        
           
          
        </div>      
      </div>

      <div class="item">
            <form  action ="search.php" method ="POST">
              <input type="text" name="valueToSearch" placeholder="Search">
              <input type="submit" name="btn" value=">>">
         
            </form>
          
        <img src="fff.jpg" alt="Image">
        <div class="carousel-caption">
          <h2>...</h2>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
</div>
  
<div class="container text-center">    
  <h3>VIDEOS</h3><br>
  <div class="row">
    <div class="col-sm-4">
     <video width="330" height="240" controls>
  <source src="movie.mp4" type="video/mp4">
  <source src="movie.ogg" type="video/ogg">
</video>
    </div>
    <div class="col-sm-4"> 
     <video width="330" height="240" controls>
  <source src="movie1.mp4" type="video/mp4">
  <source src="movie1.ogg" type="video/ogg">
</video>    
    </div>
    <div class="col-sm-4">
     <video width="330" height="240" controls>
  <source src="movie2.mp4" type="video/mp4">
  <source src="movie2.ogg" type="video/ogg">
</video>
      </div>
 
    </div>
  </div>
</div><br>

<footer class="container-fluid text-center">
   
    <div class="carousel-caption">
          <h2>WELCOME TO OUR WEBSITE</h2>
            <h2>Hungry?</h2>
            
           <h2>Order Now From FOOD BAZAR</h2>
           <h3> Choose Your Restaurant</h3>
        </div> 
  <p></p>
</footer>
</body>   
</html>

