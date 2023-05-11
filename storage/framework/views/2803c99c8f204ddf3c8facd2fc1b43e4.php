<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/acaraEdit.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/322f056c55.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        .material-symbols-outlined {
          font-variation-settings:
          'FILL' 0,
          'wght' 300,
          'GRAD' 0,
          'opsz' 100
        }
        </style>
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
          <ul>
                <li><a href="<?php echo e(url('/dashboard/view')); ?>"><i class="fas fa-blog"></i>Dashboard</a></li>
                <li><a href="<?php echo e(url('/admin/viewAcara')); ?>"><i class="fas fa-address-book"></i>Acara</a></li>
                <li><a href="<?php echo e(url('/admin/viewOrganisasi')); ?>"><i class="fas fa-map-pin"></i>Organisasi</a></li>
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
                 <h4>Mielola</h4>
                 <p>Super Admin</p>
               </div>
                </div>
               </div>

            <!-- TENGAH -->
            <div class="judul">
            <h3>Organisasi/Upload</h3>
        </div>
            <section class="bungkus">
                <form action="" method="post" enctype="multipart/form-data" class="form">
                    <div class="satu">
                        <div class="namaAcara">
                            <label for="">Nama Acara</label>
                            <input type="text" class="inputan">
                        </div>
                        <div class="Deskripsi">
                            <label for="">Deskripsi</label>
                            <textarea name="" id="" cols="30" rows="10" class="inputan"></textarea>
                        </div>
                        <div class="tipeAcara">
                            <label for="">Tipe Acara</label>
                            <select name="" id="">
                                <option value="" selected disabled>Pilih Tipe Acara</option>
                                <option value="online">Online</option>
                                <option value="Offline">Offline</option>
                            </select>
                        </div>
                        <div class="Benefit">
                            <label for="">Benefit</label>
                            <textarea name="" id="" cols="30" rows="10" class="inputan"></textarea>
                        </div>
                        <div class="subscription">
                            <label for="">Subscribe</label>
                            <select name="" id="">
                                <option value="" selected disabled> Subscribe </option>
                                <option value="online">Gratis</option>
                                <option value="Offline">Pembayaran</option>
                            </select>
                        </div>
                    </div>
                    <div class="dua">
                        <div class="waktu">
                            <label for="">Tanggal</label>
                            <input type="date">
                            <label for="">Waktu</label>
                            <input type="time">
                        </div>
                        <div class="upload">
                            <h5>Unggah file</h5>
                        </div>
                        <div class="form2">
                            <i class="fa-regular fa-cloud-arrow-up" style="color: #0081c9;"></i>
                        <input type="file" value="upload-foto" class="uploadFoto" hidden>
                    </div>
                    <input type="submit" class="upload kursor" >
                    </div>
                    
                </div>
            </form>
            </section>
            <script>
                const form = document.querySelector(".form2"),
                fileinput = document.querySelector(".uploadFoto");

                form.addEventListener("click", () =>{
                    fileinput.click();
                });
            </script>
        </body>
        </html><?php /**PATH C:\xampp\htdocs\laravel1-tugas\T-zens\resources\views/upload-admin-organisasi.blade.php ENDPATH**/ ?>