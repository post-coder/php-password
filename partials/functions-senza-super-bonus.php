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

  for($i = 0; $i < $passwordLength; $i++) {
    
    // prendere un carattere casuale dalla nostra stringona di tutti i caratteri e inserirlo nella variabile della password

    $newRandomChar = $alphanumericChars[rand(0, strlen($alphanumericChars) - 1)];

    // $generatedPassword = $generatedPassword . $newRandomChar;
    $generatedPassword .= $newRandomChar;
  }

  // restituisco la nostra password generata
  return $generatedPassword;

}