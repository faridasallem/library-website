<?php
include '../db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $birth_date = $_POST['birth_date'];
    $nationality = $_POST['nationality'];
    $sql = "INSERT INTO authors (name, birth_date, nationality) VALUES ('$name', '$birth_date', '$nationality')";
    if ($conn->query($sql)) {
        header(header: 'location:read.php');
    } else {
        echo "insert failed";
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
        Create Author
    </h1>

    <form class="form" method="POST">
        <div>
            <label for="name">Name : </label>
            <input type="text" name="name"  placeholder="Name">
            <br />
            <br />
            <label for="name">birth_date : </label>
            <input type="date" name="birth_date"  placeholder="birth_date">
            <br />
            <br />
            <label for="name">Nationality : </label>
            <input type="text" name="nationality"  placeholder="Nationality">
            <div>
                <button type="submit">Add Author</button>
            </div>

        </div>
    </form>
    <div class="flex">
    <a href="read.php"><button class="view">back</button></a>

    </div>
</body>

</html>