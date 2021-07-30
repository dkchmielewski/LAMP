<?php
/**
 * using mysqli_connect for database connection
 */

//These are the defined authentication environment in the db service

// The MySQL service named in the docker-compose.yml.
$host = 'db';

// Database use name
$user = 'root';

//database user password
$pass = 'MYSQL_ROOT_PASSWORD';

// database name
$mydatabase = 'crud_db';
// check the mysql connection status

$mysqli = new mysqli($host, $user, $pass, $mydatabase);
?>
