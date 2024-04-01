<?php

include 'includes/database.php';

// SQL query to select all posts
$sql = "SELECT * FROM posts ORDER BY title";

// Execute the query
$results = mysqli_query($connection, $sql);

// Check if query was successful
if ($results === false) {
    echo "Error: " . mysqli_error($connection);
} else {
    // Fetch all rows from the result set
    $posts = mysqli_fetch_all($results, MYSQLI_ASSOC);
}

// Close the connection
mysqli_close($connection);
?>
    <?php include "includes/header.php"; ?>
       <div class="container">
        <?php foreach($posts as $post): ?>
            <div class="poem">
                <article>
                    <h2><a href="post.php?id=<?= $post['id'] ; ?>"><?= $post['title']; ?></a></h2><br>
                    <p><?= $post['description']; ?></p><br>
                    <p> - <?= $post['Writer']; ?></p>
                </article>
            </div>
        <?php endforeach; ?>

        </div> 
    <?php include "includes/footer.php" ?>


