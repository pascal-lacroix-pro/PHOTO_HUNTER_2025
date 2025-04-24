<?php

namespace App\Models\AuthorsModel;

use \PDO;

function findAll(PDO $connexion)
{
    $sql = "SELECT *
            FROM authors
            ORDER BY created_at DESC 
            LIMIT 3;";
    $rs = $connexion->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}
