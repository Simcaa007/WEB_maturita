<?php 
require_once('Db.php');
Db::connect("127.0.0.1", "users", "root", "");

$users = Db::queryAll('SELECT * FROM ita4');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<table>
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Matura</th>
        <th>upravit</th>
    </tr>

    <?php foreach($users as $u): ?>

        <tr>
            <td><?= $u['name'] ?></td>
            <td><?= $u['age'] ?></td>
            <td><?= $u['matura'] ?></td>
            <td>
                <form method="GET" action="update.php">
                    <input type="hidden" name="id" value="<?= $u['id']?>">
                    <input type="submit" value="upravit" name="upravit">
                </form>
            </td>
        </tr>

    <?php endforeach; ?>

</table>

<form action="create.php">
<input type="submit" value="vytvorit" name="vytvorit">
</form>

</body>
</html>