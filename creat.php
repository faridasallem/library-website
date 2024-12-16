<?php
include '../db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $author_id  = $_POST['author_id'];
    $publish_date = $_POST['publish_date'];
    $genre = $_POST['genre'];
    $isbn  = $_POST['isbn'];
    $sql = "INSERT INTO books (title,author_id, publish_date,genre,isbn) VALUES ('$title', '$author_id', '$publish_date','$genre','$isbn')";
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
    <title>Create Books</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <h1>
        Create Books
    </h1>

    <form class="form" method="POST">
    <div>
        <label for="Title">Title :</label>
        <input type="text" name="title" placeholder="title">
        <br /><br />
        
        <label for="author_id">author id :</label>
        <input type="number" name="author_id" placeholder="author id">
        <br /><br />
        
        <label for="publish_date">publish_date :</label>
        <input type="date" name="publish_date" placeholder="publish_date">
        <br /><br />
        
        <label for="genre">genre :</label>
        <input type="text" name="genre" placeholder="genre">
        <br /><br />
        
        <label for="isbn">isbn :</label>
        <input type="text" name="isbn" placeholder="isbn">
        <br /><br />

        <!-- Buttons container -->
        <div class="form-buttons">
            <a href="read.php">
                <button type="button" class="view">Back</button>
            </a>
            <button type="submit" class="add-books">Add Books</button>
        </div>
    </div>
</form>
</body>
</html>