<?php 
    try {
        $db = new PDO("mysql:host=mysql-designandcreation.alwaysdata.net; dbname=designandcreation_images", "240541", "13c6f3974390");
        // Activation des erreurs PDO
        $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // mode de fetch par défaut : FETCH_ASSOC / FETCH_OBJ / FETCH_BOTH
        $db -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
        die("Erreur sur la base de données : ".$e -> getMessage());
    }
?>