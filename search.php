<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:login.php");
}

// Kết nối đến database
$dbhost = 'localhost';
$dbuser = 'root'; // tên người dùng của bạn
$dbpass = ''; // mật khẩu của bạn
$dbname = 'my_database';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    die('Không thể kết nối: ' . mysqli_error());
}

// Xử lý tìm kiếm ID
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["id"])) {
        $id = $_GET["id"];
        // Do something with $id here...
    }
}
?>

<html>
<body>
    <h2>Kiểm tra ID</h2>
    <form action="search.php" method="get">
        ID người dùng:<br>
        <input type="text" name="id"><br>
        <input type="submit" name="submit" value="Tìm kiếm">
    </form>
</body>
</html>