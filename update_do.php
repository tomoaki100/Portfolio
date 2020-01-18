<?php require('dbconnect.php') ?>

<!DOCTYPE html>

<html lang="ja">

<head>
    <meta charset="utf8">
    <title>Practice</title>
</head>

<body>
    <h2>Practice</h2>
    <main>


        <?php  
            $statement=$db->prepare('UPDATE memos SET memo=? WHERE id=?');
            $statement->execute(array($_POST['memo'],$_POST['id']));
        ?>

    </main>
    <p>メモの内容を変更しました</p>
    <p><a href="index.php">戻る</p>

</body>

</html>
