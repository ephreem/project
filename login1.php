<?php

$conn = mysqli_connect("localhost", "root","","school");

if(!$conn){
    die("connection failed :" . mysqli_connect_error());
}
$email = $_POST['email'];
$password = $_POST['password'];
$sql = "SELECT * FROM signup WHERE email = '$email'and password = '$password'";
$result3= mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result3);
if($result3){
    if($row=mysqli_num_rows($result3)>0){
        echo '<script>
        localStorage.setItem("user",true);  
        </script>';

        echo '<a href="./home2.html">go to home</a>';
         exit;
        //  header("location:index.html");

    }
    else{
        echo '<script>
        alert("check your password and email");
        </script>';
        // header("location:login.html");
    }
    
}
?>