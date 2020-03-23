<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<?php
require('dbconnect.php');//DB接続メソッド

if (isset($_REQUEST['page']) && is_numeric($_REQUEST['page'])){
    $page = $_REQUEST['page'];
} else {
    $page = 0;
}


$page = (int)$_REQUEST['page'];
$start = 5 * ($page - 1 );//１画面に表示するカラム数の設定


$memos = $db->prepare('SELECT * FROM memos ORDER BY id DESC LIMIT ?,5');//$memoに登録データを遷移
$memos->bindParam(1,$_REQUEST['page'],PDO::PARAM_INT);
$memos->execute();

?>

<article><!-- 登録データを画面に表示する   -->
    <?php while ($memo = $memos->fetch()): ?>
        <p><a href="memo.php?id=<?php print($memo['id']); ?>"><?php print(mb_substr($memo['memo'],0,30)); ?></a></p>
        <time><?php print($memo['created_at']); ?></time>
        <hr>
    <?php endwhile; ?>

    <?php if($page >= 1): ?>
        <a href ="index.php?page=<?php print($page-1); ?>"><?php print($page); ?>ページ目へ</a>
    <?php endif; ?>
    |
    <?php
    $counts = $db->query('SELECT COUNT(*) as cnt FROM memos');
    $count = $counts->fetch();
    $max_page = ceil($count['cnt'] / 5);
    if ($page < $max_page):
    ?>
    <a href ="index.php?page=<?php print($page+1); ?>"><?php print($page+2); ?>ページ目へ</a>
    <?php endif; ?>
</article>

</main>
</body>    
</html>