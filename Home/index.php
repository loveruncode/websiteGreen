<?php   

        // hien thi loi 
        // error_reporting(E_ALL);
        // ini_set('display_errors', 1);
 // IT Apps 
    

 //
   

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <title>Thư Viện Green</title>


    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            font-family: 'Roboto', sans-serif;
            scroll-behavior: smooth;
        }

        .container {
            height: 1000px;

        }

        .navbar {
            position: fixed;
            background: #fff;
            height: 10%;
            width: 100%;
            display: flex;
            border-bottom: 1.5px rgb(20, 154, 198) solid;
            color: rgb(20, 154, 198);
            justify-content: space-around;
            align-items: center;
            padding: 10px;
            cursor: pointer;
            z-index: 999;
        }

        .brand {
            display: flex;
            margin: 5px;
        }

        .brand img {
            margin-right: 5px;
        }

        .brand h1 {
            margin-top: 5%;
        }

        .navbar ul {
            list-style-type: none;
            display: flex;
            margin: 10px;
        }

        .navbar ul li {
            padding: 5px 30px 5px 30px;
        }

        .navbar ul li:hover {
            border-bottom: 1px solid rgb(20, 154, 198);
            transform: scale(1.2);

        }

        .navbar ul li a {
            text-decoration: none;
            color: rgb(20, 154, 198);
        }

        .navbar ul li a:hover {
            border-bottom: 1px solid rgb(20, 154, 198);
            transform: scale(1.2);
        }

        .navbar img {
            margin-left: 50px;
        }

        .container-mid {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url('../images/bb.jpg');
        }

        .book {
            font-weight: bold;
            padding: 20px;
            border: 1px #fff solid;
            text-align: center;
            color: white;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        .book h2 {
            font-size: 40px;
        }

        .book a {

            color: white;
            /* Màu chữ trên nút */
            padding: 10px 20px;
            /* Kích thước của nút */
            border: none;
            /* Loại bỏ đường viền */
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-top: 20px;
            cursor: pointer;
            border: 1px white solid;
        }

        .book a:hover {
            transform: scale(1.25);

        }

        section {
            display: grid;
            place-items: center;
            align-content: center;
            min-height: 100vh;

        }

        .hidden {
            opacity: 0;
            filter: blur(5px);
            transform: translateX(-100%);
            transition: all 1s;

        }

        .logo img:hover{
            transform: scale(1.15);
        }
     

        .show {
            opacity: 1;
            filter: blur(0);
            transform: translateX(0);
        }

        .logo {
            display: flex;
            margin: 25px;
           
        }
        

        .logo hidden {
            margin: 1px;
            flex-direction: column;
        }
        
         .download {
             margin-top: 140px;
            position:absolute;
            background-color: white;
            min-width: 100px;
            box-shadow: 2px 2px 5px black;
        }
        .download a{
            text-decoration: none;
            padding: 10px;
            color: rgb(20, 154, 198);
            font-weight: bold;
        }
        .download a:hover{
            background:rgb(20, 154, 198) ;
            color: white;
        }

        .logo:nth-child(2) {
            transition-delay: 200ms;
        }

        .logo:nth-child(3) {
            transition-delay: 400ms;
        }

        .logo:nth-child(4) {
            transition-delay: 600ms;
        }

        .logo:nth-child(5) {
            transition-delay: 800ms;
        }

        .thietkenoithat {
            background: white;
            padding: 20px;
            font-size: 65px;
            color: black;
            margin-bottom: 50px;
            border: 1px solid black;
            font-weight: bold;
            box-shadow: 0px -5px 10px 0px rgba(0, 0, 0, 0.5);
        }

        .it {
            background: white;
            padding: 20px;
            font-size: 65px;
            color: black;
            margin-bottom: 50px;
            border: 1px solid black;
            font-weight: bold;
            box-shadow: 0px -5px 10px 0px rgba(0, 0, 0, 0.5);
        }

        .graphic-design {
            background: white;
            padding: 20px;
            font-size: 65px;
            color: black;
            margin-bottom: 50px;
            border: 1px solid black;
            font-weight: bold;
            box-shadow: 0px -5px 10px 0px rgba(0, 0, 0, 0.5);
        }

        .video {
            padding: 20px;
            font-size: 65px;
            color: rgb(238, 236, 236);
            margin-bottom: 50px;
            border: 1px solid black;
            font-weight: bold;
            box-shadow: 0px -5px 10px 0px rgba(0, 0, 0, 0.5);
        }

        .mod {
            background: white;
            padding: 20px;
            font-size: 65px;
            color: rgb(9, 9, 9);
            margin-bottom: 50px;
            border: 1px solid black;
            font-weight: bold;
            box-shadow: 0px -5px 10px 0px rgba(0, 0, 0, 0.5);
        }

        #progress {

            position: fixed;
            bottom: 20px;
            right: 10px;
            height: 70px;
            width: 70px;
            display: grid;
            place-items: center;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            cursor: pointer;
            z-index: 999;
        }

        #progress-button {
            border: none;
            display: block;
            height: calc(100%-35px);
            width: calc(100% -35px);
            border-radius: 50%;
            display: grid;
            place-items: center;
            font-size: 15px;
            color: #001a2e;

        }

        .h1-dd {
            font-size: 20px;
        }

       
     
    </style>
</head>

<body>
    <div id="progress">
        <button id="progress-button">&#x2191;</button>
    </div>
    <div class="container">
        <nav class="navbar">
            <div id="trangchu" class="brand">
                <img class="hinhanhgreen" src="../images/logo-gr.png" alt="hinh anh" width="15%">
                <h1 class="h1-dd">THƯ VIỆN GREEN & TẢI PHẦN MỀM 📚</h1>
            </div>

            <ul>
                <li onclick="scrollToSection('secit')">IT</li>
                <li onclick="scrollToSection('secnoithat')">Interior Design</li>
                <li onclick="scrollToSection('secmod')">3D Modeling</li>
                <li onclick="scrollToSection('secgraphic')"> Graphic Design</li>
                <li onclick="scrollToSection('secvideo')"> Video Editor</li>
                <li> <a href="login.php">Admin</a></li>
            </ul>
            <img src="../images/Green.png" alt="hinh anh green" width="70px">
        </nav>
        <div class="container-mid">
            <div class="book">
                <h2>Hướng Dẫn Lấy Tài Liệu</h2>
                <a href="login.php"> Tải Tài Liệu</a>
            </div>
        </div>

        <section id="secnoithat" style=" background-image: url('../images/noithat.jpg');" class="hidden" width="100%">
            <p class="thietkenoithat">Interior Design</p>
            <div class="logo">
                <div class="logo hidden">
                <img class="imgk"  src='../images/sk.jpg' alt='Sketch' height='120px' width='120px'>
                        <div class="download">
                            <?php
                            echo"<a style='display: none;' class='taiwin' href='../../apps/'>Download for Window</a>";
                             echo"<a style='display: none;' class='taimac' href='#'>Download for Macos</a>" ;
                            ?>
                          
                        </div>
                </div>   
               
                     

                <div class="logo hidden">
                    <img class="imgk"  src="../images/3d.png" alt="Sketch" width="120px">
                    <div class="download">
                            <a style="display: none;" class="taiwin" href="#">Download for Window</a>
                            <a style="display: none;" class="taimac" href="#">No Version for Macos</a>
                        </div>
                </div>

                <div class="logo hidden">
                    <img class="imgk"   src="../images/autocad.png" alt="Sketch" width="120px">
                    <div class="download">
                            <a style="display: none;" class="taiwin" href="#">Download for Window</a>
                            <a style="display: none;" class="taimac" href="#">Download for Macos</a>
                        </div>
                </div>
                <div class="logo hidden">
                    <img class="imgk"  src="../images/vray.png" alt="Sketch" width="120px">
                    <div class="download">
                            <a style="display: none;" class="taiwin" href="#">Download for Window</a>
                            <a style="display: none;" class="taimac" href="#">No Version for Macos</a>
                        </div>
                </div>
                <div class="logo hidden">
                    <img class="imgk"  src="../images/chaos.jpg" alt="Sketch" width="120px">
                    <div class="download">
                            <a style="display: none;" class="taiwin" href="#">Download for Window</a>
                            <a style="display: none;" class="taimac" href="#">No Version for Macos</a>
                        </div>
                </div>
            </div>
        </section>
        <section id="secit" style="background-image: url('../images/it.avif'); " class="hidden" width="100%">
            <p class="it">IT</p>
            <div class="logo">
                <div class="logo hidden">
                    <img class="imgk" src="../images/vs2022tim.png" alt="Sketch" width="155px">
                    <div class="download">
                            <a style="display: none;" class="taiwin" href="#">Download for Window</a>
                            <a style="display: none;" class="taimac" href="#">Download for Macos</a>
                        </div>
                </div>
                <div class="logo hidden">
                    <img class="imgk"  src="../images/unity.png" alt="Sketch" width="130px">
                    <div class="download">
                            <a style="display: none;" class="taiwin" href="#">Download for Window</a>
                            <a style="display: none;" class="taimac" href="#">Download for Macos</a>
                        </div>
                </div>

                <div class="logo hidden">
                    <img class="imgk" src="../images/vsrm.png" alt="Sketch" width="130px">
                    <div class="download">
                            <a style="display: none;" class="taiwin" href="#">Download for Window</a>
                            <a style="display: none;" class="taimac" href="#">Download for Macos</a>
                        </div>
                </div>
                <div class="logo hidden">
                    <img class="imgk" src="../images/no.png" alt="Sketch" width="130px">
                    <div class="download">
                            <a style="display: none;" class="taiwin" href="#">Download for Window</a>
                            <a style="display: none;" class="taimac" href="#">Download for Macos</a>
                        </div>
                </div>
                <div class="logo hidden">
                    <img class="imgk" src="../images/xm.png" alt="Sketch" width="130px">
                    <div class="download">
                            <a style="display: none;" class="taiwin" href="#">Download for Window</a>
                            <a style="display: none;" class="taimac" href="#">Download for Macos</a>
                        </div>
                </div>
            </div>

        </section>
        <section id="secgraphic" style="background-image: url('../images/graphic.jpg'); " class="hidden" width="100%">
            <p class="graphic-design">Graphic Design</p>
            <div class="logo">
                <div class="logo hidden">
                    <img class="imgk" src="../images/pts1.png" alt="Sketch" width="190px">
                    <div class="download">
                            <a style="display: none;" class="taiwin" href="#">Download for Window</a>
                            <a style="display: none;" class="taimac" href="#">Download for Macos(Chip-Intel)</a>
                            <a style="display: none;" class="taimac" href="#">Download for Macos(Chip-M1,M2)</a>
                        </div>
                </div>
                <div class="logo hidden">
                    <img class="imgk"  src="../images/ai1.png" alt="Sketch" height="130px" width="190px">
                    <div class="download">
                            <a style="display: none;" class="taiwin" href="#">Download for Window</a>
                            <a style="display: none;" class="taimac" href="#">Download for Macos(Chip-Intel)</a>
                            <a style="display: none;" class="taimac" href="#">Download for Macos(Chip-M1,M2)</a>
                        </div>
                </div>

                <div class="logo hidden">
                    <img class="imgk" src="../images/id.png" alt="Sketch" height="170px" width="160px">
                    <div class="download">
                            <a style="display: none;" class="taiwin" href="#">Download for Window</a>
                            <a style="display: none;" class="taimac" href="#">Download for Macos(Chip-Intel)</a>
                            <a style="display: none;" class="taimac" href="#">Download for Macos(Chip-M1,M2)</a>
                        </div>
                </div>
                <div class="logo hidden">
                    <img class="imgk" src="../images/corel11.png" alt="Sketch" width="190px">
                    <div class="download">
                            <a style="display: none;" class="taiwin" href="#">Download for Window</a>
                            <a style="display: none;" class="taimac" href="#">Download for Macos</a>
                        </div>
                </div>
            </div>
        </section>

        <section id="secvideo" style="background-image: url('../images/video.jpg'); " class="hidden" width="100%">
            <p class="video">Video Editor</p>
            <div class="logo">
                <div class="logo hidden">
                    <img class="imgk"  src="../images/ae.png" alt="Sketch" width="120px">
                    <div class="download">
                            <a style="display: none;" class="taiwin" href="#">Download for Window</a>
                            <a style="display: none;" class="taimac" href="#">Download for Macos(Chip-Intel)</a>
                            <a style="display: none;" class="taimac" href="#">Download for Macos(Chip-M1,M2)</a>
                        </div>
                </div>


                <div class="logo hidden">
                    <img  class="imgk"  src="../images/prpr.png" alt="Sketch" height="180px" width="180px">
                    <div class="download">
                            <a style="display: none;" class="taiwin" href="#">Download for Window</a>
                            <a style="display: none;" class="taimac" href="#">Download for Macos(Chip-Intel)</a>
                            <a style="display: none;" class="taimac" href="#">Download for Macos(Chip-M1,M2)</a>
                        </div>
                </div>

                <div class="logo hidden">
                    <img class="imgk"  src="../images/au.png" alt="Sketch" height="140px" width="120px">
                    <div class="download">
                            <a style="display: none;" class="taiwin" href="#">Download for Window</a>
                            <a style="display: none;" class="taimac" href="#">Download for Macos</a>
                        </div>
                </div>
                <div class="logo hidden">
                    <img class="imgk"   src="../images/davin.png" alt="Sketch" width="140px">
                    <div class="download">
                            <a style="display: none;" class="taiwin" href="#">Download for Window</a>
                            <a style="display: none;" class="taimac" href="#">Download for Macos</a>
                        </div>
                </div>
                <div class="logo hidden">
                    <img  class="imgk"   src="../images/en.png" alt="Encode" height="140px" width="120px">
                    <div class="download">
                            <a style="display: none;" class="taiwin" href="#">Download for Window</a>
                            <a style="display: none;" class="taimac" href="#">Download for Macos</a>
                        </div>
                </div>
            </div>
        </section>
        <section id="secmod" style="background-image: url('../images/modback.jpg'); " class="hidden" width="100%">
            <p class="mod">3D Modeling</p>
            <div class="logo">
                <div class="logo hidden">
                    <img class="imgk"  src="../images/brush.png" alt="Sketch" width="140px">
                    <div class="download">
                            <a style="display: none;" class="taiwin" href="#">Download for Window</a>
                            <a style="display: none;" class="taimac" href="#">Download for Macos</a>
                        </div>
                </div>


                <div class="logo hidden">
                    <img class="imgk"  src="../images/maya.png" alt="Sketch" width="120px">
                    <div class="download">
                            <a style="display: none;" class="taiwin" href="#">Download for Window</a>
                            <a style="display: none;" class="taimac" href="#">Download for Macos</a>
                        </div>
                </div>

                <div class="logo hidden">
                    <img class="imgk"  src="../images/subb.png" alt="Sketch" width="120px">
                    <div class="download">
                            <a style="display: none;" class="taiwin" href="#">Download for Window</a>
                            <a style="display: none;" class="taimac" href="#">Download for Macos</a>
                        </div>
                </div>
                <div class="logo hidden">
                    <img class="imgk"  src="../images/mamoo.png" alt="Sketch" width="120px">
                    <div class="download">
                            <a style="display: none;" class="taiwin" href="#">Download for Window</a>
                            <a style="display: none;" class="taimac" href="#">Download for Macos</a>
                        </div>
                </div>

            </div>
        </section>

    </div>
    <script>





        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                console.log(entry)
                if (entry.isIntersecting) {
                    entry.target.classList.add('show');
                } else {
                    entry.target.classList.remove('show');
                }
            })
        })
        const hiddenElement = document.querySelectorAll('.hidden');
        hiddenElement.forEach((el) => observer.observe(el));
        // click to scroll
        function scrollToSection(sectionId) {
            var section = document.getElementById(sectionId);
            if (section) {
                section.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }

        // button
        document.getElementById('progress-button').addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        document.getElementById('trangchu').addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
               
      
            let taiwin = document.querySelectorAll('.taiwin');
            let taimac = document.querySelectorAll('.taimac');
            let im = document.querySelectorAll('.imgk');

                im.forEach((e) =>{
                    e.addEventListener('mouseover',() =>{
                        taimac.forEach((e) =>{
                            e.style.display = 'block';
                            setTimeout(()=>{
                                e.style.display ='none';
                            },4000);
                        })
                        taiwin.forEach((e)=>{
                            e.style.display = 'block';
                            setTimeout(()=>{
                                e.style.display ='none';
                            },6000);
                        })
                    })
                })

            // im.addEventListener('mouseover', () =>{
            //     console.log(1);
            //   taimac.style.display ='block';
            //   taiwin.style.display ='block';
            //   setTimeout(() => {
            //  taimac.style.display = "none";
            //  taiwin.style.display = "none";
            //    }, 5000);
            // })
           
          
        
     

    </script>
</body>

</html>