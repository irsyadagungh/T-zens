<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/acaraEdit.css">
    <title>Document</title>
</head>

<body>

    <section class="2">

        <form action="/admin/viewAcara/upload" method="post" enctype="multipart/form-data">
            @csrf
            <div class="data">
                <div class="1">
                    <div class="namaAcara">
                        <label for="">Nama Acara</label>
                        <input type="text">
                    </div>
                    <div class="Waktu">
                        <label for="">Waktu</label>
                        <input type="date">
                        <input type="time">
                    </div>
                    <div class="Deskripsi">
                        <label for="">Deskripsi</label>
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="tipeAcara">
                        <label for="">Tipe Acara</label>
                        <select name="" id="">
                            <option value="" selected disabled>Pilih Tipe Acara</option>
                            <option value="online">Online</option>
                            <option value="Offline">Offline</option>
                        </select>
                    </div>
                    <div class="namaAcara">
                        <label for="">Nama Acara</label>
                        <input type="text">
                    </div>
                    <div class="Benefit">
                        <label for="">Benefit</label>
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="2">
                    <!-- subscription -->
                    <div class="subscription">
                        <label for="">Subscribe</label>
                        <select name="" id="">
                            <option value="" selected disabled> Subscribe </option>
                            <option value="online">Gratis</option>
                            <option value="Offline">Pembayaran</option>
                        </select>
                    </div>
                    <input type="submit" value="Upload Acara" name="acara">
                </div>
            </div>
            <div class="upload">
                <h2>Upload Foto</h2>
                <input type="file">
            </div>
        </form>
    </section>
</body>

</html>
