<?php

//var_dump($result, $_POST);

if (isset($_POST['add'])){
    
    if(isset($_POST['word']) == false || $_POST['word'] == '') { 
        $errortext='Bitte füllen sie das Textfeld: "Vokabel" aus!';
 }
    elseif(isset($_POST['translation']) == false || $_POST['translation'] == '') { 
        $errortext='Bitte füllen sie das Textfeld: "Übersetzung" aus!';
 
    }
    else{
    
        $sql = "INSERT INTO vocabulary (word, translation) VALUES ('" . $_POST["word"] . "', '" . $_POST["translation"] . "');";
        $result = mysqli_query($conn, $sql);

    }
    
}

if (isset($_GET['delete'])) {
    $sql = "DELETE FROM vocabulary WHERE id='" . $_GET['delete'] . "';";
    
    $result = mysqli_query($conn, $sql);
}

$sql = "SELECT id, word, translation FROM vocabulary";
$result = mysqli_query($conn, $sql);

$vocabs = mysqli_fetch_all($result, MYSQLI_ASSOC);


