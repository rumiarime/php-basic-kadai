<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHPでスコア平均を求める</title>
 </head>
 
 <body>
     <p>
         <?php
         // 10人のスコア
         $score_1=80;
         $score_2=60;
         $score_3=55;
         $score_4=40;
         $score_5=100;
         $score_6=25;
         $score_7=80;
         $score_8=95;
         $score_9=30;
         $score_10=60;
         
         // 10人のスコアの平均を求める
         echo ($score_1 + $score_2 + $score_3 + $score_4 + $score_5 + $score_6 + $score_7 + $score_8 + $score_9 + $score_10)/10
         ?>
     </p>
