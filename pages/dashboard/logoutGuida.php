<?php
//Metto la sessione a 0 perche si e effettuato il logout
    session_start();
    $_SESSION['accesso']=0;
    echo  $_SESSION['accesso'];
   // header('Location: /pages/dashboard/guida.php');
