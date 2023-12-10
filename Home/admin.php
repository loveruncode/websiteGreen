<?php
//      session_start();

// // $_SESSION['taikhoan'];
//      if(!isset($_SESSION['taikhoan'])){
//         header('Location: login.php');
//      }else{
//         session_destroy();
//      }
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>


    <style>
        .hero-1{
            display:flex;
            padding: 10px;
        }
        .hero-1 h4{
            margin-right: 10px;
            background-color:rgb(20, 154, 198) ;
            color: white;
            padding: 10px;
            border-radius: 5px;
        }
        .hero-1 input{
            height: 30px;
             width: 100%;
            margin: 10px;
        }

        .btnSubmit{
            border-radius: 5px;
            background-color: rgba(0, 206, 168, 0.96);
            color: white;
            font-weight: bold;
        }

    </style>
</head>
<body>
    
<form action="index.php" method="post">
        <div class="hero-1">
                <h4>3dsmax</h4>
                <p>Tên Apps: </p>
                <input type="text" placeholder="Vui Lòng nhập tên app">
                <p>Phiên bản: </p>
                <input type="text" placeholder="Vui Lòng Nhập Tên Phiên Bản">
                <p>Tên file: </p>
                <input type="text" placeholder="Vui lòng nhập tên file ví dụ Autocad2022.rar">
                <input style="width: 100px;" class="btnSubmit" type="submit" value="update">
        </div>
        <div class="hero-1">
                <h4>AutoCad</h4>
                <p>Tên Apps: </p>
                <input type="text" placeholder="Vui Lòng nhập tên app">
                <p>Phiên bản: </p>
                <input type="text" placeholder="Vui Lòng Nhập Tên Phiên Bản">
                <p>Tên file: </p>
                <input type="text" placeholder="Vui lòng nhập tên file ví dụ Autocad2022.rar">
                <input style="width: 100px;" class="btnSubmit" type="submit" value="update">
        </div>
        <div class="hero-1">
                <h4>Sketchup</h4>
                <p>Tên Apps: </p>
                <input type="text" name="appsketchup" placeholder="Vui Lòng nhập tên app">
                <p>Phiên bản: </p>
                <input type="text" name="versionSketchup" placeholder="Vui Lòng Nhập Tên Phiên Bản">
                <p>Tên file: </p>
                <input type="text" name="fileSketchup" placeholder="Vui lòng nhập tên file ví dụ Autocad2022.rar">
                <input name="updateSK" style="width: 100px;" class="btnSubmit" type="submit" value="update">
        </div>
        <div class="hero-1">
                <h4>Chaos Corona</h4>
                <p>Tên Apps: </p>
                <input type="text" placeholder="Vui Lòng nhập tên app">
                <p>Phiên bản: </p>
                <input type="text" placeholder="Vui Lòng Nhập Tên Phiên Bản">
                <p>Tên file: </p>
                <input type="text" placeholder="Vui lòng nhập tên file ví dụ Autocad2022.rar">
                <input style="width: 100px;" class="btnSubmit" type="submit" value="update">
        </div>
        <div class="hero-1">
                <h4>Vray-3Dsmax</h4>
                <p>Tên Apps: </p>
                <input type="text" placeholder="Vui Lòng nhập tên app">
                <p>Phiên bản: </p>
                <input type="text" placeholder="Vui Lòng Nhập Tên Phiên Bản">
                <p>Tên file: </p>
                <input type="text" placeholder="Vui lòng nhập tên file ví dụ Autocad2022.rar">
                <input style="width: 100px;" class="btnSubmit" type="submit" value="update">
        </div>
        <div class="hero-1">
                <h4>Vray-Sketchup</h4>
                <p>Tên Apps: </p>
                <input type="text" placeholder="Vui Lòng nhập tên app">
                <p>Phiên bản: </p>
                <input type="text" placeholder="Vui Lòng Nhập Tên Phiên Bản">
                <p>Tên file: </p>
                <input type="text" placeholder="Vui lòng nhập tên file ví dụ Autocad2022.rar">
                <input style="width: 100px;" class="btnSubmit" type="submit" value="update">
        </div>
        <div class="hero-1">
                <h4>Adobe Photoshop</h4>
                <p>Tên Apps: </p>
                <input type="text" placeholder="Vui Lòng nhập tên app">
                <p>Phiên bản: </p>
                <input type="text" placeholder="Vui Lòng Nhập Tên Phiên Bản">
                <p>Tên file: </p>
                <input type="text" placeholder="Vui lòng nhập tên file ví dụ Autocad2022.rar">
                <input style="width: 100px;" class="btnSubmit" type="submit" value="update">
        </div>
        <div class="hero-1">
                <h4>Adobe AI</h4>
                <p>Tên Apps: </p>
                <input type="text" placeholder="Vui Lòng nhập tên app">
                <p>Phiên bản: </p>
                <input type="text" placeholder="Vui Lòng Nhập Tên Phiên Bản">
                <p>Tên file: </p>
                <input type="text" placeholder="Vui lòng nhập tên file ví dụ Autocad2022.rar">
                <input style="width: 100px;" class="btnSubmit" type="submit" value="update">
        </div>
        <div class="hero-1">
                <h4>Adobe Indesign</h4>
                <p>Tên Apps: </p>
                <input type="text" placeholder="Vui Lòng nhập tên app">
                <p>Phiên bản: </p>
                <input type="text" placeholder="Vui Lòng Nhập Tên Phiên Bản">
                <p>Tên file: </p>
                <input type="text" placeholder="Vui lòng nhập tên file ví dụ Autocad2022.rar">
                <input style="width: 100px;" class="btnSubmit" type="submit" value="update">
        </div>
        <div class="hero-1">
                <h4>Corel-2D</h4>
                <p>Tên Apps: </p>
                <input type="text" placeholder="Vui Lòng nhập tên app">
                <p>Phiên bản: </p>
                <input type="text" placeholder="Vui Lòng Nhập Tên Phiên Bản">
                <p>Tên file: </p>
                <input type="text" placeholder="Vui lòng nhập tên file ví dụ Autocad2022.rar">
                <input style="width: 100px;" class="btnSubmit" type="submit" value="update">
        </div>
        <div class="hero-1">
                <h4>Adobe After Effect</h4>
                <p>Tên Apps: </p>
                <input type="text" placeholder="Vui Lòng nhập tên app">
                <p>Phiên bản: </p>
                <input type="text" placeholder="Vui Lòng Nhập Tên Phiên Bản">
                <p>Tên file: </p>
                <input type="text" placeholder="Vui lòng nhập tên file ví dụ Autocad2022.rar">
                <input style="width: 100px;" class="btnSubmit" type="submit" value="update">
        </div>
        <div class="hero-1">
                <h4>Davinci</h4>
                <p>Tên Apps: </p>
                <input type="text" placeholder="Vui Lòng nhập tên app">
                <p>Phiên bản: </p>
                <input type="text" placeholder="Vui Lòng Nhập Tên Phiên Bản">
                <p>Tên file: </p>
                <input type="text" placeholder="Vui lòng nhập tên file ví dụ Autocad2022.rar">
                <input style="width: 100px;" class="btnSubmit" type="submit" value="update">
        </div>
        <div class="hero-1">
                <h4>Adobe Premierie</h4>
                <p>Tên Apps: </p>
                <input type="text" placeholder="Vui Lòng nhập tên app">
                <p>Phiên bản: </p>
                <input type="text" placeholder="Vui Lòng Nhập Tên Phiên Bản">
                <p>Tên file: </p>
                <input type="text" placeholder="Vui lòng nhập tên file ví dụ Autocad2022.rar">
                <input style="width: 100px;" class="btnSubmit" type="submit" value="update">
        </div>

        <div class="hero-1">
                <h4>Adobe Audition</h4>
                <p>Tên Apps: </p>
                <input type="text" placeholder="Vui Lòng nhập tên app">
                <p>Phiên bản: </p>
                <input type="text" placeholder="Vui Lòng Nhập Tên Phiên Bản">
                <p>Tên file: </p>
                <input type="text" placeholder="Vui lòng nhập tên file ví dụ Autocad2022.rar">
                <input style="width: 100px;" class="btnSubmit" type="submit" value="update">
        </div>
        <div class="hero-1">
                <h4>Media-Encoder</h4>
                <p>Tên Apps: </p>
                <input type="text" placeholder="Vui Lòng nhập tên app">
                <p>Phiên bản: </p>
                <input type="text" placeholder="Vui Lòng Nhập Tên Phiên Bản">
                <p>Tên file: </p>
                <input type="text" placeholder="Vui lòng nhập tên file ví dụ Autocad2022.rar">
                <input style="width: 100px;" class="btnSubmit" type="submit" value="update">
        </div>
        <div class="hero-1">
                <h4>Zbrush</h4>
                <p>Tên Apps: </p>
                <input type="text" placeholder="Vui Lòng nhập tên app">
                <p>Phiên bản: </p>
                <input type="text" placeholder="Vui Lòng Nhập Tên Phiên Bản">
                <p>Tên file: </p>
                <input type="text" placeholder="Vui lòng nhập tên file ví dụ Autocad2022.rar">
                <input style="width: 100px;" class="btnSubmit" type="submit" value="update">
        </div>
        <div class="hero-1">
                <h4>Adobe Subtance</h4>
                <p>Tên Apps: </p>
                <input type="text" placeholder="Vui Lòng nhập tên app">
                <p>Phiên bản: </p>
                <input type="text" placeholder="Vui Lòng Nhập Tên Phiên Bản">
                <p>Tên file: </p>
                <input type="text" placeholder="Vui lòng nhập tên file ví dụ Autocad2022.rar">
                <input style="width: 100px;" class="btnSubmit" type="submit" value="update">
        </div>
        <div class="hero-1">
                <h4>Maya</h4>
                <p>Tên Apps: </p>
                <input type="text" placeholder="Vui Lòng nhập tên app">
                <p>Phiên bản: </p>
                <input type="text" placeholder="Vui Lòng Nhập Tên Phiên Bản">
                <p>Tên file: </p>
                <input type="text" placeholder="Vui lòng nhập tên file ví dụ Autocad2022.rar">
                <input style="width: 100px;" class="btnSubmit" type="submit" value="update">
        </div>
        <div class="hero-1">
                <h4>Mamoset</h4>
                <p>Tên Apps: </p>
                <input type="text" placeholder="Vui Lòng nhập tên app">
                <p>Phiên bản: </p>
                <input type="text" placeholder="Vui Lòng Nhập Tên Phiên Bản">
                <p>Tên file: </p>
                <input type="text" placeholder="Vui lòng nhập tên file ví dụ Autocad2022.rar">
                <input style="width: 100px;" class="btnSubmit" type="submit" value="update">
        </div>
    </form>
    
</body>
</html>

