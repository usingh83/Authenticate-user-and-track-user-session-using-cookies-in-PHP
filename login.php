<?php
session_start();
$name = "";
$username = "";
$password ="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        header('Location: login.html');
    }
    elseif (empty($_POST["username"])) {   
        header('Location: login.html');
    } 
    elseif (empty($_POST["password"])) {
        header('Location: login.html');
    } 
	else {
	$password = test_input($_POST["password"]);	
    $username = test_input($_POST["username"]);
	$name = test_input($_POST["name"]);
	$_SESSION['$name'] = $name;
	$_SESSION['$username'] = $username;
    header('Location: welcome.php');
	}
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>