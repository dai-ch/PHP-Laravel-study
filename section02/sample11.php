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
3,000円のものから100円値引きした場合は、
<?php print(floor(100 / 3000*100)); ?>%引きです。

3,000円のものから100円値引きした場合は、
<?php print(ceil(100 / 3000*100)); ?>%引きです。

3,000円のものから100円値引きした場合は、
<?php print(round( 1.4567, 3)); ?>%引きです。


</pre>
</main>
</body>    
</html>