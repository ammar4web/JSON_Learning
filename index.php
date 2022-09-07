<?php
$json = '{"userName" : "Osama", "Age" : 36}';
var_dump($json);

echo "<hr />";

$phpArray = json_decode($json);
var_dump($phpArray);

echo "<hr />";

foreach ($phpArray as $key => $item) {
  echo "<p>" . $key . " => " . $item . '</p>';
}

// 
echo "<br /><hr /><hr /><hr /><br />";
// 

$phpArray2 = ["Osama", 36];
var_dump($phpArray2);
echo "<hr />";
$json2 = json_encode($phpArray2);
var_dump($json2);

// 
echo "<br /><hr /><hr /><br />";
// 

$phpArray3 = [
  "userName" => "Osama",
  "Age" => 36
];
var_dump($phpArray3);
echo "<hr />";
$json3 = json_encode($phpArray3);
var_dump($json3);
echo "<hr />";
$phpArrayPhp = json_decode($json3);
var_dump($phpArrayPhp);
echo "<hr />";
echo "Age: " . $phpArrayPhp->Age;
