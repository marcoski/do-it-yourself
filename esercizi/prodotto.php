<form method="post">
  <input type="text" name="prezzo" placeholder="Inserisci prezzo del prodotto">
  <button type="submit">Calcola Prezzo Scontato</button>
  <button type="reset">Reset</button>
</form>
<?php
if (array_key_exists('prezzo', $_POST)) {
  $prezzo = $_POST['prezzo'];
  if (!is_numeric($prezzo)) {
    print '<h1>Inserisci un numero per favore!!!</h1>';
    exit;
  }
  if ($prezzo <= 0) {
    print '<h1>Inserisci un prezzo maggiore di 0!!!</h1>';
    exit;
  }
  print '<h1> Il prezzo del mio prodotto è: ' . $prezzo * 0.80 . '</h1>';
}
?>
