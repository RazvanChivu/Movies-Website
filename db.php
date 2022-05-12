<?php
/* Database connection start */

$con = mysqli_connect('localhost', 'root', '', 'chillflix');

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>