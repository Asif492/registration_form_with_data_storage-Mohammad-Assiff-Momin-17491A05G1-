<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$Lastname = filter_input(INPUT_POST, 'Lastname');
$Firstname = filter_input(INPUT_POST, 'Firstname');
$address = filter_input(INPUT_POST,'address');
$gender = filter_input(INPUT_POST, 'gender');

if (!empty($username)){
if (!empty($password)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "asif";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO data (username, password,Firstname,Lastname,gender,address)
values ('$username','$password','$Firstname','$Lastname','$gender','$address')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>