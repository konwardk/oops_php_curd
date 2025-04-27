<?php
require_once 'User.php';

$user = new User();

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit();
}

$data = $user->getSingle($_GET['id']);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user->update($_GET['id'], $_POST['name'], $_POST['email']);
    header("Location: index.php");
    exit();
}
?>

<h2>Edit User</h2>
<form method="post">
    Name: <input type="text" name="name" value="<?= $data['name'] ?>" required><br><br>
    Email: <input type="email" name="email" value="<?= $data['email'] ?>" required><br><br>
    <button type="submit">Update</button>
</form>
