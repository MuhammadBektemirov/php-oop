<?php 

require_once './config/bootstrap.php';

$post_id = $_GET['id'];
$post = Post::getPostById($post_id);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= 'Post: ' . $post_id ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5 border p-4" >
        <div class="border ps-2">
            <h1>Post - <?= $post->id ?></h1>
        </div>
        <div class="border p-2 mt-2">
            <h4><?= $post->title ?></h4>
            <p><?= $post->body ?></p>
        </div>
        <small><?= $post->created_at ?></small>
        <div class="mt-2">
        <a href="index.php"><button class="btn btn-success">back</button></a>    
        </div>
    </div>
</body>
</html>