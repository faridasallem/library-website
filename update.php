<?php
include '../db.php';
$id = $_GET['id'];
$author = $conn->query("SELECT * FROM authors WHERE id = $id")->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $birth_date = $_POST['birth_date'];
    $nationality = $_POST['nationality'];
    $sql = "UPDATE authors SET name = '$name', birth_date = '$birth_date', nationality='$nationality' where id = $id";
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
        Update Author
    </h1>

    <form class="form" method="POST">
        <div>
            <label for="name">Name : </label>
            <input type="text" name="name" value="<?php echo $author['name']?>"  placeholder="Name">
            <br />
            <br />
            <label for="name">birth_date : </label>
            <input type="date" name="birth_date" value="<?php echo $author['birth_date']?>"  placeholder="birth_date">
            <br />
            <br />
            <label for="name">Nationality : </label>
            <input type="text" name="nationality" value="<?php echo $author['nationality']?>"  placeholder="Nationality">
            <div>
                <button type="submit">Update Author</button>
            </div>

        </div>
    </form>
    <div class="flex">
    <a href="read.php"><button class="view">back</button></a>

    </div>
</body>

</html>