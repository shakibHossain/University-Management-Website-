<!DOCTYPE html>
<html>
    <head>
        <title>CSE470 Project</title>   
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">

<!--Header-->
<?php
    include_once('headerwhenloggedin.php');
?>

    </head>
    <body>
        <div class="container">
            <?php
                require 'connect.php';
            ?> 
            <h3>Know your interest in subject to be studied in university level by consulting with our AI system.</h3> 
 <!--            <h3>Questioning Level - 0</h3> <br><br>
            <!-- Shows level o questions-->
      <!--       <?php
                $questionNumber = 1;
                $sql="SELECT `question`, `Qid` FROM `question bank` WHERE `question level` = 0"; 
                $query1 = mysqli_query($con, $sql);
                while($result = mysqli_fetch_array($query1)){ 
                    $keepQid = $result['Qid']; ?> 
                    <?php echo $questionNumber . ". " .$result['question'] . "<br>";
                    $query2 = mysqli_query($con, "SELECT `ans`, `Aid_p` FROM `personal answer bank` WHERE `Qid` = $keepQid"); 
                    ?> 
                    <form action="questioninglevel01.php" method="post"> <?php
                    while($result2 = mysqli_fetch_array($query2)){ 
                                  
                        ?>
                        <input type="radio" name="question<?php echo $questionNumber ?>" value="<?php echo $result2['Aid_p']; ?>"> <?php echo $result2['ans']; echo'<br>';
                    
                    }
                    echo "<br>";           
                    $questionNumber++;
                }
            
                    ?> <br>  
                    <input type="submit" name="submit1"> 
                    <br><br><br><br>
                    </form>
  -->   
         </div>
    </body>
    
<!--Footer-->
<?php
    include_once('footer.php');
?>

</html> 

                             
                              

                            
 