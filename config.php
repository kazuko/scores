<?php
$host="localhost";
$dbname="scores";
$user="root";
$pwd="root";

$db = new mysqli($host, $user, $pwd, $dbname);
$db->set_charset("gbk");

