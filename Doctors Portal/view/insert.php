<?php

    $username = $_post['username'];
    $password = $_post['password'];
    $gender = $_post['gender'];
    $dob = $_post['dob'];

    if (!empty($username) || !empty($password) || !empty($gender) || !empty($dob) ){
             $host = "localhost";
             $dbusername = "root";
             $dbpassword = "";
             $dbname = "patient data";

             $conn = new mysqli($host, $dbusername, $dbpassword)

             if (mysqli_connect_error()){
                 die('Connect error(' mysqli_connect_error() ')' mysqli_connect_error());
                 else{
                     $select = "select email From register where email= ? Limit 1";
                     $insert = "insert into register(username,password,gender,email)";
                    
                 }
             }
    }else {
        echo "All field are required";
        die();
    }


?>