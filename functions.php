<?php
//First, you need to declare the function to make it available. It is stored in memory, not ran.
function say_hello($firstname){
    echo "Hello $firstname!";
    echo "<p>Hello ".$firstname."!</p>";
	echo '<hr>';
}

// Function calls during "Runtime" :
say_hello("Maurice");
say_hello("Alice");
say_hello("Jésus");
say_hello("Judas");


$str = 'This is going to be shuffled !';
echo "<br><br>shuffle string letters of '$str'";
$str = str_shuffle($str);
echo "<br>";
echo "'$str'";

echo "<br>";
$string="According to a researcher (sic) at Cambridge University, it doesn't matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole.";
echo "<br>$string";
//$characters=[',', '.', ':', ';'];
//$string = str_replace( $characters, " *** ", $string);
$string = str_replace( ",", " *** ", $string);
$string = str_replace( ".", " ### ", $string);
$array = preg_split("/[\s]+/",$string);//separate on space
// echo "<pre>";
// print_r($array);
// echo "</pre>";
$newString ="";
foreach($array as $word){
    if(strlen($word)>3){//useles for word less than 4 characters
    $subString = subStr($word,1, strlen($word)-2);//get substring form 2nd letter to before last letter.
    //echo "<br>$subString";
    
    $word=subStr($word,0,1).str_shuffle($subString).subStr($word,strlen($word)-1,1);
    }
    //echo "<br>$word";
    
    $newString = $newString.$word." ";
}
$newString =str_replace("***", "," , $newString);
$newString =str_replace("###", ".", $newString);
echo "<br><br>$newString";



$str = 'one|two|three|four';
echo "<br><br>$str";
// limit positif
echo "<br>print_r(explode('|', $str, 2)) = ";
print_r(explode('|', $str, 2));
echo "<br>print_r(explode('|', $str, -1)) = ";
// limit négatif (depuis PHP 5.1)
print_r(explode('|', $str, -1));

//
echo "<br><br>functions exercices:";
//----- capitalizeFistLetter -----
function capitalizeFistLetter($word){
    //echo"<br>word:$word";
    //echo"<br>word len:".strlen($word); //word with a special character is longer of 1
    if(ord(substr($word,0,1)) == 195){//test if the 1st character has an accent => first & second character correspond to a letter with accent
        $firstLetter = mb_strtoupper(substr($word,0,2));// then take the 2 first characters to get the uppercase 1st letter
        return $firstLetter.substr($word,2);
    } else {
        $firstLetter = mb_strtoupper(substr($word,0,1));// else set only the 1st characater to uppercase
        return $firstLetter.substr($word,1);
    }
}
echo "<br>capitalizeFirstLetter('émile')='".capitalizeFistLetter("émile")."'";
echo "<br>capitalizeFirstLetter('âne')='".capitalizeFistLetter("âne")."'";

//----- current year -----
echo "<br><br>Current year = ".date("Y");
echo "<br>Current date, hour, minute, seconde = ".date("Y-m-d H-i-s");
//----- current year -----
function sum($a, $b){
    if(! is_numeric($a) OR ! is_numeric($b)){//test if both are not numeric
        return"Error: argument is not a number.";
    }
    return ($a+$b);
}
echo "<br>sum(4,5)=".sum(4,5);
echo "<br>sum('4',5)=".sum("4",5);
echo "<br>sum('4a',5)=".sum("4a",5);
//------------- --------------------
function acronym($string){
    $array=explode(" ",$string);
    $acronym ="";
    foreach($array as $word){
        if(ord(substr($word,0,1)) == 195){//test if the 1st character has an accent => first & second characters correspond to a letter with accent
            $firstLetter = mb_strtoupper(substr($word,0,2));// then take the 2 first characters to get the uppercase 1st letter
        } else {
            $firstLetter = mb_strtoupper(substr($word,0,1));// else set only the 1st characater to uppercase
        }
        $acronym = $acronym.$firstLetter;
    }
    return $acronym;
}
echo "<br>acronym('île de Pâques')=".acronym('île de Pâques');
echo "<br>acronym('In code we trust!')=".acronym('In code we trust!');

//-------------- -------------------
function fusionAandE($string){
    $string = str_replace("ae", "&#230",$string );
    $string = str_replace("Ae", "&#198",$string );
    return $string;
}
echo '<br><br>';
echo 'fusionAandE("caecotraephie") : '.fusionAandE("caecotraephie")."<br>";
echo 'fusionAandE("Aenichthys") : '.fusionAandE("Aenichthys");

//-------------- -------------------
function separateAandE($string){
    $string = str_replace("&#230", "ae", $string);
    $string = str_replace("&#198", "Ae", $string);
    return $string;
}
echo '<br><br>';
echo 'separateAandE("c&#230cotr&#230phie"):'.separateAandE("c&#230cotr&#230phie")."<br>";
echo 'separateAandE("&#198nichthys"):'.separateAandE("&#198nichthys");

//------------------------------
function feedback(&$message, $class){ // &$var = use of reference as parmater in place of value
    switch($class){
        case "error" :
        case "warning" : $message = "<div class='$class'>$class: $message.</div>" ;break;
        default : $message = "<div class='info'>info: $message.</div>" ;
    }
}

echo '<br><br>';
$message = "Incorrect email address";
feedback($message, "error");//fct feedback() does not return value because use of reference as parameter
echo $message;
$message2 = "email address could be improved ";
feedback($message2, "info");//fct feedback() does not return value because use of reference as parameter
echo $message2;

//-------------------------
function word_generators(){
    $generatedWord1 = wordGenerator(1,5);
    $generatedWord2 = wordGenerator(7,15);
    return $generatedWord1." ".$generatedWord2;
}
function wordGenerator($min, $max){
    $generatedWord = "";
    $maxIteration = mt_rand($min,$max);
    for($i=1 ; $i<= $maxIteration; $i++){
        $generatedWord .= chr( mt_rand(97,122));
    }
    return $generatedWord;
}
echo '<br><br>Generate a new word:<br>'.word_generators().'<br>
    <form method="get" action=""><input type="submit" name="submit" value="generate">  </form>';

//-------------------------
echo strtolower("STOP YELLING I CAN'T HEAR MYSELF THINKING!!");
//------------------------
function calculate_cone_volume($radius,$heigth, $precision = 2  ){
 return round($radius * $radius * M_PI * $heigth * (1/3), $precision); 
}
echo '<br>The volume of a cone which ray is 5 and height is 2 = '.calculate_cone_volume(5,2).' cm<sup>3 .</sup><br>';  

echo '<br><br><a href="./index.php">Return to index</a>';
?>