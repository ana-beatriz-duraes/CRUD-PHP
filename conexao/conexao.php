<?php
$con = new mysqli('localhost', 'root', '', 'crud-php');

if (!$con) {
    echo "não foi possivel conexão!";
}
