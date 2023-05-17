<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/acaraEdit.css">
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
                <li><a href="/admin/viewAcara"><i class="fas fa-address-book"></i>Acara</a></li>
                <li><a href="/admin/viewOrganisasi"><i class="fas fa-map-pin"></i>Organisasi</a></li>
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
                        <h4>{{session()->get('success')}}</h4>
                        <p>Super Admin</p>
                      </div>
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

                if (isset($_GET['edit'])) {
                 $id = $_GET['edit'];
                 $query = mysqli_query($conn, "SELECT * FROM acara WHERE id = '$id'");
                $acara = mysqli_fetch_assoc($query);
                }
            @endphp


            <!-- TENGAH -->
            <div class="judul">
                <h3>Acara/Edit</h3>
            </div>
            <section class="bungkus">
                <form action="/admin/viewAcara/edit2" method="post" enctype="multipart/form-data"
                    class="form">
                    @csrf
                    <div class="satu">
                        <div class="namaAcara">
                            <label for="">Nama Acara</label>
                            <input type="text" class="inputan" name="nama" value="{{ $acara['nama'] }}">
                        </div>
                        <div class="Deskripsi">
                            <label for="">Deskripsi</label>
                            <textarea name="deskripsi" id="myTextarea" maxlength="1000" cols="30" rows="10" class="inputan" value="">{{ $acara['deskripsi'] }}</textarea>
                        </div>
                        <div class="tipeAcara">
                            <label for="">Tipe Acara</label>
                            <select name="tipe_acara" id="">
                                <option value="" selected disabled>Pilih Tipe Acara</option>
                                <option value="online">Online</option>
                                <option value="Offline">Offline</option>
                            </select>
                        </div>
                        <div class="Benefit">
                            <label for="">Benefit</label>
                            {{-- KALO SALAH ADA DISINI --}}
                            <textarea name="benefit" id="myTextarea" maxlength="1000" cols="30" rows="10" class="inputan" value="">{{ $acara['benefit'] }}</textarea>
                        </div>
                        <div class="subscription">
                            <label for="">Subscribe</label>
                            <select name="subscribe" id="">
                                <option value="" selected disabled> Subscribe </option>
                                <option value="{{ $acara['subscription']}}">Gratis</option>
                                <option value="{{ $acara['subscription']}}">Pembayaran</option>
                            </select>
                        </div>
                    </div>
                    <div class="dua">

                        <div class="waktu">
                            <label for="">Tanggal</label>
                            <input type="date" name="tanggal" value="{{ $acara['waktu']}}">
                            <label for="">Waktu</label>
                            <input type="time" name="jam" value="{{ $acara['jam']}}">
                        </div>
                        <div class="upload">
                            <h5>Unggah file</h5>
                        </div>
                        <div class="form2">
                            <figure class="row-1">
                                <img src="/assets/pics/upfile.png" alt="" class="iconn">

                                <img src="/assets/pictures/<?php echo $acara['foto']; ?>" id="chosen-image">
                                <figcaption class="file-name" id="file-name" value="{{ $acara['foto']}}">

                                </figcaption>
                                <input type="file" id="pilih" accept="image/*" class="uploadFoto" hidden
                                    name="foto">
                            </figure>
                            <div class="sub">
                                <input type="submit" class="upload kursor" name="submit">
                                <input type="hidden" name="id" value="{{ $acara['id'] }}">

                            </div>
                        </div>

                    </div>
                </form>
            </section>
            <script>
                const form = document.querySelector(".row-1"),
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


                // TEXT AREA
                const textarea = document.getElementById("myTextarea");

        textarea.addEventListener("input", () => {
            const maxLength = parseInt(textarea.getAttribute("maxlength"));
            const currentLength = textarea.value.length;

            if (currentLength > maxLength) {
                textarea.value = textarea.value.slice(0, maxLength);
            }
        });
            </script>
</body>

</html>
