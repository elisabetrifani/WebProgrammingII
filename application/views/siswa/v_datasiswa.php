<div class="container-fluid">
    <div class="container-lg p-2 pb-4">
        <div class="col-md-12 border">
            <h2 class="p-1">Data Pribadi Siswa</h2>
            <div class="form-group">
                <label for="nis_siswa">Nomor Induk Siswa (NIS)</label>
                <input type="text" class="form-control" id="nis_siswa" placeholder="<?= $this->session->userdata('nis_siswa') ?>" disabled>
            </div>

            <div class="form-group">
                <label for="nisn_siswa">Nomor Induk Siswa Nasional (NISN)</label>
                <input type="text" class="form-control" id="nisn_siswa" placeholder="<?= $datasiswa->nisn_siswa; ?>" disabled>
            </div>

            <div class="form-group">
                <label for="nama_siswa">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_siswa" placeholder="<?= $datasiswa->nama_siswa; ?>" disabled>
            </div>

            <div class="form-group">
                <label for="id_kelas">Kelas</label>
                <input type="text" class="form-control" id="id_kelas" placeholder="<?= $datasiswa->kelas; ?>" disabled>
            </div>

            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" placeholder="<?= $datasiswa->tempat_lahir; ?>" disabled>
            </div>

            <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="text" class="form-control" id="tgl_lahir" placeholder="<?= $datasiswa->tgl_lahir; ?>" disabled>
            </div>

            <div class="form-group">
                <label>Jenis Kelamin</label><br>
                <?php if ($datasiswa->jenis_kelamin == 'l') { ?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked disbaled>
                        <label class="form-check-label" for="male">Laki-laki</label>
                        <div class="form-check form-check-inline ml-2">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female" disabled>
                            <label class="form-check-label" for="female">Perempuan</label>
                        </div>
                    </div>
                <?php } ?>

                <?php if ($datasiswa->jenis_kelamin == 'p') { ?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male" disbaled>
                        <label class="form-check-label" for="male">Laki-laki</label>
                        <div class="form-check form-check-inline ml-2">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female" checked disabled>
                            <label class="form-check-label" for="female">Perempuan</label>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div class="form-group">
                <label for="agama">Agama</label>
                <input type="text" class="form-control" id="agama" placeholder="<?= $datasiswa->agama; ?>" disabled>
            </div>

            <div class="form-group">
                <label for="agama">Anak Ke</label>
                <input type="number" class="form-control" id="agama" placeholder="<?= $datasiswa->anak_ke; ?>" disabled>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat Rumah </label>
                <textarea class="form-control" id="textArea" rows="3" placeholder="<?= $datasiswa->alamat; ?>" disabled></textarea>
            </div>

            <div class="form-group">
                <label for="no_telp">Nomor Telp</label>
                <input type="number" class="form-control" id="no_telp" placeholder="<?= $datasiswa->no_telp; ?>" disabled>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" placeholder="<?= $datasiswa->email; ?>" disabled>
            </div>

            <div class="form-group">
                <label for="asal_sekolah">Asal Sekolah</label>
                <input type="text" class="form-control" id="asal_sekolah" placeholder="<?= $datasiswa->asal_sekolah; ?>" disabled>
            </div>

            
            <div class="form-group">
                <label for="no_ijazah">No Ijazah</label>
                <input type="text" class="form-control" id="no_ijazah" placeholder="<?= $datasiswa->no_ijazah; ?>" disabled>
            </div>

            
            <div class="form-group">
                <label for="thn_masuk">Tahun Masuk</label>
                <input type="number" class="form-control" id="thn_masuk" placeholder="<?= $datasiswa->thn_masuk; ?>" disabled>
            </div>
            
        </div>
    </div>
</div>