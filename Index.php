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
    <th>Status</th>
    <th>Change Status</th>
    <th>Action</th>
</tr>
<?php while($row = $users->fetch(PDO::FETCH_ASSOC)) { ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= $row['name'] ?></td>
    <td><?= $row['email'] ?></td>
    <td>
    <p>
        <?= $row['status_name'] ?? 'Pending' ?>
    </p>
</td>


<td>
    <a href="change_status.php?id=<?= $row['id'] ?>&status=1" onclick="return confirm('Are you sure?')">Approve</a> |
    <a href="change_status.php?id=<?= $row['id'] ?>&status=2" onclick="return confirm('Are you sure?')">Reject</a> |
    <a href="change_status.php?id=<?= $row['id'] ?>&status=3" onclick="return confirm('Are you sure?')">Hold</a>
</td>

    <td>
        <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
        <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
    </td>
</tr>
<?php } ?>
</table>
