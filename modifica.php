<?php
include 'function.php';


include 'layout/head.php';

$sql= "SELECT * FROM stanze WHERE id =".$_GET['id_stanza'];

$result = esegui_query($sql);



if ($result && $result->num_rows > 0) {

    $row = $result->fetch_assoc();

?>
<div class="container">

    <h2 class="text-center h2-su-form">ID STANZA = <?php echo $_GET['id_stanza']?></h2>

    <form class="text-center" action="update.php" method="post">

        <input type="hidden" name="id_stanza" value="<?php echo $row['id'];?>">

        <label class="full" for="numero_stanza">Numero stanza</label>

        <input name="numero_stanza" type="text" required placeholder="" value="<?php echo $row['room_number'] ?>">

        <label class="full" for="piano">Piano</label>
        <input name="piano" type="text" required placeholder="" value="<?php echo $row['floor'] ?>">


        <label class="full" for="letti">Piano</label>
        <input name="letti" type="text" required placeholder="" value="<?php echo $row['beds'] ?>"><br>




        <button class="btn-mod btn btn-success" type="submit" >MODIFICA</button>

    </form>


</div>

<?php



}elseif($result){
    echo ' non ci sono risultati';
}else{
    echo ' si è verificato un errore';
}

if ($_GET['success']){
    echo "<div>MODIFICA AVVENUTA CON SUCCESSO</div>";
}
 ?>
