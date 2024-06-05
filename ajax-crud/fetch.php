<?php
$conn = mysqli_connect("localhost","root","","library");

$query = "select * from students";
$query_run = mysqli_query($conn, $query);


if (mysqli_num_rows($query_run) > 0){
    $data = array();

    while($row = mysqli_fetch_assoc($query_run)){
        $data[] = $row;
    }
    header('content-type: application/json');
    echo json_encode($data);
}else{
    header('content-type: application/json');
    echo json_encode(array("message" => "No record found"));
}




?>