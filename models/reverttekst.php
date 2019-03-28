<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Hier komen alle functies die te  maken hebben met een palindroom
// palindroom = woord omdraaien


function rervertWord ($tekst){
    
    $revertTekst = "";
    // we gebruiken een fot omdat we een rangwomvang kennen.
    for ($index = strlen($tekst) -1 ; $index > -1 ;$index --){
      echo $tekst[index];
      $reverttekst = $revertTekst + $tekst[$index];
    }
    
   
    return $revertTekst;
}