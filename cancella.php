<?php
include 'function.php';


include 'layout/head.php';


$id = intval($_POST["id_stanza"]);

$sql= "DELETE FROM stanze WHERE id = $id";



$result=esegui_query($sql);





if ($result) {
    $G='?success=true';
}else{
    $G='?success=false';
}

header('Location:index.php'.$G)
 ?>
