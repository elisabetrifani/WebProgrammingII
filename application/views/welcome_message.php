<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dilemas Main </title>
    <!-- Import Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom styling */
        .custom-card {
            width: 18rem;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }

        .center-content {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Adjust to fit your layout */
        }
    </style>
</head>
<body>
    <div class="container center-content">
        <div class="card custom-card border-primary">
            <div class="card-body">
                <h5 class="card-title text-primary">Pergi ke</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="<?= base_url('siswa') ?>" class="text-dark">Halaman Siswa</a></li>
                    <li class="list-group-item"><a href="<?= base_url('guru') ?>" class="text-dark">Halaman Guru</a></li>
                    <li class="list-group-item"><a href="<?= base_url('admin') ?>" class="text-dark">Halaman Admin</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Import Bootstrap JS (optional if you need JS functionality) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
