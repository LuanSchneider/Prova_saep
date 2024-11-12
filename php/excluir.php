<?php
$cnn = new mysqli("localhost", "admin", "admin", "saep");
$id = $_GET['id'];
$sql = "DELETE FROM turma WHERE id = $id";
$cnn->query($sql);
$cnn->close();
?>