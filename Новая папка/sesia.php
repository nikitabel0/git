<?php
    session_start();

    unset($_SESSION['cointer']); ///удаление сессии/

    if (!isset($_SESSION['counter']))
        $_SESSION['counter'] = 1;
    else $_SESSION['counter']++;

    echo $_SESSION['conter'] ///счетчик перезагрузики//
    

