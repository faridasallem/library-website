<?php
include '../db.php';
$id = $_GET['id'];
$sql = "DELETE FROM books where id = $id";
    if ($conn->query($sql)) {
        echo "";
    } else {
        echo "update failed";
    }
header(header: 'location:read.php');
exit();
?>
