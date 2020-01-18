<?php require('dbconnect.php') ?>

<!DOCTYPE html>

<html lang="ja">

<head>
    <meta charset="utf8">
    <title>メモ</title>
</head>

<body>
    <h2>Practice</h2>
    <main>
        <?php
            if(isset($_REQUEST['id'])&& is_numeric($_REQUEST['id'])){
            $id=$_REQUEST['id'];
            $statement=$db->prepare('DELETE FROM memos WHERE id=?');
            $statement->execute(array($id));
            }
        ?>
    </main>

    <p>メモを削除しました</p>
    <p><a href="index.php">戻る</a><p>

</body>

</html>
