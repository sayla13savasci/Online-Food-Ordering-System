<<?php
   session_start();
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

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
      
 
  * {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
      
      
      
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
      color:olivedrab;
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

          <img src="paper.jpg" alt="Image">
        <div class="carousel-caption">

<table id="myTable">
  <tr class="header">
    <th style="width:60%;">RESTAURANT</th>
    <th style="width:40%;">AREA</th>
  </tr>
  <tr>
      <form  action ="jeans.php" method ="POST">
      <td> <input type="submit" name="R_name" value="GLORIA JEANS"></td>
      </form>
    <td>DHANMONDI</td>
  </tr>
  <tr>
      <form  action ="pizza.php" method ="POST">
    <td><input type="submit" name="R_name" value="PIZZA HUT"></td>
      </form>
    <td>DHANMONDI,SHANKOR</td>
  </tr>
  <tr>
     <form  action ="pasta.php" method ="POST">
    <td><input type="submit" name="R_name" value="PASTA STATE"></td>
      </form>
    <td>DHANMONDI15</td>
  </tr>
  <tr>
     <form  action ="delicious.php" method ="POST">
    <td><input type="submit" name="R_name" value="DELICIOUS"></td>
      </form>
    <td>SHAMOLI</td>
  </tr>
  <tr>
     <form  action ="foodbook.php" method ="POST">
    <td><input type="submit" name="R_name" value="FOOD BOOK"></td>
      </form>
    <td>BANANI</td>
  </tr>

</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
           
          
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
    </div>
  </div>
</div><br>

<footer class="container-fluid text-center">
   
    <div class="carousel-caption">
        
          
        
        </div> 
  <p></p>
</footer>
</body>   
</html>

