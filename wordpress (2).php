
<?php

/*
 * Plugin Name: sınav
 * Descreiption: sınav
 */
 
 add_filter ("the_content","sınav");
 function sınav($content){
    $map = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3008.220345886621!2d28.97934881524425!3d41.06417592393237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab71ea2156897%3A0xc847d1dfa56575c6!2s%C5%9Ei%C5%9Fli%20Mesleki%20ve%20Teknik%20Anadolu%20Lisesi!5e0!3m2!1str!2str!4v1680597649952!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>'
        return $content.$map
 }

 ?>