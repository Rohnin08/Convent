<?php
session_start ();

function hasUser() : bool{
    return isset($_SESSION['user']);
}

function logout  () : void {
        unset($_SESSION['name']);
        session_destroy();
}

require_once "pages\home.php";
