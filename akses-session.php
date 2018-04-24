<?php
session_start();

if($_SESSION["nama"] && $_SESSION["msg"])
    echo "NAMA : " . $_SESSION["nama"] . " -> " . $_SESSION["msg"];
else
    echo "Anda baru terkoneksi dengan kami";
?>