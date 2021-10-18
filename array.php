<?php 
    $title = "Arrays and Printouts";
    include 'includes/header.php'  
?>

    <h1><?php echo $title ?></h1>
    <?php

    //declaring variable
        $num = 3;
    // array
        $numbers = array(1,2,3,4,5,6,7,8,9,10);
        
        echo "<p>The number at position 5 is: $numbers[5]</p>";
        echo '<hr/>';
        echo "<p>The number at position 9 is: $numbers[9]</p>";
        echo '<hr/>';
        $size = count($numbers);
        echo "<p>Array Number is size: $size</p>";
        echo '<hr/>';
        echo "<p> The list of numbers can be found in the arrays: <p/>";
       for($count = 0; $count < $size; $count++ ){
           echo "<p>$numbers[$count]</p>";
       }
       echo '<hr/>';

      

    ?>
    
    <?php require 'includes/footer.php' ?>