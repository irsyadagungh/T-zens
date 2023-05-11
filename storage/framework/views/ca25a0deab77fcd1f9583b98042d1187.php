<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <div class="search">
                    <span class="material-symbols-outlined" class="sea">
                        search
                    </span>
                    <input type="search" placeholder="search" class="search2">
                </div>
                <div class="profile">
                    <img src="/assets/pics/profile.png" alt="">
                    <div class="text">
                        <h4>Julians Batubara</h4>
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
                    
                    if (!$conn) {
                        die('Connection failed : ' . mysqli_connect_error());
                    }
                    
                    $query = mysqli_query($conn, 'SELECT * FROM organisasi');
                    $organisasi = mysqli_fetch_assoc($query);
                ?>

                <?php
                $acara = mysqli_fetch_assoc($query);
                ?>

                <?php while ($organisasi = mysqli_fetch_assoc($query)):

            $foto = "/assets/pictures/".$organisasi['foto'];
?>

                <div class="kolom">
                    <img src="/assets/pictures/<?php echo $organisasi['foto']; ?>" alt="" class="gmbr1"
                        name="foto organisasi">
                    <div class="isi">
                        <h3 class="cont" name="judul"> <?php echo e($organisasi['nama']); ?> </a> </h3>
                        <p><?php echo e($organisasi['deskripsi']); ?>3</p>
                    </div>
                    <div class="like">
                        <button class="lihat">Lihat</button>
                        <button class="edit">Edit</button>
                    </div>
                </div>

                <?php endwhile; ?>

            </div>
        </div>
        <div class="upload">
            <button class="btn-floating" onclick="window.location.href='<?php echo e(url('/admin/viewOrganisasi/edit')); ?>'">
                +
                <span>Upload</span>
            </button>
        </div>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\applications\T-zens\resources\views/admin-organisasi.blade.php ENDPATH**/ ?>