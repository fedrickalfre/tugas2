<?php
define('Host', 'localhost');
define('USER' , 'root')
define('PASS' , '')
define('DB' , 'localhost')

$con = mysqli_connect(HOST,USER,PASS,DB) or die('unable to connect');