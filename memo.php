<?php require('dbconnect.php') ?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <titile></titile>
</head>

<body>
    <h2>PRACTICE</h2>
    <main>
        <?php
            $id=$_REQUEST['id'];
            if(!is_numeric($id)||$id<=0){
            echo '1以上の数字で指定してください';
            exit();
            }
            $memos=$db->prepare('SELECT *FROM memos WHERE id=?');
            $memos->execute(array($_REQUEST['id']));
            $memo=$memos->fetch();
        ?>
        <article>
            <?php echo $memo['memo']; ?><br><br>
            <a href="update.php?id=<?php echo ($memo['id']); ?>">編集する</a>
            |
            <a href="delete.php?id=<?php echo ($memo['id']); ?>">削除する</a>
            |
            <a href="index.php">戻る</a>
        </article>

    </main>

</body>

</html>