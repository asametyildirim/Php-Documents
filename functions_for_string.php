<?php


$example = "Hello World!";

// The strlen function calculates the length of the variable.
echo 'The length of the $example variable: '.strlen($example) .'<br/>'; //result: 12

//Strrev fonksiyonu, reverses the string
echo 'Inverted $example variable: '.strrev($example).'<br/>';

//The strrev function displays the rank of a particular character in a variable.
echo '! character, '.strpos($example,"!").'. place <br/>';

////str_word_count function returns the number of words in a variable
echo 'The $example variable consists of '.str_word_count($example).' words. <br/>';

echo '<br/>///////////////////////////////// EXAMPLES /////////////////////////////////////////////<br/><br/>';

 if(strpos($example,'!')){
     echo "! character found. Row number: ".strpos($example,'!').'<br/>';
 }else{
     echo "! character not found.".'<br/>';
 }

 $position = strlen($example) - strlen("!");
 echo 'words up to character "!" : '. substr($example,0,$position).'<br/>';

/////////////////////////////// Read more ///////////////////
$limit = 3;

if(strlen($example) > $limit){
    echo substr($example,0,5).'.... <a href="#">Read More</a>';
}else{
    echo $example .'.... <a href="#">Read More</a>';
}

?>