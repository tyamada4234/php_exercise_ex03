<?php

/*1題目
項目表示と改行*/

echo "1題目"."\n";
$name = "tomoya";

if ($name = "tomoya")
{
    echo "私は あなたの名前 です";
} else {
    echo "あなたの名前ではありません";
}
echo "\n";

/*2題目
項目表示と改行*/
echo "2題目"."\n";

$total = 0;

for ($i = 1; $i <= 10000; $i++){
    $total += $i;
}
echo $total;
echo "\n";

/*3題目
項目表示と改行*/
echo "3題目";
echo "\n";

//フルーツを配列に代入
$fruits = ["リンゴ", "レモン", "バナナ", "ブドウ", "オレンジ"];

foreach ($fruits as $fruit){
    echo $fruit;
    echo "\n";
}
echo "\n";

/*4題目
項目表示と改行*/
echo "4題目";
echo "\n";

// for文の始めの値を定義する 
$start = 1;
// for文の終わりの値を定義する 
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}