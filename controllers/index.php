<?php

$tasks = $app['database']->selectALL('todos');
/*$tasks = array_map(function($task){
    $t = new Task();
    $t->description = $task['description'];
}, $tasks); */
//$tasks = fetchAllTasks($pdo);
require 'index.view.php';

?>
