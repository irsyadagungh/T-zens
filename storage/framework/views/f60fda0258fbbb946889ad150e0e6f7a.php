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
                <li><a href="<?php echo e(url('/dashboard/view')); ?>"><i class="fas fa-blog"></i>Dashboard</a></li>
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
                        <h4>Mielola</h4>
                        <p>Super Admin</p>
                    </div>
                </div>
            </div>



            <!-- TENGAH -->
            <div class="judul">
                <h3>Acara/Edit</h3>
            </div>
            <section class="bungkus">
                <form action="/admin/viewAcara/edit/create" method="post" enctype="multipart/form-data" class="form">
                    <?php echo csrf_field(); ?>
                    <div class="satu">
                        <div class="namaAcara">
                            <label for="">Nama Acara</label>
                            <input type="text" class="inputan" name="nama">
                        </div>
                        <div class="Deskripsi">
                            <label for="">Deskripsi</label>
                            <textarea name="deskripsi" id="" cols="30" rows="10" class="inputan"></textarea>
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
                            <textarea name="benefit" id="" cols="30" rows="10" class="inputan"></textarea>
                        </div>
                        <div class="subscription">
                            <label for="">Subscribe</label>
                            <select name="subscribe" id="">
                                <option value="" selected disabled> Subscribe </option>
                                <option value="Free">Gratis</option>
                                <option value="Pay">Pembayaran</option>
                            </select>
                        </div>
                    </div>
                    <div class="dua">

                        <div class="waktu">
                            <label for="">Tanggal</label>
                            <input type="date" name="tanggal">
                            <label for="">Waktu</label>
                            <input type="time" name="jam">
                        </div>
                        <div class="upload">
                            <h5>Unggah file</h5>
                        </div>
                        <div class="form2">
                            <figure class="row-1">
                                <img src="/assets/pics/upfile.png" alt="" class="iconn">
                                
                                <img id="chosen-image">
                                <figcaption class="file-name" id="file-name">
                                    
                                </figcaption>
                                <input type="file" id="pilih" accept="image/*" class="uploadFoto" hidden name="foto">
                            </figure>
                            <div class="sub">
                                <input type="submit" class="upload kursor" name="submit">
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
            chosenImage.setAttribute("src",reader.result);
    }
            fileName.textContent = uploadButton.files[0].name;
}
        </script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\laravel1-tugas\T-zens\resources\views/acara-edit.blade.php ENDPATH**/ ?>