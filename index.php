<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CSE471 Project</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="css/w3css.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]> 
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <!--Header-->
  <?php

    include_once('header2.php');
    echo "<br>";
    include_once('header.php');

  ?>
    <br><br>
    <div class="container">
      <div class="row">
     <div class= "col-sm-8">
      

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox"  width="720" height="480">
          <div class="item active"  width="720" height="480">
            
              <img src="img/15.jpg" alt="Chania"  width="720" height="480" >
            
            
          </div>

          <div class="item">
            <img src="img/13.jpg" alt="Chania" width="720" height="480">
          </div>
        
          <div class="item">
            <img src="img/9.jpg" alt="Flower" width="720" height="480">
          </div>

          <div class="item">
            <img src="img/14.jpg" alt="Flower" width="720" height="480">
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


    <div class= "w3-grey col-sm-4"> 
          <ul class="nav nav-pills">
          <li><a href="#"><font face="verdana" color="black"><b>Notices</b></font></a>&nbsp;

          </li>

          <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font face="verdana" color="black"><b>News</b></font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
          <li><a href="#"><font face="verdana" color="black"><b>Events</b></font></a></li>
          </ul>

           <table class="table table-hover">
    <tbody>
      <tr>
        <td><a href="#">Deadlines</a><br></td>
      </tr>
      <tr>
        
            <td><a href="#">Examination</a><br></td>
      
        
      </tr>
      <tr>
        
            <td><a href="#">Schedule</a><br></td>
      
        
      
      </tr>
        <tr>
        
            <td><a href="#">Important Bulletin</a><br></td>
      
        
      </tr>
      <tr>
        
            <td><a href="#">Admission Information</a><br></td>
      
        
      </tr>
      <tr>
        <td><br></td>
      </tr>
    </tbody>
  </table>

    </div>
  </div>
    </div>


      <br><br><br><br>
      <div class = "container">
     <div class="row-md-4">
        <div class= "col-md-4">
          <!--<a href="#" class="thumbnail"><img src="img/4.jpg" alt="Baby"></a> -->
            <div class="well">
              <header class="w3-container w3-teal">Academics</header>
              <p>
                <a href="#">Academic Calendar</a><br>
                <a href="#">Departments and Schools</a><br>
                <a href="#">Undergraduate Programs</a><br>
                <a href="#">Graduate Programs</a><br>
                <a href="#">Research and Development</a><br>
                
              </p>
            </div>
        </div>
          <div class= "col-md-4">
            <!--<a href="#" class="thumbnail"><img src="img/5.jpg" alt="Baby"></a> -->
           <div class="well">
              <header class="w3-container w3-teal">Campus Life</header>
              <p>
                <a href="#">Events</a><br>
                <a href="#">Arts and Culture </a><br>
                <a href="#">Clubs and Recreation</a><br>
                <a href="#">On-Campus Jobs</a><br>
                <a href="#">Living on Campus</a><br>
              </p>
            </div>
         
        <br><br><br><br><br><br><br><br>
        </div>
        <div class= "col-md-4">
          <!--<a href="#" class="thumbnail"><img src="img/7.jpg" alt="Baby"></a> -->
              <div class="well">
                <header class="w3-container w3-teal">Admission Information</header>
                  <p>
                <a href="#">Undergraduate Students</a><br>
                <a href="#">Graduate Students</a><br>
                <a href="#">International Students</a><br>
                <a href="#">Tuition and Scholarship</a><br>
                
                 </p>
            </div>
        
        </div>
      
      </div>
      </div>
      <!--Footer-->
    <?php
    include_once('footer.php');
    ?>






    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>