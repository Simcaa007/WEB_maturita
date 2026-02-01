<?php 

    require_once('Db.php');
    Db::connect('127.0.0.1', 'users', 'root', '');

    if(isset($_POST['pridat'])){
        Db::insert('ita4', [
            'name' => $_POST['name'],
            'age' => $_POST['age'],
            'matura' => $_POST['matura']
        ]);

        header('Location: index.php');
        die;
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
    
<form method="POST">
    <input type="text" name="name">
    <input type="number" name="age">
    <input type="text" name="matura">
    <input type="submit" value="pridat" name="pridat">
</form>

</body>
</html>