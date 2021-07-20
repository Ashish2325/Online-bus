<?php

$connection = mysqli_connect("localhost",'root','','bus2');

if(!$connection) {
	die("Unable to connect" . mysqli_error($connection));
}

?>