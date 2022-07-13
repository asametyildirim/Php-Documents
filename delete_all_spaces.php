<?php

function delete_all_spaces($data)
{
    $data = str_replace("/s+/","",$data);
    $data = str_replace(" ","",$data);
    $data = str_replace(" ","",$data);
    $data = str_replace(" 
","",$data);
    $data = str_replace(" ","",$data);
    $data = str_replace("  ","",$data);
    $data = str_replace("   ","",$data);
    $data = str_replace(" ","",$data);
    $data = str_replace("  ","",$data);
    $data = str_replace("   ","",$data);
    $data = str_replace("    ","",$data);
    $data = str_replace("     ","",$data);
    $data = str_replace("      ","",$data);
    $data = str_replace("       ","",$data);
    $data = str_replace("        ","",$data);
    $data = str_replace("         ","",$data);
    $data = str_replace("          ","",$data);
    $data = str_replace("/s/g","",$data);
    $data = str_replace("/s+/g","",$data);
    $data = trim($data);
    return $data;
};

$example_txt="Hello everyone,
With this function you can delete spaces in any variable. A simple function that I think will be useful, especially for data taken from elsewhere.
Kind regards..";

echo delete_all_spaces($example_txt);
//result = "Helloeveryone, Withthisfunctionyoucandeletespacesinanyvariable.AsimplefunctionthatIthinkwillbeuseful,especiallyfordatatakenfromelsewhere. Kindregards.."
?>