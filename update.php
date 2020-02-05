<?php

include 'function.php';

$stanza= intval($_POST['numero_stanza']);
$letto = intval($_POST['letti']);
$piano= intval($_POST['piano']);
$id=intval($_POST['id_stanza']);


$sql = " UPDATE stanze SET room_number= $stanza , floor=$piano,  beds=$letto WHERE id= $id";

$result = esegui_query($sql);


if ($result) {
    $G = '?success=true&id_stanza='.$id;
}else{
    $G = '?success=false&id_stanza='.$id;
}

header('Location: modifica.php'.$G);

 ?>
