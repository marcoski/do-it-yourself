<form method="post">
  <input type="text" name="consumo" placeholder="Inserisci la lettura del tuo contatore in m3">
  <button type="submit">Calcola Bolletta</button>
  <button type="reset">Reset</button>
</form>
<?php
if (array_key_exists('consumo', $_POST)) {
  $consumo = $_POST['consumo'];
  if (!is_numeric($consumo)) {
    print '<h1>Inserisci un numero per favore!!!</h1>';
    exit;
  }
  if ($consumo <= 0) {
    print '<h1>Inserisci un consumo maggiore di 0!!!</h1>';
    exit;
  }
  $bolletta = 20;
  $differenzaConsumo = $consumo - 100;
  if ($differenzaConsumo <= 0) {
    $bolletta = $bolletta + ($consumo * 2.5);
  } else {
    $bolletta = $bolletta + ($differenzaConsumo * 4) + 250;
  }

  print "<h1>Il costo della tua bolletta è: $bolletta 
  <br> La differenza di consumo è: $differenzaConsumo</h1>";  
}
?>
