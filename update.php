<?php
require 'db.php';
$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM items WHERE id = ?");
$stmt->execute([$id]);
$item = $stmt->fetch();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $stmt = $pdo->prepare("UPDATE items SET name = ? WHERE id = ?");
    $stmt->execute([$name, $id]);
    header("Location: index.php");
    exit;
}
?>
<h1>Edit Item</h1>
<form method="post">
    Name: <input type="text" name="name" value="<?= htmlspecialchars($item['name']) ?>" required>
    <input type="submit" value="Update">
</form>
