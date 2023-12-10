<?php
 session_start();
 include("../database/database.php");




// $sql = "INSERT INTO adminlogin (user,password) values('My', '39260022')";


// try{
//     mysqli_query($conn, $sql);
//     echo "User is now registed";
// }catch(mysqli_sql_exception){
//          echo"Could not register user";
// }

// mysqli_close($conn);
$taikhoan = $_POST["taikhoan"];
$matkhau = $_POST["matkhau"];


$_SESSION['taikhoan'] = $taikhoan;



$sql = "SELECT user, password from adminlogin  WHERE user = '$taikhoan' and password ='$matkhau';";

 $kiemtra = mysqli_query($conn, $sql); 
if(isset($_POST["login"])){
    if(empty($taikhoan) || empty($matkhau)){
        echo '<script>';
        echo 'alert("Vui Lòng Nhập Tài Khoản hoặc Mật Khẩu!");';
        echo '</script>';
    }else{
        if ($kiemtra) {
            
            $row = mysqli_fetch_assoc($kiemtra);
          
            if ($row['user'] == $taikhoan && $row['password'] == $matkhau) {
        
            header("Location: admin.php");
             echo "thanh cong";
            } else {
           
                echo '<script>';
                echo 'alert("Sai Tài Khoản hoặc mật khẩu!");';
                echo '</script>';
            }
          }
    }
}


 mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập Admin</title>
    

<style>
  body {
            font-family: Arial, sans-serif;
            background-image: url('../images/bg-g.jpg');
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .login-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 350px;
        }
        h1{
            color:rgb(20, 154, 198) ;
        }
        form {
            display: flex;
            flex-direction: column;
        }

        p {
            margin: 0 0 8px;
        }

        input {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            width: 100%;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
</style>

</head>
<body>
  
    <div class="login-container">
    <h1>Đăng nhập Admin</h1>
     <form action="login.php" method="post">
        <p>Tài Khoản : </p>
        <input type="text" name="taikhoan">
        <p>Mật Khẩu : </p>
        <input type="password" name="matkhau">
        <input type="submit" name="login" value="Đăng Nhập">
     </form>
     </div>
</body>
</html>
