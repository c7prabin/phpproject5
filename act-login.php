<?php
require 'db/connect.php';
require 'db/function.php';
$username=$_POST["username"];
$password=$_POST["password"];
// 3. query prepare
$sql = "SELECT * FROM students WHERE username = '$username' AND password = '$password' LIMIT 1";
// 4. run query
$result = mysqli_query($conn,$sql);
// 5. check resource/result

if ($result) {
    // 6. check rows
   
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $user['Id'];
        $_SESSION['username'] = $username;
        $_SESSION['last_logged_in'] = date('Y-m-d h:i A');
        header('Location:admin/blog.php');
    } else {
        $_SESSION['flash_msg'] = 'Email/Password incorrect.';
        header('Location: login.php');
    }
} else {
    die('error:' . mysql_error());
}
?>