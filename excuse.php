<?php
echo "<br><br>Fake Excuse Notes Generator.";
$name="";
$teacher="";
$boyChecked="";
$girlChecked="";
$gender="";
$reason="";
$complement="";
$illnessChecked ="";
$illness ="";
$deathChecked="";
$victim = "";
$activityChecked="";
$activity ="";
$otherChecked="";
$other="";


if(isset($_GET['name'])){
    $name = $_GET['name'];
}
if(isset($_GET['teacher'])){
    $teacher = $_GET['teacher'];
}
if(isset($_GET['victim'])){
    $victim = $_GET['victim'];
}
if(isset($_GET['gender'])){
    switch($_GET['gender']){
        case "boy" : $boyChecked= 'checked';
                     $gender="boy";
                    break;
        case "girl" : $girlChecked= 'checked';
                     $gender="girl";
                    break;
    }
}
if(isset($_GET['reason'])){
    switch($_GET['reason']){
        case "illness" : $illnessChecked = "checked";
                        if(isset($_GET['illness'])){
                            $illness= $_GET['illness'];
                            $reason="the illness :";
                            $complement=$illness;
                        }  
                        break;
        case "death":   $deathChecked = "checked";
                        if(isset($_GET['victim'])){
                            $victim= $_GET['victim'];
                            $reason="the death of";
                            $complement=$victim;
                        }  
                        break;
        case "extra-activity":$activityChecked = "checked";
                        if(isset($_GET['activity'])){
                            $activity= $_GET['activity'];
                            $reason="an extra-activity :";
                            $complement=$activity;
                        }  
                        break;
        case "other":   $otherChecked = "checked";
                        if(isset($_GET['other'])){
                            $other= $_GET['other'];
                            $reason="the reason of ";
                            $complement=$other;
                        }  
                        break;
    }
          
    if(isset($_GET['illness'])){
        $illness = $_GET['illness'];
    }  
    if(isset($_GET['deathChecked'])){
        $deathChecked = $_GET['deathChecked'];
    }  

}

echo '<br><form method="get" action="./excuse.php">
    <label for="name">Child name </label>
    <input type="text" name="name" required value="'.$name.'">
    <br><br><label for="gender">Boy of girl</label>
    <input type="radio" name="gender" value="boy" required '.$boyChecked.'>boy
    <input type="radio" name="gender" value="girl" required '.$girlChecked.'>girl
    <br><br><label for="teacher">teacher name </label>
    <input type="text" name="teacher" required value="'.$teacher.'">
    <br><label for="reason">Reason</label>
    <br><input type="radio" name="reason" value="illness" required '.$illnessChecked.'>illness
        <input type="text" name="illness"  value="'.$illness.'">  
    <br><input type="radio" name="reason" value="death" required '.$deathChecked.'>death of
        <input type="text" name="victim"  value="'.$victim.'">
    <br><input type="radio" name="reason" value="extra-activity" required '.$activityChecked.'>activity
        <input type="text" name="activity"  value="'.$activity.'">  
    <br><input type="radio" name="reason" value="other" required '.$otherChecked.'>other
        <input type="text" name="other"  value="'.$other.'">
    <br><input type="submit" name="submit" value="submit"></form>';

echo "<br><br>Date : ".date("l d-m-Y").
                "<br><br>Hello Mrs/Mister ".$teacher.",<br><br>My ".$gender." ".$name." can not come to 
                school today because of ".$reason." ".$complement;


echo '<br><br><a href="./index.php">Return to the index</a>';
?>