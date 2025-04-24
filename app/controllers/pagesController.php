<?php

namespace App\Controllers\PagesController;

use \PDO;

function homeAction(PDO $connexion)
{
    // Je charge les data dans $photos et $authors
    include '../app/models/photosModel.php';
    $photos = \App\Models\PhotosModel\findAll($connexion);

    include '../app/models/authorsModel.php';
    $authors = \App\Models\AuthorsModel\findAll($connexion);

    // je charge pages.home dans $content
    global $content;
    ob_start();
    include '../app/views/pages/home.php';
    $content = ob_get_clean();
}
