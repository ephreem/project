<?php
$conn = mysqli_connect("localhost", "root","","school");

if(!$conn){
    die("connection failed :" . mysqli_connect_error());
}
if(isset($_POST['submit']))
// {   $cel = $_POST["cell"];
//     $vilage = $_POST["village"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $sex = $_POST["sex"];
    $country = $_POST["country"];
    $province = $_POST["province"];
    $district = $_POST["district"];
    $sector = $_POST["sector"];
$check="SELECT * FROM signup WHERE email='$email'";
$user = mysqli_query($conn, $check);
$row = mysqli_fetch_array($user);
if ($row=mysqli_num_rows($user)>0) {
    echo "user exists use another email.";
}
else{
    $sql_query = "INSERT INTO signup(fname, lname, password, email, sex, country, province, district, sector)
    VALUES('$fname', '$lname', '$password','$email',' $sex','$country','$province','$district','$sector')";

if(mysqli_query($conn, $sql_query))
{
echo "Registration successfull";
}
else{
echo "Error" . $sql . "" . mysqli_error($conn);
}
mysqli_close($conn);
}

   





?>