<?php
include '../db.php';
$sql = "SELECT * FROM authors";
$result = $conn->query($sql);


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Authors</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
<h1>Author list</h1>
<table class="table">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Birth Date</th>
    <th>Natonality</th>
    <th>Upadte</th>
    <th>Delete</th>
</tr>

<?php while($row = $result->fetch_assoc()): ?>
<tr>
    <td> <?php echo $row['id']; ?> </td>
    <td> <?php echo $row['name']; ?> </td>
    <td> <?php echo $row['birth_date']; ?> </td>
    <td> <?php echo $row['nationality']; ?> </td>
    <td>
        <a href="update.php?id=<?php  echo $row['id'];?>"><button class="update">
            Edit
        </button></a>
    </td>
    <td>
        <a href="delete.php?id=<?php  echo $row['id'];?>">
        <button class="delete">
            Delete
        </button>
        </a>
    </td>

</tr>
<?php endwhile; ?>
</table>

<div class="flex">

<a href="creat.php" ><button class="add-author">Add New Author</button></a>
<a href="../index.php" ><button class="add-author">Back</button></a>

</div>



</body>
</html>