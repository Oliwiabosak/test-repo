<?php
    include './config/db.php';
    $data = $pdo->query("SELECT * FROM worker")->fetchAll();
        
?>