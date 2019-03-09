<form method="post">
  <input type="text" name="a" placeholder="Inserisci a">
  <input type="text" name="b" placeholder="Inserisci b">
  <button type="submit">Calcola MCD</button>
</form>
<?php
if (array_key_exists('a', $_POST) && array_key_exists('b', $_POST)) {
  // ALGORITMO DI EUCLIDE
  $aOriginal = $_POST['a'];
  $bOriginal = $_POST['b'];
  $a = $_POST['a'];
  $b = $_POST['b'];
  if ($b == 0) {
    print "<h1>Il massimo comun divisore tra $aOriginal e $bOriginal è $a</h1>";
    exit;
  }

  while ($b != 0) {
    $resto = $a % $b;
    $a = $b;
    $b = $resto;
  }

  print "<h1>Il massimo comun divisore tra $aOriginal e $bOriginal è $a</h1>";
}
?>
