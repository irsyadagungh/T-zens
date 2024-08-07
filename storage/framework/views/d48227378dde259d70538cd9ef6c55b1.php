<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="/assets/css/admin-acara.css">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <ul>
                <li><a href="<?php echo e(url('/dashboard/view')); ?>"><i class="fas fa-blog"></i>Dashboard</a></li>
                <li><a href="<?php echo e(url('/admin/viewAcara')); ?>"><i class="fas fa-address-book"></i>Acara</a></li>
                <li><a href="#"><i class="fas fa-map-pin"></i>Organisasi</a></li>
            </ul>
        </div>

        <!-- ATAS -->
        <div class="main_content">
            <div class="header">
                <form action="" method="get">
                <div class="search">
                    <span class="material-symbols-outlined" class="sea">
                        search
                    </span>
                    <input name="search" type="search" placeholder="search" class="search2">
                    <button name="cari" class="ser">Search</button>
                </form>
                </div>
                <div class="profile">
                    <img src="/assets/pics/profile.png" alt="">
                    <div class="text">
                        <h4><?php echo e(session()->get('success')); ?></h4>
                        <p>Super Admin</p>
                    </div>
                </div>
            </div>

            <!-- TENGAH -->
            <div class="content">
                <div class="filter">
                    <div class="kiri">
                        <h5>Organisasi</h5>
                        <p>Perbarui disini !</p>
                    </div>
                </div>

                <?php
    session_start();
    $server = 'localhost';
    $username = 'root';
    $pass = '';
    $dbname = 'tzens';

    $conn = mysqli_connect($server, $username, $pass, $dbname);
    $query = mysqli_query($conn, 'SELECT * FROM organisasi');

    if (!$query) {
        die('Query error: ' . mysqli_error($conn));
    }

    if (isset($_GET['cari'])) {
                    $nama = $_GET['search'];
                    $searchQuery = "SELECT * FROM organisasi WHERE nama LIKE '%$nama%'";
                    $query = mysqli_query($conn, $searchQuery);
                }
?>

<?php while ($organisasi = mysqli_fetch_assoc($query)): ?>

    <?php
        $foto = "/assets/pictures/".$organisasi['foto'];
    ?>

<form action="" method="get">
    <div class="kolom">
        <img src="/assets/pictures/<?php echo $organisasi['foto']; ?>" alt="" class="gmbr1"
            name="foto organisasi">
        <div class="isi">
            <h3 class="cont" name="judul"> <?php echo e($organisasi['nama']); ?> </a> </h3>
            <p><?php echo e($organisasi['deskripsi']); ?></p>
        </div>
        <div class="like">
            <button class="lihat" name="hapus" value="<?php echo e($organisasi['id']); ?>">Hapus</button>
</form>
<form action="/admin/viewOrganisasi/edit">
    <button type="submit" class="edit" name="edit" value="<?php echo e($organisasi['id']); ?>">Edit</button>
</form>
</div>
</div>

<hr>

<?php endwhile; ?>
<?php
    if (isset($_GET['hapus'])) {
    $id = $_GET['hapus'];
    $query = mysqli_query($conn, "DELETE FROM `organisasi` WHERE id = $id");
    if ($query) {
    echo "<script>alert('Data berhasil dihapus');</script>";
    echo "<script>window.location.href='/admin/viewOrganisasi';</script>";
}
}
?>

    </div>
    </div>
    <div class="upload">
        <button class="btn-floating" onclick="window.location.href='<?php echo e(url('/admin/viewOrganisasi/upload')); ?>'">
            +
            <span>Upload</span>
        </button>
    </div>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\laravel1-tugas\T-zens\resources\views/admin-organisasi.blade.php ENDPATH**/ ?>