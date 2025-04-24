<?php

namespace App\Models\PhotosModel;

use \PDO;

function findAll(PDO $connexion)
{
    $sql = "SELECT ph.*, 
                   aut.firstname AS author_firstname, 
                   aut.lastname AS author_lastname
            FROM photos ph
            JOIN authors aut ON ph.author_id = aut.id
            ORDER BY ph.created_at DESC 
            LIMIT 3;";
    $rs = $connexion->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}
