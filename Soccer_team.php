<?php
echo "<br><br>6 & 7 The Girl Soccer team.";
$name="";
$age="";
$manChecked="";
$womanChecked="";

if(isset($_GET['name'])){
    $name = $_GET['name'];
}
if(filter_var(isset($_GET['age']),FILTER_VALIDATE_INT)){//test if the existing value $_GET['age'] is a integer
    $age = $_GET['age'];
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
        
echo '<br><form method="get" action="./Soccer_team.php">
    <label for="name">Your name ?</label><input type="text" name="name" required value="'.$name.'">
    <br><br><label for="age">Your age ?</label><input type="number" name="age" required value="'.$age.'">
    <br><br><label for="gender">Man or Woman?"</label><input type="radio" name="gender" value="man" required '.$manChecked.'>man
    <input type="radio" name="gender" value="woman" required '.$womanChecked.'>woman
    <br><input type="submit" name="submit" value="submit"></form>';

if(! empty($_GET)){//test if at least one parameter in the URL
    $message = "<br>Sorry you don't fit the criteria.";
    echo "<br>Hello ".$_GET['name'];
    if($_GET['age']>= 21 AND $_GET['age']< 41 AND $_GET['gender'] == "woman"){  // test if in the global variable , containing the parameters given in the URL, 
        $message = "<br>welcome to the team !";
    }
    echo $message;
}


echo '<br><a href="./index.php">Return to the index</a>';
?>