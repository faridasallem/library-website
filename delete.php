<?php
include '../db.php';
$id = $_GET['id'];
$sql = "DELETE FROM loans where id = $id";
    if ($conn->query($sql)) {
        header(header: 'location:read.php');
    } else {
        echo "update failed";
    }
exit();
?>
