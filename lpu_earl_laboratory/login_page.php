<?php
include 'process/db_connection.php';
$conn = OpenCon();
$sql = "SELECT * FROM `user_accounttbl`;";
$result = $conn->query($sql);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $user = $_POST['user'];
    $pass = $_POST['password'];
    $sql = "SELECT COUNT(*) AS count
    FROM user_accounttbl
    WHERE username = '$user' AND password = '$pass';
    ";
    $result = mysqli_fetch_assoc($conn->query($sql));

    if ($result['count'] > 0) {
        $sql = "SELECT * FROM `personal_infotbl`;";
        $result = $conn->query($sql);
        header("Refresh:0; url=Admin_page.php");
        exit();
    } else {
        echo "<script>";
        echo "alert('Invalid credentials!');";
        echo "</script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/login_page.css">
</head>

<body>
    <div class="login-dark">
        <form method="post" id='myForm'>
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            <div class="form-group"><input class="form-control" type="username" name="user" placeholder="Username"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div>
            <span id='message'></span>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>