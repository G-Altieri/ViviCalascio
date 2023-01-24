<?php
//Starto la sessione perche il login e andato a buon fine 
    session_start();
    $_SESSION['accesso']=1;
    echo  $_SESSION['accesso'];
   // header('Location: /pages/dashboard/guida.php');
?>