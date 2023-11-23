<div class="container-fluid">
    <div class="container-lg p-2 pb-4">
        <div class="col-md-12 border">
            <h2 class="p-1">Tambah Siswa Baru</h2>
            <?php
            // Notif Data Kosong
            echo validation_errors('<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-info"></i>', '</h5> </div>');

            echo form_open_multipart('crudsiswa/add') ?>
            <div class="form-group">
                <label for="nis_siswa">Nomor Induk Siswa (NIS)</label>
                <input type="number" class="form-control" id="nis_siswa" name="nis_siswa" placeholder="NIS Siswa">
            </div>

            <div class="form-group">
                <label for="nisn_siswa">Nomor Induk Siswa Nasional (NISN)</label>
                <input type="number" class="form-control" id="nisn_siswa" name="nisn_siswa" placeholder="NISN Siswa">
            </div>

            <div class="form-group">
                <label for="nama_siswa">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" placeholder="Nama Lengkap">
            </div>

            <div class="form-group">
                <label>Kelas</label>
                <select name="id_kelas" class="form-control">
                    <option value="">-- PILIH KELAS --</option>
                    <?php foreach ($kelas as $key => $value) { ?>
                        <option value="<?= $value->id_kelas ?>"><?= $value->kelas; ?></option>
                    <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir">
            </div>

            <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Tangal Lahir">
            </div>

            <div class="form-group">
                <label>Jenis Kelamin</label><br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="l" value="l">
                    <label class="form-check-label" for="l">Laki-laki</label>
                    <div class="form-check form-check-inline ml-2">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="p" value="p">
                        <label class="form-check-label" for="p">Perempuan</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="agama">Agama</label>
                <select name="agama" id="agama" class="form-control">
                    <option value="">-- PILIH AGAMA --</option>
                    <option value="Islam">Islam</option>
                    <option value="Protetan">Protestan</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Budha">Budha</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Khonghucu">Khonghucu</option>
                </select>
            </div>

            <div class="form-group">
                <label for="anak_ke">Anak Ke</label>
                <input type="number" class="form-control" id="anak_ke" name="anak_ke" placeholder="Anak Ke">
            </div>

            <div class="form-group">
                <label for="alamat">Alamat Rumah </label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Alamat Rumah"></textarea>
            </div>

            <div class="form-group">
                <label for="no_telp">Nomor Telp</label>
                <input type="number" class="form-control" id="no_telp" name="no_telp" placeholder="Nomor Telepon">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="email">
            </div>

            <div class="form-group">
                <label for="asal_sekolah">Asal Sekolah</label>
                <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" placeholder="Asal Sekolah">
            </div>


            <div class="form-group">
                <label for="no_ijazah">No Ijazah</label>
                <input type="text" class="form-control" id="no_ijazah" name="no_ijazah" placeholder="Nomor Ijazah">
            </div>


            <div class="form-group">
                <label for="thn_masuk">Tahun Masuk</label>
                <input type="number" class="form-control" id="thn_masuk" name="thn_masuk" placeholder="Tahun Masuk">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="text" class="form-control" id="password" name="password" placeholder="Password">
            </div>

            <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i>SIMPAN</button>
            <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>
            <?php echo form_close() ?>
        </div>
    </div>
</div>