<?php
$student= "";
$annotation= "";

echo "<br><br>8. School sucks! Exercise.";
if(isset($_GET['student'])){
    $student = $_GET['student'];
}
if(isset($_GET['annotation'])){
    $annotation = $_GET['annotation'];
}
// method='GET' = PHP get the parameters given with id = name parameter and values= value parameter
// action ="" then reload the current page.
echo '<form method="get" action=""> 
<label for="student">student name?</label>
<input type="text" name="student" required value="'.$student.'"><br><br>
<label for="annotation">Your annotation ?</label>
<input type="number" name="annotation" required value="'.$annotation.'"><br><br>
<input type="submit" name="submit" value="submit">
</form>';
$message="";
if(isset($_GET['annotation'])){//test if at least one parameter in the URL
    if($_GET['annotation']<=4){  // test if in the global variable , containing the parameters given in the URL, 
        $message = "<br>This work is really bad. What a dumb kid!";
    }elseif($_GET['annotation']>=5 AND $_GET['annotation']<=9){
        $message = "<br>This is not sufficient. More studying is required.";
    }elseif($_GET['annotation'] == 10){
        $message = "<br>barely enough!";
    }elseif($_GET['annotation']>=11 AND $_GET['annotation']<=14){
        $message = "<br>Not bad!";
    }elseif($_GET['annotation']>=15 AND $_GET['annotation']<=18){
        $message = "<br>Bravo, bravissimo!";
    }elseif($_GET['annotation']>=19 AND $_GET['annotation']<=20){
        $message = "<br>Too good to be true : confront the cheater!";
    } else {
        $message = "<br>invalid annotation !";
    }
    echo "<br>the student ".$_GET['student']." has the annotation ".$_GET['annotation']." and the comment : ".$message;
} //else { //create a form that send, with GET method, the content of attribute name ('age') as parameter 'age' and the content of input value as data of the parameter 
// 		//to the page 'condition.php'.
//     echo '<form method="get" action="./school.php">
//     <label for="student">student name?</label>
//     <input type="text" name="student" required><br><br>
//     <label for="annotation">Your annotation ?</label>
//     <input type="number" name="annotation" required><br><br>
//     <input type="submit" name="submit" value="submit">
//     </form>';
// }    

echo"<br><br><a href='./index.php'>Return to the index</a>"
?>