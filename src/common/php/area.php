<?php
    require_once ('connect.php');
    $result = mysqli_query($link, "select * from area where aid>0");
    // $row = mysqli_fetch_array($result);
    $i = 0;
    $data = [];
    while($row = mysqli_fetch_array($result)){
        $data[$i] = $row;
        $i += 1;
    }
    echo json_encode($data);
?>