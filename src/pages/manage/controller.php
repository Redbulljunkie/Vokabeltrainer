<?php
$sql = "INSERT INTO vocabulary (word, translation)
VALUES ('" . $_POST["translation"] . "', '" . $_POST["word"] . "');";
$result = mysqli_query($conn, $sql);
//var_dump($result, $_POST);
