<?php foreach ($pengumuman as $key => $value) { ?>
<div class="container-fluid m-3">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?= $value->perihal ?></h5>
            <p class="card-text"><?= $value->deskripsi ?></p>
        </div>
    </div>
</div>
<?php } ?>