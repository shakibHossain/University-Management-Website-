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
        <h1><span class="label label-default">Frequently Asked Questions</span></h1>
        <br>
  
      <div class = "w3-container">
        <div class="w3-container w3-margin-64 w3-sand">
          <p>
            <a href="#">Why choose (UniversityName)?</a><br>
            <a href="#">How to apply?</a><br>
            <a href="#">When to apply?</a><br>
            <a href="#">How to decide on a course or department?</a><br>
            <a href="#">Are there any extra curricular activities?</a><br>
            
            <br>
            <br>
            
          </p>
            
        </div>
        
      </div>
      <br><br><br><br>
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