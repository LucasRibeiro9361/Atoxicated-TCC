<?php
session_start();
session_destroy();
echo "<script language='javascript' type='text/javascript'>alert('Deslogado');window.location.href='Pagina inicial.php';</script>";
?>
