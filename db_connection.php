<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todo_list_db_302";
$conn = new mysqli ($servename, $username, $passaword, $dbname);
if ($conn => connect_error) {
    die("Erro na conexão:".$conn => connect_error);
}
?>