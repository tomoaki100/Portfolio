<?php require('dbconnect.php') ?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <titile>PRACTICE</titile>
</head>

<body>
        <h2>PRACTICE</h2>
        <main>
            <?php
                $memos=$db->prepare('INSERT INTO memos SET memo=?,created_at=NOW()');
                $memos->bindParam(1,$_POST['memo']);
                $memos->execute();
            ?>
    </main>

</body>

</html>