<?php
$conn = mysqli_connect("localhost","root","","school");

if(!$conn){
    die("connection failed :" . mysqli_connect_error());
}
if(isset($_POST['submit']))
 {  
    // $cel = $_POST["cell"];
//     $vilage = $_POST["village"];
    $names = $_POST["names"];
    $age = $_POST["age"];
    $school = $_POST["school"];
    $country = $_POST["country"];
    $province = $_POST["province"];
    $district = $_POST["district"];
    $sector = $_POST["sector"];
    $cell = $_POST["cell"];
    $village = $_POST["village"];
    $combination = $_POST["combination"];
    $class = $_POST["class"];
    $reason = $_POST["reason"];

    $sql_query = "INSERT INTO application(names,age,school,country,province,district,sector,cell,village,combination,class,reason) VALUES('$names', '$age', '$school','$country','$province','$district','$sector','$cell','$village','$combination','$class','$reason')";
    $result = mysqli_query($conn, $sql_query);
        if($result)
        {
            echo '<script>alert("Registration successfull")</script>';
        }
    else{
        echo "Error" . $sql . "" . mysqli_error($conn);
    }}
    mysqli_close($conn);
?>