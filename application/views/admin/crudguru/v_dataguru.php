<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Data <?= $title ?></h3>

            <div class="card-tools">
                <a href="<?= base_url('crudguru/add')?>" class="btn btn-primary"><i class="fas fa-plus"></i>
                    Add
                </a>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <?php
            if ($this->session->flashdata('pesan')) {
                echo '<div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h5><i class="icon fas fa-check"></i> Success! </h5>';
                echo $this->session->flashdata('pesan');
                echo '</div>';
            }
            ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>NO</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Alamat</th>
                            <th>No HP</th>
                            <th>Mapel</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($dataguru as $key => $value) { ?>
                            <tr>
                                <td><?= $key + 1; ?></td>
                                <td><?= $value->nip_guru; ?></td>
                                <td><?= strtoupper($value->nama_guru); ?></td>
                                <td><?= $value->tempat_lahir; ?></td>
                                <td><?= $value->tgl_lahir; ?></td>
                                <td><?= $value->alamat; ?></td>
                                <td><?= $value->no_hp; ?></td>
                                <td><?= $value->nama_mapel; ?></td>
                                <td>
                                    <a class="btn btn-sm btn-warning m-2" href="<?= base_url('crudguru/update/'.$value->id_guru) ?>"><i class="fas fa-edit"></i></a>
                                    <button class="btn btn-sm btn-danger m-2" data-toggle="modal" data-target="#delete<?= $value->id_guru ?>"><i class="fas fa-trash"></i></button>
                                </td>
                            </tr>

                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>


<!-- Modal Delete Products -->
<?php foreach ($dataguru as $key => $value) { ?>
    <div class="modal fade" id="delete<?= $value->id_guru ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Delete <?= $value->nama_guru ?></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5 class="p-3">Apakah anda yakin ingin menghapus data ini? </h5>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        <a href="<?= base_url('crudguru/delete/' . $value->id_guru) ?>" type="submit" class="btn btn-danger">Delete</a>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </div>

<?php } ?>