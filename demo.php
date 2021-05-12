<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo Login</title>
</head>
<body>
<form action="login.php" method="post">
    <fieldset>
        <legend>Login</legend>
        Tên đăng nhập: <input type="text" name="username" placeholder="username" value="admin">
        Mật khẩu: <input type="password" name="password" placeholder="password" value="123">
        <button type="submit">Đăng nhập</button>
    </fieldset>
</form>
</body>
</html>

<!--
- Để gửi dữ liệu từ trình duyệt lên server thì cần form
- Khi gửi dữ liệu đi cần phương thức gửi //method
    - GET: gửi dữ liệu lên thanh url
    - POST: gửi dữ liệu ngầm
-->
