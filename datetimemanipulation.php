<?php 
    $title = "Date & Time Manipulations";
    include 'includes/header.php'  
?>

<h1><?php echo $title ?></h1>

<?php

    $datenow = getdate();
    echo "Today's Date: <br/>";
    echo $datenow['mday'] . '<br/>';
    echo $datenow['mon'] . '<br/>';
    echo $datenow['year'] . '<br/>';
    echo '<hr/>';
    echo "Today's Date is: " . $datenow['mday'] . '/' . $datenow['mon'] . '/' . $datenow['year'] . '<br/>';
    echo '<hr/>';
    echo time() . '<br/>';
    echo '<hr/>';

    print date("m/d/y G.i:<br>", time()) . '<br/>';
    echo '<hr/>';
    Print "Today is: ";
    echo '<hr/>';
    print date("j of F Y, \a\\t g.i a", time());
    echo '<hr/>';

?>
    
<?php require 'includes/footer.php' ?>