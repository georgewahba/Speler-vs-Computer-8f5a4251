<h1>steen papier schaar</h1>
<?php


$input = array("steen", "papier", "schaar" );
$rand_keys = array_rand($input, 1);
$computer_keuze = $input[$rand_keys];

if (!isset($_GET['player1'])){
    echo '<p>Speler 1 :</p>
      <form action="" method="get">
      <select name="player1">
      <option value="">--Please choose an option--</option>
      <option value="steen">steen</option>
      <option value="papier">papier</option>
      <option value="schaar">schaar</option>
  </select>
  <input type="submit" name="submit">
  </form>';
}
else {
  $player1=$_GET['player1'];
  $player2=$computer_keuze;
   $won = null;
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
        }
      }
    echo "computer heeft " . $computer_keuze . " gespeeld";
 ?>
</body>
</html>
