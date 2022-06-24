<?php

$sql = "SELECT id, word, translation FROM vocabulary";
$result = mysqli_query($conn, $sql);

$vocabs = mysqli_fetch_all($result, MYSQLI_ASSOC);/*[
    [
        'word' => 'Hello',
        'translation' => 'Hallo'
    ], [
        'word' => 'Bird',
        'translation' => 'Vogel'
    ], [
        'word' => 'Face',
        'translation' => 'Gesicht'
    ], [
        'word' => 'to try',
        'translation' => 'versuchen'
    ], [
        'word' => 'very',
        'translation' => 'sehr'
    ], [
        'word' => 'nap',
        'translation' => 'Mittagsschlaf'
    ], [
        'word' => 'hiccup',
        'translation' => 'Schluckauf'
    ], [
        'word' => 'Fire',
        'translation' => 'Feuer'
    ], [
        'word' => 'Key',
        'translation' => 'Schlüssel'
    ], [
        'word' => 'Cake',
        'translation' => 'Kuchen'
    ], [
        'word' => 'Snowball',
        'translation' => 'Schneeball'
    ]
];*/

$vocabIndex = 0;
if (isset($_GET['vocab'])) {
    $vocabIndex = $_GET['vocab'];
    if ($vocabIndex == 0) {
        $previousVocab = $vocabs[count($vocabs) - 1];
    } else {
        $previousVocab = $vocabs[$vocabIndex - 1];
    }
    if (isset($_POST['skip']) || $_POST['translation'] == '' ) {
        $messageboxClass ='warning';
        $messageboxText = 'Schade! Richtig wäre: ' . $previousVocab['translation'];
    } elseif (isset($_POST['translation']) && strtolower($previousVocab['translation']) == strtolower($_POST['translation'])) {
 
        $messageboxClass = 'success';
        $messageboxText = 'Richtig!';
    } else {

        $messageboxClass = 'danger';
        $messageboxText = 'Falsch! Richtig wäre: ' . $previousVocab['translation'];
    }
}

$vocabToDisplay = $vocabs[$vocabIndex];