<?php

function addBook($title, $author, $year, $books) {

    $newBook = [
        'title' =>  $title,
        '$author' => $author,
        'year' =>  $year
    ];

    $books[] = $newBook;
    return $books;
}

