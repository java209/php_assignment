<?php 
    $title = "String Manipulations";
    include 'includes/header.php'  
?>
   
    <h1><?php echo $title ?></h1>

    <?php
    
    // Concatenate strings
        $phrase1 = "Student who came late";
        $phrase2 = "in class, should stand in the principal office";
        $name = "Javannie Wright<br/>";
        echo $phrase1 ." ". $phrase2;
        echo '<br/>';
        echo '<hr/>';
                
        //String transformation
        echo 'Uppercase first letter: ' .ucfirst($name).'<br/>';
        echo 'Uppercase first letter of each word: ' .ucwords($name).'<br/>';
        echo 'Uppercase all letter: '. strtoupper($name).'<br/>';
        echo 'Lowercase all letter '. strtolower($name).'<br/>';
        echo '<hr/>';
        echo 'Repeat String:<br/> ' . str_repeat($name,10) .'<br/>';
        echo 'Repeat String All Uppercase:<br/> ' . strtoupper(str_repeat($name,10)) .'<br/>';
        echo 'Repeat String All Lowercase:<br/> ' . strtolower(str_repeat($name,10)) .'<br/>';
        echo '<hr/>';
        echo 'Get a substring: ' . substr($name, 2, 15). '<br/>';
        echo '<hr/>';
        echo '<br/>Get a Position of letter W: ' . strpos($name, 'W'). '<br/>';
        echo '<hr/>';
        echo 'Find Character "J": ' . strchr($name, 'J');
        echo 'Find Character "e": ' . strchr($name, 'e');
        echo 'Find Character "g": ' . strchr($name, 'g');
        echo 'Find Character "v": ' . strchr($name, 'v');
        echo '<hr/>';
        echo 'Find Length of String: ' . strlen($name) . '<br/>';
        echo '<hr/>';
        echo 'Without Trim: '. "A" . " B C D " . "E" . '<br/>';
        echo 'Trim spaces on both sides: ' . "A" . trim(" B C D") . "E" . '<br/>';
        echo 'Trim spaces oton left sides: ' . "A" . ltrim(" B C D") . "E" . '<br/>';
        echo 'Trim spaces to right sides: ' . "A" . rtrim(" B C D") . "E" . '<br/>';
        echo '<hr/>';
        echo 'Replace string with another: '. str_replace("stand", "sit", $phrase2) . '<br/>';
        echo '<hr/>';
    ?>
    
<?php require 'includes/footer.php' ?>