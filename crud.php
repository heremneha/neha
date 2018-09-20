<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "userdb";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
//print_r($_POST);exit();
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $address=$_POST['address'];
    $password=$_POST['password'];
    //$sql = "INSERT INTO user('name', 'email', 'password','mobile') VALUES($name, $email, $password,$mobile)";
    $sql = "INSERT INTO `reg`(`name`, `email`,`mobile` ,`address`,`password`) VALUES ('$name', '$email','$mobile','$address','$password')";
    //echo  $sql;exit();


if (mysqli_query($conn, $sql)) {


    $response['satus'] = True;
    $response['message'] = "registration successful";

  

} else {
    $response['satus'] = False;
    $response['message'] = "Error in registration";
   
    //echo "Error creating table: " . mysqli_error($conn);
}

echo json_encode($response);
?>
