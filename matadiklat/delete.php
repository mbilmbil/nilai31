<?php
include_once('config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $stmt = $con->prepare("DELETE FROM subjects WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header('Location: ?m=matadiklat&s=view');
        exit();
    } else {
        echo '<script>alert("Gagal menghapus data: ' . $stmt->error . '");</script>';
    }

    $stmt->close();
} else {
    echo "ID tidak valid.";
}
?>
