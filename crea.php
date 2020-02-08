<?php
include 'function.php';


include 'layout/head.php';



?>
<div class="container">

    <h2 class="text-center h2-su-form">CREA STANZA</h2>

    <form class="text-center" action="UpdateCrea.php" method="post">



        <label class="full" for="numero_stanza">Numero stanza</label>

        <input name="numero_stanza" type="text" required placeholder="Inserisci numero stanza">

        <label class="full" for="piano">Piano</label>
        <input name="piano" type="text" required placeholder="Inserisci il Piano della stanza">


        <label class="full" for="letti">Letti</label>
        <input name="letti" type="text" required placeholder="Inserisci quanti letti ci sono nella stanza"><br>




        <button class="btn-mod btn btn-success" type="submit" >CREA</button>

    </form>


</div>
