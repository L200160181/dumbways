<?php
  function betweenDays($start_date,$end_date ){
  while (strtotime($start_date) <= strtotime($end_date)) {
    $timestamp = strtotime($start_date);
    $day = date('D', $timestamp);
    echo " '$start_date '" ;
    $start_date = date ("Y-m-d", strtotime("+1 days", strtotime($start_date)));
}
}
 betweenDays('2019-11-01', '2019-11-05');

?>
