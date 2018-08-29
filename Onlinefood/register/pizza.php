<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
     h1{
  color:darkred;
  }
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
       background-color:darkred;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="container text-center">
      <h1><i class="fa fa-envira" style="font-size:48px;color:olivedrab"></i>FOOD BAZAR</h1>      
  </div>
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
        
             <form  action ="home.php" method ="POST">
            <table>
               <input type="submit" class="button" value="SIGN UP"> 
            </table>
 
        </form>
      </ul>
         <ul class="nav navbar-nav navbar-right">
        <form action ="home1.php" method ="POST">
            <table>
               
                <td></td>
                 
                <td> <i class="fa fa-user" style="font-size:25px;color:white"></i> <input type="submit" class="button" value="SIGN IN"></td>
                </tr>
            
            </table>
 
        </form>
            
      </ul>

    </div>
  </div>
</nav>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">PIZZA HUT</div>
        <div class="panel-body"><img src="pzz1.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">BBQ CHICKEN PIZZA:400TK</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        <div class="panel-heading">PIZZA HUT</div>
        <div class="panel-body"><img src="pzz2.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">REGULAR PIZZA:350TK</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading">PIZZA HUT</div>
        <div class="panel-body"><img src="pzz3.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">CHICKEN AND BEEF PIZZA:500TK</div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">PIZZA HUT</div>
        <div class="panel-body"><img src="pzz4.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">REGYLAR CHICKEN PIZZA:300TK</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">PIZZA HUT</div>
        <div class="panel-body"><img src="pzz5.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">REGULAR BEEF PIZZA:500TK</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">PIZZA HUT</div>
        <div class="panel-body"><img src="pzz6.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">BEEF PIZZA:450TK</div>
      </div>
    </div>
  </div>
</div><br><br>

<footer class="container-fluid text-center">
  
  <form class="form-inline">Get deals:
    <input type="email" class="form-control" size="50" placeholder="Email Address">
    <button type="button" class="btn btn-danger">Sign Up</button>
  </form>
</footer>

</body>
</html>

