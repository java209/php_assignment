<?php 
    $title = "If Statements";
    include 'includes/header.php'  
?>
 
    <h1><?php echo $title ?></h1>
    <?php

      $grade = 50;

    if($grade >= 50) {
        echo '<h2 style="color:green">You have PASSED!!</h2>';
        echo '<hr/>';
    }
    else {
        echo '<h2 style="color:red">You have FAILED</h2>';
        echo '<hr/>';
    }
    $grade = 'A';
    //If-Else If-else
    if($grade == 'A'){
        echo '<h2 style="color:green"> You Are A SUPERSTAR</h2>';
        echo '<hr/>';
    }
    elseif ($grade == 'B') {
        echo '<h2 style="color:blue"> You Did WELL</h2>';
        echo '<hr/>';
    }
    else{
        echo '<h2 style="color:red"> Better Luck Next Time</h2>';
        echo '<hr/>';
    }
    ?>

<?php require 'includes/footer.php' ?>