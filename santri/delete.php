<?php
if (isset($_GET['id'])) {
    include_once('config.php');
    $id = $_GET['id'];

    $sql = "DELETE FROM students WHERE id='$id'";
    $result = mysqli_query($con,$sql);
    if ($result) {
        header('location: ?m=santri');
    } else {
        include('index.php?m=santri');
        echo '<script language="JavaScript">';
            echo 'alert("Data gagal dihapus")';
        echo '</script>';
    }
} else {
    echo "Jangan Langsung eksekusi ke file ini, kli <a href='?m=santri&s=santri'>disini</a>";
}
