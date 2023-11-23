<div class="container-fluid">
    <div class="container-lg p-2 pb-4">
        <div class="col-md-12 border">
            <h2 class="p-1">Data Pribadi Guru</h2>
            <div class="form-group">
                <label for="nip_guru">Nomor Induk Pegawai (NIP)</label>
                <input type="number" class="form-control" id="nip_guru" name="nip_guru" value="<?= $dataguru->nip_guru ?>"  placeholder="NIP guru" disabled>
            </div>

            <div class="form-group">
                <label for="nama_guru">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_guru" name="nama_guru" value="<?= $dataguru->nama_guru ?>"  placeholder="Nama Lengkap" disabled>
            </div>

            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" value="<?= $dataguru->tempat_lahir ?>" placeholder="Tempat Lahir" disabled>
            </div>

            <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="<?= $dataguru->tgl_lahir ?>" placeholder="Tangal Lahir" disabled>
            </div>

            <div class="form-group">
                <label>Jenis Kelamin</label><br>
                <?php if ($dataguru->jenis_kelamin == 'l') { ?>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked disbaled>
                        <label class="form-check-label" for="male">Laki-laki</label>
                        <div class="form-check form-check-inline ml-2">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female" disabled>
                            <label class="form-check-label" for="female">Perempuan</label>
                        </div>
                    </div>
                <?php } ?>

                <?php if ($dataguru->jenis_kelamin == 'p') { ?>
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
                <label for="alamat">Alamat Rumah </label>
                <textarea class="form-control" id="alamat" name="alamat" rows="3" placeholder="Alamat Rumah" disabled><?= $dataguru->alamat; ?></textarea>
            </div>

            <div class="form-group">
                <label for="no_hp">Nomor Telp</label>
                <input type="number" class="form-control" id="no_hp" name="no_hp" value="<?= $dataguru->no_hp; ?>" placeholder="Nomor Telepon" disabled>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $dataguru->email; ?>" placeholder="email" disabled>
            </div>

            <div class="form-group">
                <label for="usia">Usia</label>
                <input type="number" class="form-control" id="usia" name="usia" value="<?= $dataguru->usia; ?>" placeholder="Usia" disabled>
            </div>

            <div class="form-group">
                <label>Mapel</label>
                <select name="id_mapel" class="form-control" disabled>
                    <option value="<?= $dataguru->id_mapel; ?>"><?= $dataguru->nama_mapel; ?></option>
                    <?php foreach ($mapel as $key => $value) { ?>
                        <option value="<?= $value->id_mapel; ?>"><?= $value->nama_mapel; ?></option>
                    <?php } ?>
                </select>
            </div>
        </div>
    </div>
</div>