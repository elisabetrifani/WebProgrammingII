<div class="container-fluid">
    <div class="container-lg p-2 pb-4">
        <div class="col-md-12 border">
            <h2 class="p-1">Tambah Guru Baru</h2>
            <?php
            // Notif Data Kosong
            echo validation_errors('<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-info"></i>', '</h5> </div>');

            echo form_open_multipart('crudguru/add') ?>
            <div class="form-group">
                <label for="nip_guru">Nomor Induk Pegawai (NIP)</label>
                <input type="number" class="form-control" id="nip_guru" name="nip_guru"  placeholder="NIP guru">
            </div>

            <div class="form-group">
                <label for="nama_guru">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_guru" name="nama_guru" placeholder="Nama Lengkap">
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
                <label for="alamat">Alamat Rumah </label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Alamat Rumah"></textarea>
            </div>

            <div class="form-group">
                <label for="no_hp">Nomor Telp</label>
                <input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor Telepon">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="email">
            </div>

            <div class="form-group">
                <label for="usia">Usia</label>
                <input type="number" class="form-control" id="usia" name="usia" placeholder="Usia">
            </div>

            <div class="form-group">
                <label>Mapel</label>
                <select name="id_mapel" class="form-control">
                    <option value="">-- PILIH MAPEL --</option>
                    <?php foreach ($mapel as $key => $value) { ?>
                        <option value="<?= $value->id_mapel; ?>"><?= $value->nama_mapel; ?></option>
                    <?php } ?>
                </select>
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