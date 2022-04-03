<?php

session_start();
if (!isset($_SESSION["admin"])) {
    header('Location: /Vista/Login/login.html');
}

?>