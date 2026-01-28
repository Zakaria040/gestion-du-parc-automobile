<?php
session_start();
require_once "config/database.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    if (empty($username) || empty($password)) {
        header("Location: login.php?error=1");
        exit;
    }

    $sql = "SELECT * FROM app_user WHERE username = :username LIMIT 1";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(["username" => $username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user["password"])) {

        $_SESSION["id_app_user"] = $user["id_app_user"];
        $_SESSION["username"]    = $user["username"];
        $_SESSION["role"]        = $user["role"];

        header("Location: dashboard.php");
        exit;

    } else {
        header("Location: login.php?error=1");
        exit;
    }
}
