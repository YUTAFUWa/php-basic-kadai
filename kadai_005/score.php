<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <p>
    <?php
      $score1 = 80;
      $score2 = 60;
      $score3 = 55;
      $score4 = 100;
      $score5 = 25;
      $score6 = 80;
      $score7 = 95;
      $score8 = 30;
      $score9 = 60;
      $score10 = 40;

      $sum = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;
      $ave = $sum/10;
      echo "平均点は{$ave}点です。";
    ?>
  </p>
  
</body>
</html>