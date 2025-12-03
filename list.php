<?php
require 'db.php';
$pdo=getPDO();
$rows=$pdo->query("SELECT * FROM guestbook ORDER BY id DESC")->fetchAll();
?><!doctype html><html><body><h1>Comentarios</h1><?php
foreach($rows as $r){
    echo "<p><b>".htmlspecialchars($r['name'])."</b>: ".htmlspecialchars($r['comment'])."</p>";
}
?></body></html>
