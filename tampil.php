<?php

include "connection.php";

$tampil = mysqli_query($db, "SELECT * FROM events order by id");

$dataArr = array();
while($data = mysqli_fetch_array($tampil)) {

    $dataArr[] = array (
        'id' => $data['id'],
        'title' => $data['title'],
        'start' => $data['start_event'],
        'end' => $data['end_event']
    );
}

echo json_encode($dataArr);
?>