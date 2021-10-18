<?php 
    $title = "Switch Statements";
    include 'includes/header.php'  
?>

    <h1><?php echo $title ?></h1>
    <?php
        $grade = 'F';

        switch($grade){
            case 'A':
                echo '<h2 style="color:green"> You Are A SUPERSTAR</h2>';
                break;
            case 'B':
                echo '<h2 style="color:blue"> You Did WELL</h2>';
                break;
            default:
                echo '<h2 style="color:red"> Better Luck Next Time</h2>';
                echo '<hr/>';
                break;
        }
    ?>

<?php require 'includes/footer.php' ?>