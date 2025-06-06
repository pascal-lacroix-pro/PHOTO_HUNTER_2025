<?php

namespace App\Models\AuthorsModel;

use \PDO;

function findAll(PDO $connexion): array
{
    $sql = "SELECT *
            FROM authors
            ORDER BY created_at DESC 
            LIMIT 3;";
    $rs = $connexion->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}

function findOneById(PDO $connexion, int $id): array
{
    $sql = "SELECT *
            FROM authors
            WHERE id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(PDO::FETCH_ASSOC);
}
