<?php
// dichiaro la funzione che genererà la password casuale
function generatePassword($passwordLength) {

  // ci serve sapere la lunghezza
  // la prendiamo dal parametro

  // prepariamo 4 variabili, che contengono rispettivamente
  // lettere minuscole, maiuscole, numeri, simboli
  $lowercaseAlphabet = 'abcdefghijklmnopqrstuvwxyz';
  $uppercaseAlphabet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $numbers = '0123456789';
  $specialChar = '!@#$%^&*()_-+=;:<>/?';

  // ho anche una variabile che li contiene tutti insieme
  $alphanumericChars = $lowercaseAlphabet . $uppercaseAlphabet . $numbers . $specialChar;

  // tramite un ciclo for, concatenare alla variabile della password da creare, dei caratteri a caso

  $generatedPassword = "";

  // garantire che ci sia sempre almeno un carattere di ciascuna delle 4 stringhe iniziali
  $generatedPassword .=  $lowercaseAlphabet[rand(0,strlen($lowercaseAlphabet)-1)];
  $generatedPassword .=  $uppercaseAlphabet[rand(0,strlen($uppercaseAlphabet)-1)];
  $generatedPassword .=  $numbers[rand(0,strlen($numbers)-1)];
  $generatedPassword .=  $specialChar[rand(0,strlen($specialChar)-1)];
  

  for($i = 4; $i < $passwordLength; $i++) {

    // prendere un carattere casuale dalla nostra stringona di tutti i caratteri e inserirlo nella variabile della password
    $newRandomChar = $alphanumericChars[rand(0, strlen($alphanumericChars) - 1)];

    // $generatedPassword = $generatedPassword . $newRandomChar;
    $generatedPassword .= $newRandomChar;
  }

  // mischiare la password in modo che i 4 caratteri iniziali non siano sempre nell'ordine di inserimento iniziale
    $generatedPassword = str_shuffle($generatedPassword);



  // restituisco la nostra password generata
  return $generatedPassword;

}