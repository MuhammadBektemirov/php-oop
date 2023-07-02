<?php

require_once 'config/bootstrap.php';

$posts = Post::getAll();


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="h1">OOP Blog</h1>
        <ul class="list-group">
            <?php foreach ($posts as $post) : ?>
                <li class="list-group-item">
                    <a style="text-decoration:solid" href="post.php?id=<?= $post->id ?>">
                        <h4><?= $post->id . ' - '  . $post->title ?></h4>
                    </a>
                    <p><?= $post->body ?></p>
                    <a href="post-edit.php?id=<?= $post->id ?>"><button class="btn btn-info">Edit</button></a>
                    <a href="delete-post.php?id=<?= $post->id ?>"><button class="btn btn-danger">Delete</button></a>
                </li>

            <?php endforeach; ?>
        </ul>
        <div class="mt-2">
            <a href="create-post.php"><button class="btn btn-success">Create Post</button></a>
        </div>
    </div>
</body>

</html>