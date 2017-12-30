<?php
require('config/db.php');
require('config/config.php');

//create query
$query = 'SELECT * FROM posts WHERE id < 750';

//get result
$result = mysqli_query($connection, $query);

$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

//Free result form memory
mysqli_free_result($result);

mysqli_close($connection);
?>
<?php include('inc/header.php'); ?>
    <h2>Post List</h2>
    <?php foreach ($posts as $post) : ?>
    <div class="card" style='margin: 2rem'>
        <div class="card-body">
            <h4 class="card-title"><?php echo $post['title']; ?></h4>
            <h6 class="card-subtitle">Created on: <?php echo $post['created_at']; ?> by
            <?php echo $post['author']; ?></h6>
            <p class="card-text" style="height: 100px; overflow: hidden; text-overflow: ellipsis"><?php echo $post['body']; ?></p>
            <a class="card-link" href="<?php echo ROOT_URL . 'post.php?id=' . $post['id']; ?>">More</a>
        </div>
    </div>
    <?php endforeach; ?>
<?php include('inc/footer.php');