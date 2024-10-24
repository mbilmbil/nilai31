<?php
include_once('config.php');

$id = $_GET['id'];
$stmt = $con->prepare("SELECT * FROM subjects WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Edit Mata Pelajaran</div>
                <div class="col-4">
                    <a href="?m=matadiklat&s=view" class="btn btn-lg btn-primary float-end">Kembali</a>
                </div>
            </div>

            <div class="card-body">
                <form action="?m=matadiklat&s=update&id=<?php echo $id; ?>" method="POST">
                    <div class="mb-3">
                        <input type="text" name="subject" class="form-control" value="<?php echo $row['subject']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="hours" class="form-control" value="<?php echo $row['hours']; ?>" required>
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="Update" class="btn btn-info">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
