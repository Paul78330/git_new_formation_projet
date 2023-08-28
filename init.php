<?php

const bdd = 'mon_projet';
const host = 'localhost';

try {
    $pdo = new PDO('mysql:host='.host.';dbname='.bdd, 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    ]);
} catch(\Exception $e) {
    die('Erreur : '.$e->getMessage());
}