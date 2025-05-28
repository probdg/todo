<?php
session_start();
include 'config.php';
$sql = 'SELECT * FROM todo';
$result = $mysqli->query($sql);

$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : null;
$sql_edit = 'SELECT * FROM todo WHERE id = ?';
$stmt_edit = $mysqli->prepare($sql_edit);
if ($stmt_edit) {
    $stmt_edit->bind_param("i", $_GET['id']);
    $stmt_edit->execute();
    $result_edit = $stmt_edit->get_result();
    if ($result_edit && $result_edit->num_rows > 0) {
        $row_edit = $result_edit->fetch_assoc();
    } else {
        echo "No record found for the given ID.";
    }
} else {
    echo "Error: " . $mysqli->error;
}
?>

HALLO SELAMAT DATANG <?= $_SESSION['username'] ?> <br>
<form method="post" action="update.php">
    <input type="hidden" name="id" value="<?= isset($row_edit['id']) ? $row_edit['id'] : '' ?>">
    <label for="task">Task:</label>
    <input type="text" id="task" name="task" value="<?= isset($row_edit['task']) ? $row_edit['task'] : '' ?>" required>
    <button type="submit" value="Submit">
</form>
<br>
<br>
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