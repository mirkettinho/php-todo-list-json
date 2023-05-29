<?php

// 1
$json_string = file_get_contents('tasks.json');

// 2
$tasks = json_decode($json_string, true);


$new_task_string = json_encode($tasks);

file_put_contents('tasks.json', $new_task_string);
// 3
header('Content-Type: application/json');
// 4
echo $new_task_string;
?>