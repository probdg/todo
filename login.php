<?php session_start(); ?>
<form method="post" action="prosess_login.php">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required><br>
    <label for="password">Password:</label>
    <input type="text" id="password" name="password" required><br>
    <button type="submit" value="Submit">Login</button>
</form>
<?php
if (isset($_SESSION["error"])) {
    echo "<p style='color: red;'>" . $_SESSION["error"] . "</p>";
    unset($_SESSION["error"]);
}
session_write_close();
?>