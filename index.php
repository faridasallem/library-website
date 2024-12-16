<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>

    <h1>Welcome to our library</h1>
    <div class="parent">
        <div class="child">
            <data value="sub-child">
                <h2>Authors</h2>
                <a href="./Author/read.php"><button>View</button></a>
            </data>
        </div>
        <div class="child">
            <data value="sub-child">
                <h2>Books</h2>
                <a href="./Book/read.php"><button>View</button></a>
            </data>
        </div>

        <div class="child">
            <data value="sub-child">
                <h2>Loans</h2>
                <a href="./Loans/read.php"><button>View</button></a>
            </data>
        </div>

        <div class="child">
            <data value="sub-child">
                <h2>Members</h2>
                <a href="./Members/read.php"><button>View</button></a>
            </data>
        </div>
    </div>

</body>

</html>