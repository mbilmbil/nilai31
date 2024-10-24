<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Tambah Jurusan</div>
                <div class="col-4">
                    <a href="?m=jurusan&s=view" class="btn btn-lg btn-primary float-end">Kembali</a>
                </div>
            </div>

            <div class="card-body">
               <form action="?m=jurusan&s=save" method="post">
                <div class="mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Nama Jurusan" required autofocus>
                </div>
               <form action="?m=jurusan&s=save" method="post">
                <div class="mb-3">
                    <input type="number" name="capacity" class="form-control" placeholder="Kapasitas" required >
                </div>
                <div class="mb-3">
                    <input type="number" name="fill" class="form-control" placeholder="Terisi" required>
                </div>
                <div class="mb-3">
                    <input type="reset" class="btn btn-warning">&nbsp;
                    <input type="submit" name ="save" value="Simpan" class="btn btn-success">
                </div>
               </form>
            </div>
        </div>
    </div>
</div>