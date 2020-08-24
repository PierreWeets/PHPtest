<?php
$student= "";
$annotation= "";

echo "<br><br>9. School sucks! Exercise with the 'Switch' structure";
if(isset($_GET['student'])){
    $student = $_GET['student'];
}
if(isset($_GET['annotation'])){
    $annotation = $_GET['annotation'];
}

echo '<form method="get" action="./schoolbis.php">
<label for="student">student name?</label>
<input type="text" name="student" required value="'.$student.'"><br><br>
<label for="annotation">Your annotation ?</label>
<input type="number" name="annotation" required value="'.$annotation.'"><br><br>
<input type="submit" name="submit" value="submit">
</form>';

if(isset($_GET['annotation'])){//test if at least one parameter in the URL
    switch($_GET['annotation']){  // test if in the global variable , containing the parameters given in the URL, 
        case 0:
        case 1:
        case 2:
        case 3:    
        case 4:$message = "<br>This work is really bad. What a dumb kid!";
                break;
        case 5:
        case 6:
        case 7:        
        case 8:        
        case 9:$message = "<br>This is not sufficient. More studying is required.";
                break;
        case 10:$message = "<br>barely enough!";
                break;
        case 11:
        case 12:        
        case 13:  
        case 14: $message = "<br>Not bad!";
                break;
        case 15:
        case 16:                 
        case 17:            
        case 18: $message = "<br>Bravo, bravissimo!";
                break;
        case 19:                 
        case 20:$message = "<br>Too good to be true : confront the cheater!";
                break;    
        default : $message = "<br>only value from 0 & 20";     
    }
    echo "<br>the student ".$_GET['student']." has the annotation ".$_GET['annotation']." and the comment : ".$message;
} 

echo"<br><a href='./index.php'>Return to the index</a>"
?>