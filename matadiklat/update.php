<?php
include_once('config.php');

if (isset($_POST['subject']) && isset($_GET['id'])) {
    $id = $_GET['id'];
    $subject = $_POST['subject'];
    $hours = $_POST['hours'];

    $stmt = $con->prepare("UPDATE subjects SET subject = ?, hours = ? WHERE id = ?");
    $stmt->bind_param("sii", $subject, $hours, $id);

    if ($stmt->execute()) {
        header('Location: ?m=matadiklat&s=view');
        exit();
    } else {
        echo '<script>alert("Data gagal diperbarui: ' . $stmt->error . '");</script>';
        include('edit.php?id=' . $id);
    }

    $stmt->close();
} else {
    echo "Data tidak valid.";
}
?>
