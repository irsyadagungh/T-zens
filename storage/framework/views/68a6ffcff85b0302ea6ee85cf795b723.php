<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Side Navigation Bar</title>
	<link rel="stylesheet" href="/assets/css/admin.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>

  
  <div class="wrapper">
    <div class="sidebar">
      <ul>
            <li><a href="#"><i class="fas fa-blog"></i>Dashboard</a></li>
            <li><a href="<?php echo e(url('/admin/viewAcara')); ?>"><i class="fas fa-address-book"></i>Acara</a></li>
            <li><a href="<?php echo e(url('/admin/viewOrganisasi')); ?>"><i class="fas fa-map-pin"></i>Organisasi</a></li>
        </ul> 
    </div>
    
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
        <div class="info">
          <div class="box-1">
            <div class="overlay">
            <h5>Welcome to Admin</h5>
            <p>Muhammad Wildan Dhiya Ulhaq</p>
          </div>
          </div>
          <div class="info2">
          <div class="box-2">
            <div class="overlay2">
              <h5>Apa itu Admin?
                <br>
                <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In culpa, expedita aliquam architecto id vel reiciendis enim, ipsa vero, molestiae nostrum rerum. Dicta ipsum doloremque repudiandae ab debitis est quidem!</p>
              </h5>
            </div>
            </div>

          <div class="box-3">
            <div class="overlay3">

            </div>
          </div>
        </div>
      </div>
    </div>
</div>

</body>
</html><?php /**PATH C:\xampp\htdocs\applications\T-zens\resources\views/admin.blade.php ENDPATH**/ ?>