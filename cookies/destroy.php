<?php
    //destruir o eliminar la cookie
// lo que hacemos es establecer nuevos parametros a la nueva cookie, 'count'(la cookie), null (el nuevo valor, no hace falta), time() - 1 (le establecemos un tiempo de vida en pasado)
setcookie('count', null, time() -1);
echo '<p>Cookie destroy</p>';
?>