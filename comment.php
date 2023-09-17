<?php
$conn = mysqli_connect("localhost", "root","","school");

if(!$conn){
    die("connection failed :" . mysqli_connect_error());
}
if(isset($_POST['submit']))
// {   $cel = $_POST["cell"];
//     $vilage = $_POST["village"];
    $fname = $_POST["fname"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $sql_query = "INSERT INTO comment(names,email,messages) VALUES('$fname','$email','$message')";

        if(mysqli_query($conn, $sql_query))
        {
             echo '<script> alert("Send Message  successfull")</script>';

            //  header("location:contact.html");
        }
    else{
        echo "Error" . $sql . "" . mysqli_error($conn);

        // header("location:contact.html");
        
    }
    mysqli_close($conn);
?>