<?php
$names= array('John', 'jeanne', 'joan', 'émile');
foreach ($names as $name){
    echo ucfirst($name);//set the 1st letter to uppercase
    echo (! next($names)) ? '.' : ',';
}
echo"<br>";
var_dump($names);

//
echo "<br><br>";
foreach ($names as $key => $value){// associate the variable $key  to the variable $value
	$names[$key] = ucfirst($value);//so that , set each value of the array $names, with uppercase for the 1st letter
}
var_dump($names);
//
echo "<br><br>";
$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
foreach ($pronouns as $pronoun){
    echo "<br>".$pronoun." code";
    echo ($pronoun == 'He/She') ? "s":"";
}
//while
echo "<br><br>While loop";
$amount_of_lines = 1;
while ($amount_of_lines <= 5)
{
    echo "<br>$amount_of_lines : I shall not watch flies fly when I'm learning PHP.";
    // shorthand writing for 
    // $amount_of_lines = $amount_of_lines +1;
    $amount_of_lines ++; 

}

echo "<br><br>Do...While loop";
$amount_of_lines = 1;
do{
    echo "<br>$amount_of_lines : I shall not watch flies fly when I'm learning PHP.";
    // shorthand writing for 
    // $amount_of_lines = $amount_of_lines +1;
    $amount_of_lines ++; 

}while ($amount_of_lines <=5);

echo "<br><br>For loop";
for ($amount_of_lines = 1; $amount_of_lines <= 5; $amount_of_lines ++)
{
    echo "<br/>$amount_of_lines: I shall not watch flies fly when I\'m learning PHP.";
}

$countries=[
    'BE' => 'belgium',
    'FR' => 'france',
    'DE' => 'germany',
    'PO' => 'portugal',
    'SP' => 'spain',
    'IR' => 'irland',
    'SV' => 'sweden',
    'DK' => 'denmark',
    'LU' => 'luxemburg',
    'NL' => 'the Netherlands'
];

echo "<pre>";
print_r($countries);
echo"</pre>";

echo '<br><select name="country" id="country">';
foreach($countries as $key => $country){// associate the variable $key with the variable $country
    echo "<option value='$key'>".ucfirst($country)."</option>";
}
echo '</select>';
echo '<br><a href="./index.php">Return to index</a>';
?>
