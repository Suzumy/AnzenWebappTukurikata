<?php
require_once __DIR__ . '/DB.php';
$user_name = $_POST['user_name'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE user_name ='".$user_name."' AND password = '".$password."'";
$stmt = $pdo -> prepare($sql);
$stmt -> execute();
$user = $stmt -> fetch();
var_dump($user);

if(empty($user) == true){
    header("Location: http://localhost/AnzenWebAppTukurikata/login.php");
}else{
    header("Location: http://localhost/AnzenWebAppTukurikata/index.php");
}

?>