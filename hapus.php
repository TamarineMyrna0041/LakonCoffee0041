<?php

include "connection.php";

if (isset($_POST['id'])){
    $id = $_POST['id'];
    mysqli_query($db, "DELETE FROM events WHERE id = '$id'");
}

?>