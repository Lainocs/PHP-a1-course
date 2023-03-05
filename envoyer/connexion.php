<?php
    try {
        $database = new PDO('mysql:host=localhost;dbname=reminder;charset=utf8', 'root', 'root');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }