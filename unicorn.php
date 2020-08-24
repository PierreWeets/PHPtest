<?php
echo "<br><br>11.2 Ternary exercises.";
$humanChecked="";
$catChecked="";
$unicornChecked="";
$imageRef ="";

if(isset($_GET['species'])){
    switch($_GET['species']){
        case 'human': $humanChecked = "checked";
            $imageRef = "./img/human.gif";
            break;
        case 'cat': $catChecked = "checked";
            $imageRef = "./img/cat.gif";
            break;
        case 'unicorn':$unicornChecked = "checked";
            $imageRef = "./img/unicorn.gif";
            break;
    }
    
}

echo '<br><form method="get" action="./unicorn.php">
    <br><br><label for="species">Are you a human, a cat or a unicorn ?"</label>
    <input type="radio" name="species" value="human" required '.$humanChecked.'>human
    <input type="radio" name="species" value="cat" required '.$catChecked.'>cat
    <input type="radio" name="species" value="unicorn" required '.$unicornChecked.'>unicorn
    <br><input type="submit" name="submit" value="submit"></form>';

echo ($imageRef != "") ? '<br><img src='.$imageRef.'>' : "";//test if image is set then display it
echo '<br><a href="./index.php">Return to the index</a>';
?>