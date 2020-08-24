<?php
// 1.1 Clean your room Exercise 
Echo "1.1 Clean your room  :Exercise";
function cleanup_room(){
    echo "<br>Cleaning the room...";
};
$possible_states = Array("health hazard","filthy","dirty","clean","immaculate");
$room_is_filthy = false;
$room_filthiness = $possible_states[4];

switch($room_filthiness){
    case "health hazard" : echo "<br>Yuk, Room is health hazard : let's clean it up !"; break;
    case "filthy" : echo "<br>Yuk, Room is filthy : let's clean it up !"; break;
    case "dirty" : echo "<br>Yuk, Room is dirty : let's clean it up !"; break;
    case "clean":
    case "immaculate" :  echo "<br>Nothing to do, room is neat."; break;
    default :     echo "<br>Let see if clean .";
} 

if( $room_is_filthy == false ){
	echo "<br>Yuk, Room is dirty : let's clean it up !";
	cleanup_room();
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
}

// 2. "Different greetings according to time" Exercise

//$now = time() ; // How to get the current time in PHP ? Google is your friend ;-)
echo "<br><br>2. Different greetings according to time : Exercise";
if (isset($_GET['name'])) {// test if in the global variable , containing the parameters given in the URL, 
							// exists the parameter 'name'
	echo"<br>Hello ".$_GET['name'].":";
}
echo "<br>current time :".date("Y/m/d H:i:s");
// Test the value of $now and display the right message according to the specifications.
if(time() >= strtotime(date("Y/m/d"." 05:00")) AND time() <= strtotime(date("Y/m/d"." 09:00")) ){
	echo "<br>Good morning (after 05:00 , before 09:00)";
}elseif (time() >= strtotime(date("Y/m/d"." 09:01")) AND time() <= strtotime(date("Y/m/d"." 12:00")) ){
	echo "<br>Good day ! (after 09:01 , before 12:00)";
}elseif (time() >= strtotime(date("Y/m/d"." 12:01")) AND time() <= strtotime(date("Y/m/d"." 16:00")) ){
	echo "<br>Good afternoon ! (after 12:01 , before 16:00)";
}elseif (time() >= strtotime(date("Y/m/d"." 16:01")) AND time() <= strtotime(date("Y/m/d"." 21:00")) ){
	echo "<br>Good evening ! (after 16:01 , before 21:00)";
}elseif (time() >= strtotime(date("Y/m/d"." 21:01")) AND time() <= strtotime(date("Y/m/d"." 04:59")) ){
	echo "<br>Good evening ! (after 21:01 , before 04:59)";
}

echo "<br><br>3, 4 & 5. Display a different greeting according to the user's age, gender and mothertongue.";
if (isset($_GET['age'])){// test if in the global variable , containing the parameters given in the URL, 
							// exists the parameter 'age'
	if ($_GET['age'] < 12 ){
		if($_GET['mothertongue'] == 'english'){
			echo "<br>Hello kiddo!";
		}else{
			echo "<br>Aloha kiddo!";
		}
		
	}elseif($_GET['age'] >= 12 AND $_GET['age'] < 18 ){
		if($_GET['gender'] == 'man' ){//test if the paramter 'man' is in the URL
			if($_GET['mothertongue'] == 'english'){
				echo  "<br>Hello mister Teen !";
			}else{
				echo  "<br>Aloha boy!";
			}
		}else{
			if($_GET['mothertongue'] == 'english'){
				echo  "<br>Hello miss Teen !";
			}else{
				echo  "<br>Aloha girl!";
			}
		}	
	}elseif($_GET['age'] >= 18 AND $_GET['age'] < 115 ){
		if($_GET['mothertongue'] == 'english'){
			echo  "<br>Hello Adult !";
		}else{
			echo  "<br>Aloha Adult !";
		}
	}else {
		echo  "<br>Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
	}
} else { //create a form that send, with GET method, the content of attribute name ('age') as parameter 'age' and the content of input value as data of the parameter 
		//to the page 'condition.php'.
echo '<form method="get" action="./condition.php">
<label for="mothertongue>Do you speak English ?"</label>
<input type="radio" name="mothertongue" value="english" required>Yes
<input type="radio" name="mothertongue" value="otherLanguage" required>No<br>
<label for="age">Your age ?</label>
<input type="number" name="age"><br><br>
<label for="gender">Man or Woman?"</label>
<input type="radio" name="gender" value="man" required>man
<input type="radio" name="gender" value="woman" required>woman<br>
<input type="submit" name="submit" value="Greet me now">
</form>';
}

echo '<p><a href="./index.php">Return to index page</a></p>';
?>