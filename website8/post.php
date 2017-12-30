<?php
require('config/db.php');
require('config/config.php');

$id = mysqli_real_escape_string($connection, $_REQUEST['id']);

//create query
$query = "SELECT * FROM posts WHERE id = $id";

//get result
$result = mysqli_query($connection, $query);

$post = mysqli_fetch_assoc($result);

//Free result form memory
mysqli_free_result($result);

mysqli_close($connection);
?>
<?php include('inc/header.php'); ?>
    <h1><?php echo $post['title']; ?></h1>
    <h3>Created on: <?php echo $post['created_at']; ?> by
    <?php echo $post['author']; ?></h3>
    <p><?php echo $post['body']; ?></p>
    <a class="btn btn-primary" href="<?php echo ROOT_URL; ?>">Posts list</a>
<?php include('inc/footer.php'); ?>