<?php

include "connection.php";

if(isset($_POST['title'])) {


    $title = $_POST['title'];
    $start = $_POST['start'];
    $end = $_POST['end'];

    mysqli_query($db, "INSERT INTO events VALUES ('', '$title', '$start', '$end')");
}
?>