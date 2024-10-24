<?php
$module = isset($_GET['s']) ? $_GET['s'] : 'view';
switch ($module) {
    case 'view': default:
        include('santri/view.php');
        break;
    case 'add':
        include('santri/add.php');
        break;
    case 'save':
        include('santri/save.php');
        break;
    case 'edit':
        include('santri/edit.php');
        break;
    case 'update':
        include('santri/update.php');
        break;
    case 'delete':
        include('santri/delete.php');
        break;
}