<?php
class Solution {
    function multiple(){
$start_no = 3;
$secondNo = 5;
$end = 1000;
$multiple = array();  

for ($index = 1; $index < $end; $index++) {
    if ($index % $start_no == 0 || $index % $secondNo == 0) {
        array_push($multiple, $index);
    }
}
$sumOfMultiples = array_sum($multiple);

return $sumOfMultiples;
}
}
?>