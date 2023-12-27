<?php
session_start();
include("../administrator/connect.php");

echo "<meta charset='UTF-8' />";
if(isset($_POST['login']))
{
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $sql_check = mysql_query("select * from users where username = '$username'");
    $dem = mysql_num_rows($sql_check);
    if($dem == 0)
    {
        echo "Tài khoản không tồn tại";
    }
    else
    {
        $sql_check2 = mysql_query("select * from users where username = '$username' and password = '$password'");
        $dem2 = mysql_num_rows($sql_check2);
        if($dem2 == 0)
        {
            echo"Mật khẩu đăng nhập không đúng";
            header("login.php");
        }
        else
        {
            while($rows = mysql_fetch_object($sql_check2))
            {
                $phanquyen = $rows -> phanquyen	;
                if($phanquyen = '1')
                {
                    $_SESSION['admin'] = $username;
                    echo "<script language='javascript'>
                        alert('Đăng nhập thành công');
                        window.open('trangchu.php','_self',1);
                    </script>";
                }
                else
                {
                    $_SESSION['user'] = $username;
                    echo"Đăng nhập thành công!";
                    header("../index.php");
                }
            }
        }
    }
}