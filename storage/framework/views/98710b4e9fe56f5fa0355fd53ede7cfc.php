<link rel="stylesheet" href="/assets/css/acara.css">
<link rel="stylesheet" href="/assets/css/app.css">

<nav>
    <div>
        <img src="<?php echo e(asset('assets/pics/tzens-untexted.png')); ?>" alt="">
        <h4>T-Zens</h4>
    </div>

    <ul>
        <li>Home</li>
        <li>Acara</li>
        <li>Organisasi</li>
        <li>Kontak</li>
        <li><button onclick="window.local.href='<?php echo e(url('/sign-up')); ?>">Daftar</button></li>
    </ul>
</nav>
<main>
    <?php echo $__env->yieldContent('content'); ?>
</main>
<footer>
    <!-- place footer here -->
    <div class="col">
        <h3 class="foot-text">T-Zens</h3>
        <p class="text-footer">Kembangkan inovasi dirimu melalui T-Zens</p>
    </div>
    <div class="col">
        <h5 class="foot-text">TZENS.ID</h5>
        <p>Tentang</p>
        <p>Karir</p>
        <p>Kerjasama</p>
        <p>Blog</p>
    </div>
    <div class="col">
        <h5 class="foot-text">Produk</h5>
        <p>Bootcamp & Program</p>
        <p>Mentoring</p>
        <p>Corporate Service</p>
    </div>
    <div class="col">
        <h5 class="foot-text">Lainnya</h5>
        <p>Kebijakan Privasi</p>
    </div>
    <div class="col">
        <img src="" alt="" srcset="">
    </div>
</footer>
<?php /**PATH C:\xampp\htdocs\applications\T-zens\resources\views/layouts/layout.blade.php ENDPATH**/ ?>