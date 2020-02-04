<?php
include 'function.php';
include 'layout/head.php';

$sql= "SELECT * FROM stanze";
$result= esegui_query($sql);
if ($result && $result->num_rows > 0){
    $row = $result->fetch_assoc();
 ?>
<div class="container">
    <div class="box ">
        <div class="title-visualizza">
            <strong>DETTAGLI STANZA: <?php echo $_GET['id_stanza'] ?></strong>
        </div>
        <div class="dettagli-visualizza">
            <span>Numero Stanza: <?php echo $row['room_number'] ?></span>
            <span>letti: <?php echo $row['beds'] ?></span>
            <span>Piano: <?php echo $row['floor'] ?></span>
            <span>Data creazione: <?php echo $row['created_at'] ?></span>
            <span>Data modifica: <?php echo $row['updated_at'] ?></span>
        <?php } ?>

        </div>
    </div>
</div>
