<?php
$fp = fopen('loto.csv', 'r');
$file_array = file("loto.csv");
$x1 = $_POST['number_1'];
$x2 = $_POST['number_2'];
$x3 = $_POST['number_3'];
$x4 = $_POST['number_4'];
$x5 = $_POST['number_5'];
$x6 = $_POST['number_6'];
$numbers = [];
foreach ($file_array as $str){
    $arr = explode(";", $str);
    $new_arr = array_splice($arr, -6);
    $i = 0;
        if(in_array($x1, $new_arr)){
            $i ++;
        };
        if (in_array($x2, $new_arr)){
            $i ++;
         };
        if (in_array($x3, $new_arr)){
            $i ++;
          };
        if (in_array($x4, $new_arr)){
            $i ++;
          };
        if (in_array($x5, $new_arr)){
            $i ++;
          };
        if (in_array($x6, $new_arr)){
            $i ++;
          };
    array_push($numbers, $i);
}
        
$result_1 = count(array_filter($numbers, function ($n) { return $n == 6; }));
$result_2 = count(array_filter($numbers, function ($n) { return $n == 5; }));
$result_3 = count(array_filter($numbers, function ($n) { return $n == 4; }));
$result_4 = count(array_filter($numbers, function ($n) { return $n == 3; }));
$result_5 = count(array_filter($numbers, function ($n) { return $n == 2; }));

$data = array( 
  "result_1" => $result_1, 
  "result_2" => $result_2,
  "result_3" => $result_3,
  "result_4" => $result_4,
  "result_5" => $result_5,
);

echo json_encode($data);
?>
