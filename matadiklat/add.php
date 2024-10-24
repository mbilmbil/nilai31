<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Tambah Mata Pelajaran</div>
                <div class="col-4">
                    <a href="?m=matadiklat&s=view" class="btn btn-lg btn-primary float-end">Kembali</a>
                </div>
            </div>

            <div class="card-body">
                <form action="?m=matadiklat&s=save" method="POST">
                <div class="mb-3">
    <input type="text" name="subject" class="form-control" placeholder="Mata Pelajaran" required autofocus>
</div>
<div class="mb-3">
    <input type="number" name="hours" class="form-control" placeholder="Jam Pelajaran" required>
</div>
<div class="mb-3">
    <input type="reset" class="btn btn-warning">&nbsp;
    <input type="submit" name="save" value="Simpan" class="btn btn-info">
</div>

                </form>
            </div>
        </div>
    </div>
</div>