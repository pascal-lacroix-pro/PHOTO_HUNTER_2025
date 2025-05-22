<?php

namespace App\Controllers\AuthorsController;

use \PDO;
use \App\Models\AuthorsModel;

function showAction(PDO $connexion, string $id): void
{
    include_once '../app/models/authorsModel.php';
    $author = AuthorsModel\findOneById($connexion, $id);

    global $content;
    ob_start();
    include '../app/views/authors/show.php';
    $content = ob_get_clean();
}

function indexAction(PDO $connexion): void
{
    include_once '../app/models/authorsModel.php';
    $authors = AuthorsModel\findAll($connexion);

    global $content;
    ob_start();
    include '../app/views/authors/index.php';
    $content = ob_get_clean();
}
