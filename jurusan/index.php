<?php
$module = isset($_GET['s']) ? $_GET['s'] : 'view';
switch ($module) {
    case 'view': default:
        include('jurusan/view.php');
        break;
    case 'add':
        include('jurusan/add.php');
        break;
    case 'save':
        include('jurusan/save.php');
        break;
    case 'edit':
        include('jurusan/edit.php');
        break;
    case 'update':
        include('jurusan/update.php');
        break;
    case 'delete':
        include('jurusan/delete.php');
        break;
}