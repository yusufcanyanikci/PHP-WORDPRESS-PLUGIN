<?php

/*
 * Plugin Name: sınav
 * Descreiption: sınav
 */

$dir = "resimler/"; 
$files = glob($dir . "*.{jpg}", GLOB_BRACE); 
$rand_key = array_rand($files); 

echo '<img src="' . $files[$rand_key] . '" alt="Resim">';

?>
 


 
 