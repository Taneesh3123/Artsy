<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document
    </title>
</head>

<body>
    <?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "users";

    $conn = mysqli_connect($host, $username, $password, $dbname);

    $Name = $_REQUEST['full-name'];
    $email = $_REQUEST['email'];
    $Password = $_REQUEST['pwd'];

    if (mysqli_connect_errno()) {
        die("Failed to connect:" . mysqli_connect_errno());
    }

    $query = "INSERT INTO userdata VALUES ('$Name','$email','$Password')";

    if (mysqli_query($conn, $query)) {
        echo "<script> window.alert('Success')</script>";
        echo "<script>window.location.assign('Home.html')</script>";
    } else {
        echo "Error" . mysqli_error($conn);
    }
    mysqli_close($conn);

    ?>
</body>

</html>