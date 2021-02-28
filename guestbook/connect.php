<?php
//connect.php

//Connect to database
function connect()
{
    $username = 'dboonegr_grcuser';
    $password = 'I]yZ{{hM3[Z3';
    $hostname = 'localhost';
    $database = 'dboonegr_grc';

    $cnxn = @mysqli_connect($hostname, $username, $password, $database)
    or die("Error connecting to database");
    return $cnxn;
}
