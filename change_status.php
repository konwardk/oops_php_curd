<?php
require_once 'Database.php';
require_once 'User.php';

if (isset($_GET['id']) && isset($_GET['status'])) {
    $database = new Database();
    $db = $database->getConnection();

    $user = new User($db);

    $id = $_GET['id'];
    $newStatus = $_GET['status'];

    if ($user->changeStatus($id, $newStatus)) {
        header("Location: index.php?message=Status Updated Successfully");
        exit;
    } else {
        header("Location: index.php?error=Failed to Update Status");
        exit;
    }
} else {
    header("Location: index.php?error=Invalid Request");
    exit;
}
