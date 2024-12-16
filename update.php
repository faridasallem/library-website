<?php
include '../db.php';
$id = $_GET['id'];
$loans = $conn->query("SELECT * FROM loans WHERE id = $id")->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $book_id = $_POST['book_id'];
    $member_id  = $_POST['member_id'];
    $loan_date = $_POST['loan_date'];
    $return_date = $_POST['return_date'];
    
    $sql = "UPDATE loans SET book_id = '$book_id', member_id = $member_id, loan_date='$loan_date', return_date = '$return_date' where id = $id";
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
    <title>Update loans</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <h1>
        Update loans
    </h1>

    <form class="form" method="POST">
        <div>
        <label for="book_id">book_id : </label>
            <input type="number" name="book_id" value="<?php echo $loans['book_id']?>"  placeholder="book_id">
            <br />
            <br />
            <label for="membre_id ">author id : </label>
            <input type="number" name="member_id" value="<?php echo $loans['member_id']?>"  placeholder="member_id">
            <br />
            <br />
            <label for="loan_date">loan_date : </label>
            <input type="date" name="loan_date" value="<?php echo $loans['loan_date']?>" placeholder="loan_date">
            <br />
            <br />
            <label for="return_date">return_date : </label>
            <input type="text" name="return_date" value="<?php echo $loans['return_date']?>" placeholder="return_date">
            <div>
                <button type="submit">Update loans</button>
            </div>

        </div>
    </form>
    <div class="flex">
    <a href="read.php"><button class="view">back</button></a>

    </div>
</body>

</html>