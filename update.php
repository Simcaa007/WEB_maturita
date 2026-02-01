<?php 
    require_once('Db.php');
    Db::connect('127.0.0.1', 'users', 'root', '');

    $id = $_GET['id'];

    $user = Db::queryOne('SELECT * FROM ita4 WHERE id=?', $id);

    if(isset($_POST['upravit'])){
        Db::update('ita4', [
            'name' => $_POST['name'],
            'age' => $_POST['age'],
            'matura' => $_POST['matura']
        ]);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>name: <?= $user['name']?></p>
    <p>age: <?= $user['age']?></p>
    <p>matura: <?= $user['matura']?></p>

    <form method="POST">
        <input type="text" name="name" value="<?=$user['name']?>">
        <input type="number" name="age" value="<?= $user['age']?>">
        <input type="text" name="matura" value="<?= $user['matura']?>">
        <input type="submit" value="upravit" name="upravit">
    <form>
</body>
</html>