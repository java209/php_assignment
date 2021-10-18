<?php 
    $title = "For Loops";
    include 'includes/header.php'  
?>
  
    <h1><?php echo $title ?></h1>
   
    <?php
        for($count = 0; $count < 15; $count++){
            echo '<p>Let us Count</p>';
        }
        echo '<hr/>';
        for($count =0; $count < 15; $count++){
            echo "<p>The count is: $count</p>";
        }
        echo '<hr/>';
    ?>
    
<?php require 'includes/footer.php' ?>