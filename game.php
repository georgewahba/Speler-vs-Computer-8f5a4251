<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h1>steen papier schaar</h1>
<?php

if (isset($_GET['player1'])) {
  echo '';
}
  else {
    echo '<p>Speler 1 :</p>
      <form action="" method="get">
      <select name="player1">
      <option value="">--Please choose an option--</option>
      <option value="steen">steen</option>
      <option value="papier">papier</option>
      <option value="schaar">schaar</option>
  </select>
  <input type="submit" name="submit">
  </form>
 '
  ;
}

if (isset($_GET['player1'])&&!isset($_GET['player2'])) {
  echo '<p>Speler 2 :</p>
      <form action="#" method="get">
      <input name="player1" type= "hidden" value=' . $_GET['player1'] . '>
      <select name="player2">
      <option value="">--Please choose an option--</option>
      <option value="steen">steen</option>
      <option value="papier">papier</option>
      <option value="schaar">schaar</option>
  </select>
  <input type="submit" name="submit">
  </form>';
}

if (isset($_GET['player2'])) {
   echo '' ;
 }
$player1=$_GET['player1'];
$player2=$_GET['player2'];
 $won = null;
if (isset($_GET['player2']) && isset($_GET['player1'])) {
switch ($player1) {
  case 'steen':
    switch ($player2) {
      case 'steen':
        $won = 3;
        break;
      case 'papier':
        $won = 2;
        break;
      case 'schaar':
        $won = 1;
        break;
      default:
        echo('<h1>is fout</h1>');
      break;
}
  break;
      case 'papier':
        switch ($player2) {
          case 'steen':
            $won = 1;
            break;
          case 'papier':
            $won = 3;
            break;
          case 'schaar':
            $won = 2;
            break;
          default:
            echo('<h1>is fout</h1>');
            break;
}
  break;

        case 'schaar':
          switch ($player2) {
            case 'steen':
              $won = 2;
              break;
            case 'papier':
              $won = 1;
              break;
            case 'schaar':
              $won = 3;
              break;
            default:
              echo('<h1>is fout</h1>');
              break;
}
break;
}

    switch ($won) {
      case 1:
        echo ("<h1>speler 1 heeft gewonnen</h1>");
        break;
      case 2:
        echo('<h1>speler 2 heeft gewonnen</h1>');
        break;
      case 3:
        echo('<h1>gelijkspel</h1>');
}}
 ?>
</body>
</html>
