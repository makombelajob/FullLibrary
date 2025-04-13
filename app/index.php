<?php
require_once 'includes/functions/bookStore.php';
require_once 'includes/pages/header.php';
?>
    <main>
        <div class="now-books">
            <?php foreach ($bookStore as $book) : ?>
                <article>
                    <h2><?php echo $book['title'] ;?></h2>
                    <p><?php echo $book['author'] ;?></p>
                    <p><?php echo $book['year'] ;?></p>
                </article>
            <?php endforeach ?>
        </div>
    </main>
<?php require_once 'includes/pages/footer.php'; ?>
