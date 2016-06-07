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

       <div class = "w3-container">
        <h1><span class="label label-default">Alumni</span></h1>
  
      </div>
      <br>
      <div class = "container">
          <a href="login.php" class="btn btn-primary" role="button">Log in</a>&nbsp; 
          <a href="register.php" class="btn btn-success" role="button">Register</a><br><br>
      
     <div class="row-md-4">
        <div class= "col-md-4">
          <!--<a href="#" class="thumbnail"><img src="img/4.jpg" alt="Baby"></a> -->
            <div class="well">
              <header class="w3-container w3-teal">Giving Back</header>
              <p>
                                 <a href="#">Seminars</a><br>
              <a href="#">Events</a><br>
              <a href="#">Campus Life Reviews</a><br>
                       <a href="#">Helping Hand</a><br>
    </p>
            </div>
        </div>
        <div class= "col-md-4">
          <!--<a href="#" class="thumbnail"><img src="img/7.jpg" alt="Baby"></a> -->
              <div class="well">
                <header class="w3-container w3-teal">Information & Services</header>
                  <p>
                                     <a href="#">Update Information</a><br>
              <a href="#">Convocation</a><br>
              <a href="#">Reunion</a><br>
                       <a href="#">Forms & Transcipts</a><br>
    
                  </p>
            </div>
        
        </div>
      
        
      </div>
      </div>
      <br><br><br><br><br><br><br>
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