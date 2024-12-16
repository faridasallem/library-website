<?php
include '../db.php';
$id = $_GET['id'];
$sql = "DELETE FROM books where id = $id";
    if ($conn->query($sql)) {
        header(header: 'location:read.php');
    } else {
        echo "update failed";
    }
exit();
?>
