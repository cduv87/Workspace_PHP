<?php

if(!isset($_COOKIE['user'])) {
    echo "Bonjour";
    setcookie("user","Visiteur", time() + (60*60));
} else {
    echo "Rebonjour";
}