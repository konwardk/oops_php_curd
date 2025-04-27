<?php
require_once 'User.php';

if (isset($_GET['id'])) {
    $user = new User();
    $user->delete($_GET['id']);
}

header("Location: index.php");
exit();
?>
