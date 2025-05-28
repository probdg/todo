<?php
session_start();
include 'config.php';
$sql = 'SELECT * FROM todo';
$result = $mysqli->query($sql);
?>

HALLO SELAMAT DATANG <?= $_SESSION['username'] ?> <br>
<form method="post" action="create.php">
    <label for="task">Task:</label>
    <input type="text" id="task" name="task" required>
    <button type="submit" value="Submit">
</form>
<br>
<table>
    <tr>
        <th>No</th>
        <th>Task</th>
        <th>Created Date</th>
        <th>Created By</th>
        <th>Updated Date</th>
        <th>Updated By</th>
        <th>Action</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['task'] ?></td>
            <td><?= $row['created_date'] ?></td>
            <td><?= $row['created_by'] ?></td>
            <td><?= $row['updated_date'] ?></td>
            <td><?= $row['updated_by'] ?></td>
            <td>
                <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
                <a href="delete.php?id=<?= $row['id'] ?>">Delete</a>
            </td>
        <?php } ?>
</table>

<?php session_write_close(); ?>