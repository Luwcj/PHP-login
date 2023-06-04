<?php
$dbhost = 'localhost';
$dbuser = 'root'; // tên người dùng của bạn
$dbpass = ''; // mật khẩu của bạn
$dbname = 'my_database';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    die('Không thể kết nối: ' . mysqli_error());
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];
    $email = $_POST['email'];

    // Kiểm tra username đã tồn tại chưa
    $stmt = $conn->prepare("SELECT * FROM User WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Tên đăng nhập đã tồn tại.";
    } else {
        // Thêm người dùng vào cơ sở dữ liệu
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("INSERT INTO User (username, password, id, email) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $username, $hashed_password, $id, $email);

        if ($stmt->execute()) {
            echo "Đăng kí thành công.";
        } else {
            echo "Lỗi: " . mysqli_error($conn);
        }
    }
}
?>

<html>
   <body>
      <h2>Đăng Kí</h2> 
      <form action="register.php" method="POST">
         Tên đăng nhập:<br>
         <input type="text" name="username"><br>
         Mật khẩu:<br>
         <input type="password" name="password"><br>
         ID:<br>
         <input type="text" name="id"><br>
         Email:<br>
         <input type="email" name="email"><br>
         <input type="submit" name="submit" value="Đăng kí">
      </form>
   </body>
</html>