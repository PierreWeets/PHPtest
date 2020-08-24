<?php
echo "<br><br>11.1 Ternary exercises.";
$name="";
$manChecked="";
$womanChecked="";

if(isset($_GET['name'])){
    $name = $_GET['name'];
}
if(isset($_GET['gender'])){
    if($_GET['gender'] == "man"){
        $manChecked= 'checked';
    }
}
if(isset($_GET['gender'])){
    if($_GET['gender'] == "woman"){
        $womanChecked =  'checked';
    }
}

echo '<br><form method="get" action="./ternary.php">
    <label for="name">Your name ?</label>
    <input type="text" name="name" required value="'.$name.'">
    <br><br><label for="gender">Man or Woman?"</label>
    <input type="radio" name="gender" value="man" required '.$manChecked.'>man
    <input type="radio" name="gender" value="woman" required '.$womanChecked.'>woman
    <br><input type="submit" name="submit" value="submit"></form>';

if(isset($_GET['name'])){//test if at least one parameter in the URL
$message = ($_GET['gender'] == "man") ? "<br>Hello Sir ".($_GET['name']) : "<br>Hello Lady ".($_GET['name'])  ;
echo $message;
}

echo '<br><a href="./index.php">Return to the index</a>';
?>