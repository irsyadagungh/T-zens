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
                <li><a href="{{ url('/dashboard/view') }}"><i class="fas fa-blog"></i>Dashboard</a></li>
                <li><a href=""><i class="fas fa-address-book"></i>Acara</a></li>
                <li><a href="{{ url('/admin/viewOrganisasi') }}"><i class="fas fa-map-pin"></i>Organisasi</a></li>
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
                        <h4>{{ session()->get('success') }}</h4>
                        <p>Super Admin</p>
                    </div>
                </div>
            </div>

            <!-- TENGAH -->
            <div class="content">
                <div class="filter">
                    <div class="kiri">
                        <h5>Acara</h5>
                        <p>Perbarui disini !</p>
                    </div>
                </div>

                @php
                    session_start();
                    $server = 'localhost';
                    $username = 'root';
                    $pass = '';
                    $dbname = 'tzens';

                    $conn = mysqli_connect($server, $username, $pass, $dbname);

                    if (!$conn) {
                        die('Connection failed : ' . mysqli_connect_error());
                    }

                    $query = mysqli_query($conn, 'SELECT * FROM acara');
                    $acara = mysqli_fetch_assoc($query);
                @endphp

                <?php
                $acara = mysqli_fetch_assoc($query);
                ?>

                <?php while ($acara = mysqli_fetch_assoc($query)):

            $foto = "/assets/pictures/".$acara['foto'];
?>
                <form action="" method="get">
                    @csrf
                    <div class="kolom">
                        <img src="/assets/pictures/<?php echo $acara['foto']; ?>" alt="" class="gmbr1"
                            name="foto organisasi">
                        <div class="isi">
                            <h3 class="cont" name="judul"> {{ $acara['nama'] }} </h3>
                            <p>{{ $acara['deskripsi'] }}</p>
                        </div>
                        <div class="like">
                            <button class="lihat" name="hapus" value="{{ $acara['id'] }}">Hapus</button>

                </form>
                <form action="/admin/viewAcara/edit">
                    <button type="submit" class="edit" name="edit" value="{{ $acara['id'] }}">Edit</button>
                </form>
            </div>
        </div>

        <hr>
        <?php endwhile; ?>
        <?php
        if (isset($_GET['hapus'])) {
            $id = $_GET['hapus'];
            $query = mysqli_query($conn, "DELETE FROM `acara` WHERE id = $id");
            if ($query) {
                echo "<script>alert('Data berhasil dihapus');</script>";
                echo "<script>window.location.href='/admin/viewAcara';</script>";
            }
        }
        ?>
    </div>
    </div>
    <div class="upload">
        <button class="btn-floating" onclick="window.location.href='{{ url('/admin/viewAcara/upload') }}'">
            +
            <span>Upload</span>
        </button>
    </div>


</body>

</html>
