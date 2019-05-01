<?php
//1
function double($i){
  $result = 0;
  $i *= 2;
  $result = $i;
  return $result;
}
echo double(3);
echo "\n";


//2
function add($a, $b){
  $total = 0;
  $total = $a + $b;
  return $total;
}

echo add(1, 2);
echo "\n";


//3
function multi($arr){
  $total = 1;
  for($i = 0; $i < count($arr); $i++){
    $total *= $arr[$i];
  }
  return $total;
}

$array = [1, 3, 5, 7, 9];
echo multi($array);
echo "\n";


//4
$array = [1, 3, 5, 7, 9];
function max_array($arr){
  $max_number = $arr[0];
  foreach($arr as $a){
    if($max_number < $a){
      $max_number = $a;
    }
  }
  return $max_number;
}

echo max_array($array);
echo "\n";


//5
//strip_tags関数は、文字列に含まれるHTMLタグやPHPタグを取り除くことができます。
$str = "<p><?php var_dump('string'); ?>テスト<br>テキスト</p>";

echo strip_tags($str, "<h1><br>");

echo "\n";


//array_push関数は、１つ以上の要素を配列の最後に追加したい場合に使用する関数。
$fruits = ["apple", "orange", "melon"];

array_push($fruits, "banana", "pineapple");

foreach ($fruits as $fruit){
  echo $fruit;
  echo "\n";
}


//array_merge関数は、複数の配列を結合させる際に使用します。
$items1 = ["item1", "item2", "item3"];
$items2 = ["item4", "item5", "item6"];
$items3 = ["item7", "item8"];

$item_merge = array_merge($items1, $items2, $items3);

foreach ($item_merge as $item){
  echo $item;
  echo "\n";
}


//time関数は、現在時刻のUNIXタイプスタンプを取得する際に使用します。
//※UNIXタイムスタンプとは、コンピューターのシステム時刻の一種で、協定世界時（UTC）での1970年1月1日（午前0時0分0秒）からの時間経過を指します。
echo "現在のUNIXタイムスタンプ:".time();

echo "\n";

//5日後のタイムスタンプ
$nweek = time() + (5 * 24 * 60 * 60);
echo "5日後のタイムスタンプ:".$nweek;

echo "\n";


date_default_timezone_set('Asia/Tokyo');

//mktime関数は、指定時刻のUNIXタイムスタンプを取得する際に使用します。
//mktime( [ int 時 [, int 分 [, int 秒 [, int 月 [, int 日 [, int 年 [, int サマータイムフラグ ]]]]]]] )
$timestamp = mktime(0, 0, 0, 8, 1, 2017);
echo $timestamp;
echo "\n";


//date関数は、ローカルの日付や時刻を書式化したり、曜日を取得する関数で、日付を扱う処理でよく使用されます。
echo date("Y年m月d日");

echo "\n";

echo date("Y年m月d日 H時i分s秒");

echo "\n";

echo date("l");
//※date()関数の引数であるフォーマットに「l」もしくは「D」を使用することで、曜日の英語表記を取得することができます。また、「w」を使用することで曜日番号を取得することができます。(日曜: 0 → 土: 6)
echo "\n";

 ?>
