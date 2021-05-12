<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username =$_REQUEST['username'];
        $password = $_REQUEST['password'];
//        echo $username;
//        echo $password;
        login($username,$password);
    }

    function login($username, $password){
        if($username == 'admin' && $password=='admin'){
            echo 'Đăng nhập thành công';
//            echo '<script>alert("Login success")</script>';
        }else{
            echo 'Đăng nhập thất bại. vui lòng thử lại';
            echo '<script>
                        alert("Đăng nhập lại nhé!");
                        window.location.href = "demo.php";
                  </script>';
//            header('location:demo.php');
//            echo '<br>';
//            echo "<a href='demo.php'>Login again</a>";
        }
    }