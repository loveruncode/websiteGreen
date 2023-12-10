<?php
    $db_sever = "localhost";
    $db_user= "root";
    $db_pass = "";
    $db_name ="apps";
    $conn = "";
try{
    $conn =  mysqli_connect($db_sever,$db_user, $db_pass, $db_name);
}catch(mysqli_sql_exception){
     echo "could not connect!";
}
   echo "";
   

?>