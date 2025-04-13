<?php
require_once 'includes/functions/getAllBooks.php';
require_once 'includes/functions/bookStore.php';
require_once 'includes/pages/header.php';
?>
<main>
    <div class="all-books">
        <article class="card">
            <?php $books = getAllBooks($bookStore); ?>
        </article>
    </div>
</main>
<?php
include_once 'includes/pages/footer.php';
?>
