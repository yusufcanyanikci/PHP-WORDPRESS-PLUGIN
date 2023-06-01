<?php
/*
 * Plugin Name: sınav
 * Descreiption: sınav
 */

 $bugun = date('Y-m-d');
 $gun = date('l', strtotime($bugun));
 if ($gun == 'Saturday' || $gun == 'Sunday') {
   echo "Bugün tatil";
 } else {
   echo "Mevcut blog yazısı";
 }
 ?>


