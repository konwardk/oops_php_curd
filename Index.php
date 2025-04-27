<?php
require_once 'User.php';

$user = new User();
$users = $user->getAll();
?>

<h2>Users List</h2>
<a href="create.php">Create New User</a>
<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Action</th>
</tr>
<?php while($row = $users->fetch(PDO::FETCH_ASSOC)) { ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['name'] ?></td>
    <td><?= $row['email'] ?></td>
    <td>
        <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
        <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
    </td>
</tr>
<?php } ?>
</table>
