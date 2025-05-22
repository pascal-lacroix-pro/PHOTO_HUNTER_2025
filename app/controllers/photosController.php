<?php

namespace App\Controllers\PhotosController;

use \PDO;
use \App\Models\PhotosModel;

function showAction(PDO $connexion, string $id): void
{
    include_once '../app/models/photosModel.php';
    $photo = PhotosModel\findOneById($connexion, $id);

    global $content;
    ob_start();
    include '../app/views/photos/show.php';
    $content = ob_get_clean();
}

function indexAction(PDO $connexion): void
{
    include_once '../app/models/photosModel.php';
    $photos = PhotosModel\findAll($connexion);

    global $content;
    ob_start();
    include '../app/views/photos/index.php';
    $content = ob_get_clean();
}
