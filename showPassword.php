<?php

session_start();

// se vediamo che la password non è stata generata, facciamo tornare l'utente alla index
// in questo modo non è possibile visualizzare questa pagina "sensibile" senza aver prima generato la password

// se non è stata settata
if(!isset($_SESSION['generatedPassword'])) {
  header('Location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Generata</title>
</head>
<body>
  <h1>Ecco la password generata</h1>
  <pre><?= $_SESSION['generatedPassword'] ?></pre>
</body>
</html>

<?php 

session_destroy();

?>