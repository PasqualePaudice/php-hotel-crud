<?php

include 'function.php';

$stanza= intval($_POST['numero_stanza']);
$letto = intval($_POST['letti']);
$piano= intval($_POST['piano']);



$sql = " INSERT INTO stanze (room_number, floor, beds,created_at,updated_at)
    VALUES ($stanza, $piano, $letto, NOW(), NOW())";


$result = esegui_query($sql);


if ($result) {
    $G = '?success=true';
}else{
    $G = '?success=false';
}

header('Location: index.php'.$G);

 ?>
