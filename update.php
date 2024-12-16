<?php
include '../db.php';
$id = $_GET['id'];
$members = $conn->query("SELECT * FROM members WHERE id = $id")->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email   = $_POST['email'];
    $join_date = $_POST['join_date'];
    $sql = "UPDATE members SET name = '$name', email = '$email', join_date='$join_date' where id = $id";
    if ($conn->query($sql)) {
        header(header: 'location:read.php');
    } else {
        echo "update failed";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Author</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <h1>
        Update Members
    </h1>

    <form class="form" method="POST">
        <div>
        <label for="name">Name : </label>
            <input type="text" name="name" value="<?php echo $members['name']?>"  placeholder="name">
            <br />
            <br />
            <label for="email ">email id : </label>
            <input type="email" name="email" value="<?php echo $members['email']?>"  placeholder="email">
            <br />
            <br />
            <label for="join_date">join_date : </label>
            <input type="date" name="join_date" value="<?php echo $members['join_date']?>" placeholder="join_date">
            <div>
                <button type="submit">Update Members</button>
            </div>

        </div>
    </form>
    <div class="flex">
    <a href="read.php"><button class="view">back</button></a>

    </div>
</body>

</html>