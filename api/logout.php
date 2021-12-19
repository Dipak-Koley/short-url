<?php
    session_start();
    echo "logout";
    unset($_SESSION['user_id']);
    unset($_SESSION['name']);
?>