<?php
session_start();
require_once 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];
    
    // Validasi
    $errors = [];
    
    if (empty($email) || empty($username) || empty($password) || empty($confirm_password)) {
        $errors[] = "All fields are required";
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }
    
    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match";
    }
    
    if (strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters";
    }
    
    // Cek jika email/username sudah ada
    $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ? OR username = ?");
    $stmt->execute([$email, $username]);
    if ($stmt->rowCount() > 0) {
        $errors[] = "Email or username already exists";
    }
    
    // Jika tidak ada error, simpan ke database
    if (empty($errors)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        $stmt = $pdo->prepare("INSERT INTO users (email, username, password) VALUES (?, ?, ?)");
        
        if ($stmt->execute([$email, $username, $hashed_password])) {
            $_SESSION['success'] = "Register berhasil, silakan login";
            header("Location: login.php");
            exit();
        } else {
            $errors[] = "Registration failed. Please try again.";
        }
    }
    
    // Simpan errors di session untuk ditampilkan di form
    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['old_email'] = $email;
        $_SESSION['old_username'] = $username;
        header("Location: register.php");
        exit();
    }
} else {
    header("Location: register.php");
    exit();
}
?>