<?php

require_once 'config/bootstrap.php';
$post_id = $_GET['id'];
$post = Post::getPostById($post_id);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['DELETE'])) {
    $result = Post::getDeletePost($post_id);
    
    if($result == 1) {
        header('Location: index.php');
        exit;
    }
}

require './requires/header.php'
?>

<div class="container mt-5">
    <form action="" method="POST">
        <h1>Post <?= $post->id ?></h1>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="hidden" name="DELETE">
            <input type="text" class="form-control" id="exampleFormControlInput1" name="title" placeholder="title" value="<?= $post->title ?>" />

        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Body</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="body"><?= $post->body ?></textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-danger">Delete</button>
        </div>
    </form>
</div>

</body>

</html>