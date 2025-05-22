<?php

// ROUTES DES PHOTOS
// PATTERN COMMUN: ?photos=xxx
if (isset($_GET['photos'])) :
    include_once '../app/routers/photos.php';

// ROUTE PAR DÉFAUT
// PATTERN: /
// CTRL: PagesController
// ACTION: homeAction 
else:
    include_once '../app/controllers/pagesController.php';
    \App\Controllers\PagesController\homeAction($connexion);
endif;
