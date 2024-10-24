<?php
include_once('config.php');

if (isset($_POST['save'])) {
    $subject = $_POST['subject'];
    $hours = $_POST['hours'];

    $stmt = $con->prepare("INSERT INTO subjects (subject, hours) VALUES (?, ?)");
    $stmt->bind_param("si", $subject, $hours);
    if ($stmt->execute()) {
        header('Location: ?m=matadiklat&s=view');
        exit();
    } else {
        echo '<script>alert("Data gagal ditambahkan: ' . $stmt->error . '");</script>';
        include('add.php');
    }

    $stmt->close();
} else {
    echo "Jangan langsung eksekusi ke file ini, klik <a href='?m=matadiklat&s=add'>disini</a>";
}
?>
