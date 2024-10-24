<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Tambah Santri</div>
                <div class="col-4">
                    <a href="?m=santri&s=view" class="btn btn-lg btn-primary float-end">Kembali</a>
                </div>
            </div>

            <div class="card-body">
               <form action="?m=santri&s=save" method="post">
                <div class="mb-3">
                    <input type="text" name="nis" class="form-control" placeholder="Nomor Induk Santri" required autofocus>
                </div>
                <div class="mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Nama Santri" required >
                </div>
                <div class="mb-3">
                    <label for="">Jenis Kelamin</label>&nbsp;
                    <input type="radio" name="gender" value="Laki-Laki" required>Laki-laki &nbsp;
                    <input type="radio" name="gender" value="Perempuan" required>Perempuan 
                </div>
                <div class="mb-3">
                    <input type="text" name="pob" class="form-control" placeholder="Tempat Lahir" required >
                </div>
                <div class="mb-3">
                    <input type="date" name="dob" class="form-control" placeholder="Tanggal Lahir" required >
                </div>
                <div class="mb-3">
                    <select name="major_id" class="form-control" required>
                        <option value="">- Pilih Jurusan -</option>
                        <?php
                            include_once('config.php');
                            $sql = "SELECT id, name FROM majors";
                            $query = mysqli_query($con, $sql);
                            
                            while ($r = mysqli_fetch_array($query)) {
                             ?>   
                                <option value="<?php echo $r['id']?>"><?=$r['name']?></option>
                           <?php } ?>
                    
                    </select>
                </div>
                <div class="mb-3">
                    <input type="reset" class="btn btn-warning">&nbsp;
                    <input type="submit" name ="save" value="Simpan" class="btn btn-info">
                </div>
               </form>
            </div>
        </div>
    </div>
</div>