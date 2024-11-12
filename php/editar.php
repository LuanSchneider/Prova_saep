<?php
$cnn = new mysqli("localhost", "admin", "admin", "saep");
$id = $_GET['id'];
$sql="UPDATE turma SET `status` = 'fazer' WHERE id = $id";
$cnn->query($sql);
$cnn->close();
?>