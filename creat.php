<?php
include '../db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $book_id  = $_POST['book_id'];
    $member_id = $_POST['member_id'];
    $loan_date = $_POST['loan_date'];
    $return_date = $_POST['return_date'];
    $sql = "INSERT INTO loans (book_id,member_id, loan_date,return_date) VALUES ($book_id,$member_id, '$loan_date','$return_date')";
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
    <title>Create Loans</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <h1>
        Create Loans
    </h1>

    <form class="form" method="POST">
        <div>
            <label for="book_id ">book_id  : </label>
            <input type="number" name="book_id"  placeholder="book_id">
            <br />
            <br />
            <label for="member_id  ">member id : </label>
            <input type="number" name="member_id"  placeholder="member id">
            <br />
            <br />
            <label for="loan_date">loan_date : </label>
            <input type="date" name="loan_date"  placeholder="loan_date">
            <br />
            <br />
            <label for="return_date">return_date : </label>
            <input type="date" name="return_date"  placeholder="return_date">
            <br />
            <br />
            <div>
                <button type="submit">Add Loans</button>
            </div>

        </div>
    </form>
    <div class="flex">
    <a href="read.php"><button class="view">back</button></a>

    </div>
</body>

</html>