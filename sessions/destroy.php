<?php
session_start ();

if (isset($_SESSION["dataUsers"])) {

    unset($_SESSION["dataUsers"]);
}

header("Location: /?page=home");

?>