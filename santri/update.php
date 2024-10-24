<?php
if (isset($_POST['update'])) {
    include_once('config.php');
    $id = $_POST['id'];
    $nis = $_POST['nis'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $pob = $_POST['pob'];
    $dob = $_POST['dob'];
    $major_id = $_POST['major_id'];

    $sql = "UPDATE students SET nis='$nis', name='$name', gender='$gender', pob='$pob', dob='$dob', major_id='$major_id' WHERE id='$id'";
    $result = mysqli_query($con,$sql);
    if ($result) {
        header('location: ?m=santri');
    } else {
        include('index.php?m=santri');
        echo '<script language="JavaScript">';
            echo 'alert("Data gagal diupdate")';
        echo '</script>';
    }
} else {
    echo "Jangan Langsung eksekusi ke file ini, klik <a href='?m=santri&s=add'>disini</a>";
}
