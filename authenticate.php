<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // include('connection.php');
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "users";

    $conn = mysqli_connect($host, $username, $password, $dbname);

    if (mysqli_connect_errno()) {
        die("Failed to connect:" . mysqli_connect_errno());
    }

    $email = $_POST['email'];
    $Password = $_POST['pwd'];

    $query = "SELECT * FROM userdata WHERE email = '$email' and Password = '$Password'";

    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        session_start();
        $_SESSION['project'] = 'true';
        echo "<script>window.alert('Success')</script>";
        echo "<script>window.location.assign('Home.html')</script>";
    } else {
        echo "<script>window.alert('Access Denied')</script>";
        echo "<script>window.location.assign('signup.html')</script>";
    }
    ?>
</body>

</html>