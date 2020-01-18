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
                if(isset($_REQUEST['page'])&& is_numeric($_REQUEST['page'])){
                
                $page=$_REQUEST['page'];
            }else{
                $page=1;
            }
                $start=5*($page-1);
                $memos=$db->prepare('SELECT*FROM memos ORDER BY id  LIMIT ?,5');
                $memos->bindParam(1,$start,PDO::PARAM_INT);
                $memos->execute();
            ?>
    <article>
            <?php while($memo=$memos->fetch()): ?>
            <?php if(mb_strlen($memo['memo'])>50): ?>
            <p><a href="memo.php?id=<?php echo ($memo['id']); ?>"><?php echo(mb_substr( $memo['memo'],0,50)); ?>
            </a>...</p>
            <time><?php echo $memo['created_at']; ?></time>
        <?php else: ?>
            <p><a href="memo.php?id=<?php echo ($memo['id']); ?>"><?php echo(mb_substr( $memo['memo'],0,50)); ?></a></p>
            <time><?php echo $memo['created_at']; ?></time>
        <hr>
        <?php endif;?>
        <?php endwhile;?>

        <?php if($page>=2): ?>
            <a href="index.php?page=<?php echo ($page-1); ?>"><?php echo ($page-1) ?>ページ目へ<a>
        <?php endif; ?>
        |
        <?php 
            $counts=$db->query('SELECT COUNT(*) as cnt FROM memos');
            $count=$counts->fetch();
            $max_page=ceil($count['cnt']/5);
        if($page<$max_page):
        ?>
            <a href="index.php?page=<?php echo ($page+1); ?>"><?php echo ($page+1) ?>ページ目へ<a>
        <?php endif; ?>

    </article>
    </main>
    
</body>

</html>
