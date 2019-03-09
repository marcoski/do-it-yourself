<form method="post">
  <input type="text" name="a" placeholder="Inserisci a">
  <input type="text" name="b" placeholder="Inserisci b">
  <button type="submit">Calcola MCD</button>
</form>
<?php
if (array_key_exists('a', $_POST) && array_key_exists('b', $_POST)) {
  // ALGORITMO DI EUCLIDE per il calcolo di MCD(a, b)
  $aOriginal = $_POST['a'];
  $bOriginal = $_POST['b'];
  $a = $_POST['a'];
  $b = $_POST['b'];
  // SE b = 0 allora il MCD(a,b) sarò sicuramente a
  if ($b == 0) {
    print "<h1>Il massimo comun divisore tra $aOriginal e $bOriginal è $a</h1>";
    exit;
  }

  /**
   * Passi
   * 1. Calcolo il resto della divisione tra a e b
   * 2. Scambio b con a
   * 3. Scambio resto con b
   * 4. Quando il resto della divisione tra a e b è = 0 allora ho trovato MCD(a, b) che è b
   *    Per ottimizzare l'algoritmo controlliamo b != 0 che contiene sempre il resto
   *    E MCD(a, b) lo ritroviamo in a perchè l'ultimo passo scambia b con a
   */
  while ($b != 0) {
    $resto = $a % $b;
    $a = $b;
    $b = $resto;
  }

  print "<h1>Il massimo comun divisore tra $aOriginal e $bOriginal è $a</h1>";
}
?>
