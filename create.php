<?php
require_once 'User.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = new User();
    $user->create($_POST['name'], $_POST['email']);
    header("Location: index.php");
    exit();
}
?>

<h2>Create User</h2>
<form method="post">
    Name: <input type="text" name="name" required><br><br>
    Email: <input type="email" name="email" required><br><br>
    <button type="submit">Create</button>
</form>
