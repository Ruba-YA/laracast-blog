<!DOCTYPE html>

<title>My Blog!</title>
<link rel="stylesheet" href="/app.css">
<body>

<!-- <h1>Hello World !!</h1> -->
<article>
<h1>
<?= $post->title; ?></h1>
<div><?= $post->body;?></div>
<a href="/">GO Home!</a>