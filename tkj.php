<?php
$module = isset($_GET['m']) ? $_GET['m'] : 'home';
switch ($module) {
    case 'home' : default:
        include ('home.php');
        break;
    case 'jurusan':
        include ('jurusan/index.php');
        break;
    case 'santri':
        include ('santri/index.php');
        break;
    case 'matadiklat':
        include ('matadiklat/index.php');
        break;
    case 'instruktur':
        include ('instruktur/index.php');
        break;
    case 'nilai':
        include ('nilai/index.php');
        break;
}