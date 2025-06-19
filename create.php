<?php
require 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $stmt = $pdo->prepare("INSERT INTO items (name) VALUES (?)");
    $stmt->execute([$name]);
    header("Location: index.php");
    exit;
}
?>
<h1>Add Item</h1>
<form method="post">
    Name: <input type="text" name="name" required>
    <input type="submit" value="Save">
</form>
