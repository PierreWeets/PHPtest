<?php
$name = "Pierre";
echo "<p>Hello ! My name is $name</p>";

$age = 49;
echo "<p>I am $age years old.</p>";

$colorEyes = "brown";
echo "<p>My eyes are $colorEyes.</p>";

$family = array('Félicien','Monique', 'Pascale', 'Emmanuelle', 'Anne-Christine', 'Paul');
echo "<p>The first person of my family is $family[0]</p>";

$hungryBoolean = false; // boolean true = 1, false = 0 


// if( $temperature >= 15 ) {
//     // code to execute if the condition results TRUE
//     $clothes = "T-shirt";
//     $should_i_wear_a_scarf = false;
//   } else {
//     // code to execute if the condition results FALSE
//     $clothes = "Pull-over";
//     $should_i_wear_a_scarf = true;
//   }
  
//   if ($should_i_wear_a_scarf == true){
//       // this is a "fake" function for the sake of the example 
//       // that function is only executed in the condition is true
//       grab_scarf_from_door_hanger();
//   }
//   // The following function will be executed everytime, 
//   // but its $clothes argument changes according to the result
//   // of our previous conditional structure
//  cover_my_chest_with($clothes);

 if ( $age <= 12 AND $language == "English" ) { 
	echo "Hello kiddo!<br/>";
} else {
	echo "Good day stranger !<br/>";
}

echo '<p><a href="../test/index.php"> Retour sur la page</a></p>';
?>