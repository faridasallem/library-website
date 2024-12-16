<?php
include '../db.php';
$id = $_GET['id'];
$books = $conn->query("SELECT * FROM books WHERE id = $id")->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $author_id  = $_POST['author_id'];
    $publish_date = $_POST['publish_date'];
    $genre = $_POST['genre'];
    $isbn  = $_POST['isbn'];
    $sql = "UPDATE books SET title = '$title', author_id = $author_id, publish_date='$publish_date', genre = '$genre', isbn = '$isbn' where id = $id";
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
        <label for="Title">Title : </label>
            <input type="text" name="title" value="<?php echo $books['title']?>"  placeholder="title">
            <br />
            <br />
            <label for="author_id ">author id : </label>
            <input type="number" name="author_id" value="<?php echo $books['autor_id']?>"  placeholder="author id">
            <br />
            <br />
            <label for="publish_date">publish_date : </label>
            <input type="date" name="publish_date" value="<?php echo $books['publish_date']?>" placeholder="publish_date">
            <br />
            <br />
            <label for="genre">genre : </label>
            <input type="text" name="genre" value="<?php echo $books['genre']?>" placeholder="genre">
            <br />
            <br />
            <label for="isbn ">isbn  : </label>
            <input type="text" name="isbn" value="<?php echo $books['isbn']?>" placeholder="isbn ">
            <div>
                <button type="submit">Update Books</button>
            </div>

        </div>
    </form>
    <div class="flex">
    <a href="read.php"><button class="view">back</button></a>

    </div>
</body>

</html>