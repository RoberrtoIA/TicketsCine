<?php
session_start();
session_destroy();
header('Location: /Vista/Login/login.html');
?>