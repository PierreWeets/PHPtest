<?php
$countries = array( 'Belgium', 'France' , 'Germany', 'Netherlands', 'Ukraine' );
array_push($countries, 'England'); // add a element in a array
$countries[]='USA';// add a element in a array

echo "countries[2]=".$countries[1];
$structure = var_dump($countries);//description of a variable
echo "<br>".$structure;
var_export($countries) ;//shorter description of a variable

echo "<br>";
$a = array(1, 2, array("a", "b", "c"));
var_dump($a);

$family=['Pa','Ma', 'Anne-Christine','Emmanuelle', 'Paul', 'Pascale'];
echo "<br>"; print_r($family[1]);
echo "<br>".$family[2];

$person['function'] = 'Junior Web Developer';//link a value with a key
echo "<br>".$person['function'];

$person['function'] = 'Junior Web Developer';
$person['function'] = 'Senior Web Developer';//replace the value
echo "<br>".$person['function'];

//link values to numeric keys
$person[0] = '02/2198445';
$person[1] = 'Cantersteen 10';//
$person[2] = 'Brussels';
echo "<br>".$person[1];
// with this
echo "<br>".$person['street'];//not defined => error

//link values to string keys
$user = array (
    'firstname' => 'Juan',
    'lastname' => 'Pablo',
    'address' => '3 Paradijsestraat',
    'city' => 'Antwerpen'
    );
echo "<br>".$user['address'] ;

//link values to string keys
$me = [
    'firstName' => 'Pierre',
    'lastName' => 'Weets',
    'birthYear' => 1970,
    'address' => '20 rue Maubille',
    'zipCode' => 1401,
    'town' => 'Nivelles',
];
//$me[] = 'hobbies' ;
$me['hobbies']=['games', 'TV serials','walks'] ;// add 'hobbies' as an array
array_push($me['hobbies'],'read informations');// add 'read informations' to the array 'hobbies'
$me['hobbies'][]="Taxidermy";// add 'Taxidermy' to the array 'hobbies'
$me['hobbies']['sports']=['volleyball', 'hike','table tennis']; //  in the array 'hobbies', add 'sports' value as an array.

echo "<br> Hello I'm ".$me['firstName']." ".$me['lastName'].". <br>I live at the address : ".$me['address']
                ." at ".$me['zipCode']." ".$me['town'].".<br> My favorite sports are ";
foreach($me['hobbies']['sports'] as $value){
    echo $value;
    //if no more next item in the array "$me['hobbies']['sports']" then last item reached
    echo (!next( $me['hobbies']['sports'])) ?  ".":  ",";
}

$mother =  [
    'firstName' => 'Monique',
    'lastName' => 'Hardy',
    'birthYear' => 1943,
    'address' => '20 rue de l\'Enseignement',
    'zipCode' => 1400,
    'town' => 'Nivelles',
    'favoriteColors' => ['blue', 'red', 'green'],
    'hobbies' => ['reading', 'scrabble', 'sudoku']
];   

$me['mother']= $mother;//add the content of the variable $mother as a value
echo "<br>number of hobbies of my mother :".count($me['mother']['hobbies']);
echo "<br>number of my hobbies:".count($me['hobbies']);
echo "<br>total number of hobbies:".(count($me['mother']['hobbies'])+count($me['hobbies']));// () evaluates the addition of the 2 numbers
$me['lastName']="Durand";//replace existing value by a new one

echo '<br><br>array in tree presentation<pre>';//display array in tree presentation
print_r($me);
echo '</pre>';
//remove the last hobby
array_pop($me['hobbies']);
echo '<br>array in tree presentation without the "sports" <pre>';//display array in tree presentation
print_r($me);
echo '</pre>';
//remove the last data 
array_pop($me);
echo '<br>array in tree presentation without the last piece of data <pre>';//display array in tree presentation
print_r($me);
echo '</pre>';


$soulMate = [
    'firstName' => 'Catherine',
    'lastName' => 'Vanderbist',
    'birthYear' => 1971,
    'address' => '18 Robijnlaan',
    'zipCode' => 1331,
    'town' => 'Overijse',
    'hobbies' => ['art crafting','writing', 'TV serials']
];

// perform array operation
$possible_hobbies_via_intersection = array_intersect($me['hobbies'],$soulMate['hobbies']);
$possible_hobbies_via_merge = array_merge($me['hobbies'],$soulMate['hobbies']);

echo '<pre>hobbies_via_intersection<br>';
print_r($possible_hobbies_via_intersection);
echo '<br>hobbies_via_merge<br>';
print_r($possible_hobbies_via_merge);
echo '</pre>';


$web_development = ['frontend', 'backend'];
$web_development['frontend']=[];
$web_development['backend']=[];

array_push($web_development['frontend'],'xhtml');
$web_development['backend'][] = 'Ruby on Rails';
$web_development['frontend'][]='CSS';
$web_development['frontend'][]='Flash';
echo 'list of techno<pre>';//display array in tree presentation
print_r($web_development);
echo '</pre>';
$web_development['frontend'][0]= 'html';
echo '<br>list of techno with XHTML replaced by html<pre>';//display array in tree presentation
print_r($web_development);
echo '</pre>';
array_pop($web_development['frontend']);
echo '<br>list of techno without the last frontend techno<pre>';//display array in tree presentation
print_r($web_development);
echo '</pre>';

echo "<a href='./index.php'>Return to index</a>";
?>