<?php
include_once('config.php'); 

$module = isset($_GET['s']) ? $_GET['s'] : 'view';
switch ($module) {
    case 'view':
    default:
        include('matadiklat/view.php');
        break;
    case 'add':
        include('matadiklat/add.php');
        break;
    case 'save':
        include('matadiklat/save.php');
        break;
    case 'edit':
        include('matadiklat/edit.php');
        break;
    case 'update':
        include('matadiklat/update.php');
        break;
    case 'delete':
        include('matadiklat/delete.php');
        break;
}
?>
