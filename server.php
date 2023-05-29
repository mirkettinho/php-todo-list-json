<?php

// 1
$json_string = file_get_contents('tasks.json');

// 2
$tasks = json_decode($json_string, true);

// 3
header('Content-Type: application/json');

// 4
echo json_encode($tasks);
?>