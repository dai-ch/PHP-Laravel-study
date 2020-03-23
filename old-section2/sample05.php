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
<pre>
<?php $s = 100+1050+200+500; ?>
<?php $tax = 1.08; ?>

合計金額は：<?php print($s); ?>円です。
税込価格は：<?php print($s*$tax); ?>円です。

<?php 

?>
</pre>
</main>
</body>    
</html>