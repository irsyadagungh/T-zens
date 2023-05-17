<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/upload-admin-organisasi.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/322f056c55.js" crossorigin="anonymous"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        .material-symbols-outlined {
            font-variation-settings:
                'FILL'0,
                'wght'300,
                'GRAD'0,
                'opsz'100
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <ul>
                <li><a href="{{ url('/dashboard/view') }}"><i class="fas fa-blog"></i>Dashboard</a></li>
                <li><a href="{{ url('/admin/viewAcara') }}"><i class="fas fa-address-book"></i>Acara</a></li>
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
            <div class="judul">
                <h3>Organisasi/Edit</h3>
            </div>

            <?php
            session_start();
                $server = 'localhost';
                $username = 'root';
                $pass = '';
                $dbname = 'tzens';

                $conn = mysqli_connect($server, $username, $pass, $dbname);

                if(isset($_GET['edit'])){
                    $id = $_GET['edit'];
                    $query = mysqli_query($conn, 'SELECT * FROM organisasi');
                    $data = mysqli_fetch_array($query);
                    }



            ?>

            <section class="bungkus">
                <form action="/admin/viewOrganisasi/edit3" method="post" enctype="multipart/form-data"
                    class="form">
                    @csrf
                    <div class="satu">

                        <div class="namaAcara">
                            <label for="">Nama Organisasi</label>
                            <input type="text" class="inputan" name="nama"
                                value="{{ $data['nama'] ?? '' }}">
                        </div>
                        <div class="Deskripsi">
                            <label for="">Deskripsi</label>
                            <textarea name="deskripsi" id="" cols="30" rows="10" class="inputan">{{ $data['deskripsi'] }}</textarea>
                        </div>
                        {{-- DIV JADWAL --}}
                        <div class="tipeAcara">
                            <label for="">Jadwal</label>
                            <input type="text" class="inputan" name="jadwal" value="{{ $data['jadwal'] }}">
                        </div>
                        {{-- DIV JUDUL INFO --}}
                        <div class="Benefit">
                            <label for="">Judul info</label>
                            <input type="text" name="judul_info" id="" cols="30" rows="10"
                                class="inputan" value="{{ $data['judul_info'] }}">
                        </div>
                        {{-- DIV INFO --}}
                        <div class="Benefit">
                            <label for="">Info</label>
                            <input type="text" name="info" id="" cols="30" rows="10"
                                class="inputan" value="{{ $data['info'] }}">
                        </div>
                        {{-- DIV BENEFIT --}}
                        <div class="subscription">
                            <label for="">Benefit</label>
                            <input type="text" class="inputan" name="benefit" value="{{ $data['benefit'] }}">
                        </div>
                    </div>
                    <div class="dua">
                        {{-- DIV FOTO --}}
                        <div class="upload">
                            <h5>Unggah file</h5>
                        </div>
                        <div class="form2">
                            <figure class="row-1">
                                <img src="/assets/pics/upfile.png" alt="" class="iconn">
                                <img src="/assets/pictures/<?php echo $data['foto']; ?>" id="chosen-image">

                                <img id="chosen-image">
                                <figcaption class="file-name" id="file-name">

                                </figcaption>
                                <input type="file" id="pilih" accept="image/*" class="uploadFoto" hidden
                                    name="foto">
                            </figure>
                            <div class="sub">
                                <input type="text" name="id" hidden value="{{$data['id']}}">
                                <input type="submit" class="upload kursor" name="submit">
                            </div>
                        </div>

                    </div>
                </form>
            </section>
            <script>
                const form = document.querySelector(".form2"),
                    fileinput = document.querySelector(".uploadFoto");

                form.addEventListener("click", () => {
                    fileinput.click();
                });
            </script>
            <script>
                let uploadButton = document.getElementById("pilih");
                let chosenImage = document.getElementById("chosen-image");
                let fileName = document.getElementById("file-name");

                uploadButton.onchange = () => {
                    let reader = new FileReader();
                    reader.readAsDataURL(uploadButton.files[0]);
                    reader.onload = () => {
                        chosenImage.setAttribute("src", reader.result);
                    }
                    fileName.textContent = uploadButton.files[0].name;
                }
            </script>
</body>

</html>
