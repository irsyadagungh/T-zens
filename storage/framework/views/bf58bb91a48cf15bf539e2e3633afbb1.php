<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style6.css">
    <title>Document</title>
</head>

<body>
    <img src="/assets/pics/BEM3.png" alt="" class="bg" name="fotp beranda dalam">
    <section class="sec-2">
        <div class="text" name="isi beranda dalam">
            <p>Halo Warga KEMA Tel-U!

                Telah dibuka kembali pendaftaran STAF BEM KEMA Tel-U 2023. Dan kami membuka pendaftaran STAF MAGANG
                untuk mahasiswa/i Tel-U angkatan 2022 sebagai kesempatan untuk kamu yang ingin menjadi bagian dari BEM
                KEMA Tel-U 2023. Tunggu apalagi? Yuk daftarkan dirimu, segera!
                <br><br>
                Periode pendaftaran & pengumpulan berkas : 24 Februari - 5 Maret 2023
                <br><br>
                Link Pendaftaran :
                <br><br>
                lynk.id/bemtelu
            </p>
        </div>
        <div class="detail">
            <div class="faq">
                <button data-aos="fade-up" data-aos-duration="1000" class="accordion">Apa itu BEM?</button>
                <div class="panel">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Accusantium aliquid adipisci neque distinctio doloremque corporis
                        eveniet debitis vel veritatis consequatur facilis sed suscipit vero iusto at commodi,
                        dolor a officiis!</p>
                    </div>
                </div>
                <div class="faq">
                <button data-aos="fade-up" data-aos-duration="1000" class="accordion">Siapa saja anggotanya?</button>
                <div class="panel">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Accusantium aliquid adipisci neque distinctio doloremque corporis
                        eveniet debitis vel veritatis consequatur facilis sed suscipit vero iusto at commodi,
                        dolor a officiis!</p>
                    </div>
                </div>
                <div class="faq">
                <button data-aos="fade-up" data-aos-duration="1000" class="accordion">Kapan jadwal pertemuan</button>
                <div class="panel">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                        Accusantium aliquid adipisci neque distinctio doloremque corporis
                        eveniet debitis vel veritatis consequatur facilis sed suscipit vero iusto at commodi,
                        dolor a officiis!</p>
                    </div>
                </div>
            <button class="button" onclick="window.location.href='done.html'">Register Now</button>
    </section>
            <section class="sec-3">
                <div class="rek">
        <h3>Rekomendasi Organisasi Untukmu</h3>
    </div>
    <div class="rekomendasi">
        <div class="card">
        <img src="/assets/pics/HIMA-MBTI.png" alt="" class="mbti" name="foto">
        <h4 class="sub" name="judul">HIMA MBTI</h4>
        </div>
    </div>
    </section>

    <footer>
        <p class="copyright"> Copyright © 2023 - T-Zens . All Rights Reserved </p>
    </footer>
    <!-- JS -->
    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\applications\T-zens\resources\views/detil-organisasi.blade.php ENDPATH**/ ?>