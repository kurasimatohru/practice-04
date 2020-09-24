<?php

// strip_tags
//文字列から HTML および PHP タグを取り除く

$string = '<a href="https://tech-boost.jp">tech boost</a>';
$result = strip_tags($string);
echo $result;
echo "\n";

//array_push
//末尾にデータを追加する
$data = array("1","2");
array_push($data,"3","4","5");
print_r ($data);
echo "\n";

// array_merge
//配列をマージ(結合)する
$data = array("tv"=>"100","pc"=>"500");
$add_data = array("tv"=>"200","psp"=>"300");
$result = array_merge($data,$add_data);
print_r ($result);
echo "\n";

// time, mktime
//time:UNIXのタイムスタンプを表示する
//mktime:日付をUNIXのタイムスタンプとして取得する
$now = time();
print $now;
echo "\n";

$timestamp = mktime(0,0,0,20,11,2020);
print $timestamp;
echo "\n";

// date
//UNIXタイムスタンプを日付にする
$timestamp = time() + (60*60*24)*7;
$next_week = date('Y年m月d日h時i分s秒', $timestamp);
print $next_week;
echo "\n";
