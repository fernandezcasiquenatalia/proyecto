<?php
header('Content-Type: application/json');
require 'db.php';
$name=$_POST['name']??'';
$comment=$_POST['comment']??'';
$pdo=getPDO();
$stmt=$pdo->prepare("INSERT INTO guestbook (name,comment) VALUES (?,?)");
$stmt->execute([$name,$comment]);
echo json_encode(['success'=>true]);
?>
