<?php

require_once 'bookStore.php';

function getAllBooks($books){

    foreach ($books as $book) {
        echo '<h2>' . $book['title'] .'</h2>';
        echo '<p>' . $book['author'] .'</p>';
        echo '<p>' . $book['year'] .'</p>';
    }
}