<?php 

require_once "../modal/TodoList.php";
require_once "../businessLogic/AddTodoList.php";
require_once "../businessLogic/ShowTodoList.php";

// data dummy
addTodoList("Belajar menulis");
addTodoList("Belajar membaca");
addTodoList("Belajar menghapus");

showTodolist();