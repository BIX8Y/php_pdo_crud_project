<?php
require 'db.php';
$stmt = $pdo->query("SELECT * FROM items");
?>

<h1>Item List</h1>
<a href="create.php">Add New Item</a>
<table border="1">
<tr><th>ID</th><th>Name</th><th>Actions</th></tr>
<?php while ($row = $stmt->fetch()): ?>
<tr>
    <td><?= $row['id'] ?></td>
    <td><?= htmlspecialchars($row['name']) ?></td>
    <td>
        <a href="update.php?id=<?= $row['id'] ?>">Edit</a> | 
        <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete this item?');">Delete</a>
    </td>
</tr>
<?php endwhile; ?>
</table>
