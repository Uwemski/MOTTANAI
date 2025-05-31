<?php
    $password = "Godisthegreatest";
    $hashed = password_hash($password, PASSWORD_DEFAULT);
    echo $hashed;

?>