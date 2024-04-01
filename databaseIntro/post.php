<?php
  
include 'includes/database.php';

if(isset($_GET['id']) && is_numeric($_GET['id'])){

// SQL query to select all posts
$sql = "SELECT * FROM posts WHERE id = " . $_GET['id'];

// Execute the query
$results = mysqli_query($connection, $sql);

// Check if query was successful
if ($results === false) {
    echo "Error: " . mysqli_error($connection);
} else {
    // Fetch all rows from the result set
    $post = mysqli_fetch_assoc($results);
}

}else{
    $post = null;
}

// Close the connection
mysqli_close($connection);
?>

<?php include "includes/header.php"; ?>
       <div class="container">
        <?php if($post === null): ?>
            <h1> No post found </h1>
        <?php else: ?>
                <article>
                    <h2><?= $post['title']; ?> By <?= $post['Writer'] ?></h2>
                    <p><?= $post['description']; ?></p>
                    <p> - <?= $post['Writer']; ?></p>
                </article>
        <?php endif; ?>
     </div>
<?php include "includes/footer.php"; ?>