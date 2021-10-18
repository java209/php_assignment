<?php 
    $title = "Functions";
    include 'includes/header.php'  
?>

    <h1><?php echo $title ?></h1>

    <?php
    //defining functions
    function writeMessage(){
        echo "You are really a nice person <br/>";
        echo '<hr/>';
    }
    //calling a function
    writeMessage();

    //functions with paramenter
    function addfunction($num1, $num2){
        $sum = $num1 + $num2;
        $num2 = $num1 + 3;
        echo "The sum of $num1 and $num2 is: $sum <br/>";
        echo '<hr/>';
    }

    function changenum(&$num){
        $num = $num + 10;
    }

    function returnproduct($num1, $num2){
        $prod = $num1 * $num2;
        return $prod;
    }
//calling functions
    $num = 86;
    addfunction(15,12);
    addfunction(15,90);
    addfunction(15,$num);

    changenum($num);
    echo $num . '<br/>';

    $return_value = returnproduct(18, 742);
   echo "<p>18 multiply by 742 is: $return_value</p>" . '<br/>';
    echo '<hr/>';

    ?>
    
<?php require 'includes/footer.php' ?>