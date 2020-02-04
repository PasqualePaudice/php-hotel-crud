<?php
include 'function.php';
include 'layout/head.php';




$sql = "SELECT id,room_number,floor FROM stanze";

$result= esegui_query($sql);

if ($result && $result->num_rows > 0) {
    ?>
    <div class="container">
        <div class="int-dati col-sm-4">
            <strong>Numero stanza</strong>
        </div>

        <div class="int-dati col-sm-4 ">
            <strong class="">Piano</strong>
        </div>

        <div class="int-dati col-sm-">
            <strong class="">Azioni</strong>
        </div>


    <?php
    while($row = $result->fetch_assoc()){?>


            <div class="dati col-sm-4 ">
                <?php     echo  $row['room_number']; ?>
            </div>

            <div class="dati dati2 col-sm-4 ">
                <?php echo $row['floor']; ?>
            </div>

            <div class="dati col-sm-4">
                <a class="btn btn-info" href="visualizza.php/?id_stanza=<?php echo $row['id'] ?>"> Visualizza </a>
                <a class="btn btn-warning" href="visualizza.php/?id_stanza=<?php $row['id'] ?>"> Modifica </a>
                <a class="btn btn-danger" href="visualizza.php/?id_stanza=<?php $row['id'] ?>"> Cancella </a>
            </div>





        <?php



    }?>

</div>

    <?php

}elseif ($result){
    echo "non ci sono risultati";
}else{
    echo "si è verificato un errore";
}




?>


</body>