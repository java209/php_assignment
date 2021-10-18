<?php 
    $title = "While Loops / Do-While Loops";
    include 'includes/header.php'  
?>
   
    <h1><?php echo $title ?></h1>
    
    <h2>While Loops</h2>
    <?php
        $grade = 0;
       // Infinite Loop 
       // while($grade < 10){
       //     echo '<p>I Am Less Than 10</p>';
       // }

       //Pre-Condition Loop 
       while($grade < 10){
        echo '<p>While Loop is Less Than 10</p>';
        $grade++; 
       }

       echo 'EXIT LOOP';
       echo '<hr/>';
    ?>


    <h2>Do-While Loops</h2>
    <?php
        //Post-Condition Loop
        $grade = 0;
        do{
            echo '<p>I Am Do While Loop</p>';
            $grade++; 
        }while($grade < 10);

        echo 'EXIT LOOP';
        echo '<hr/>';
    ?>
    
<?php require 'includes/footer.php' ?>