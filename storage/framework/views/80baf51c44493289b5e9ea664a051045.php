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
$query = "SELECT acara.nama AS 'Nama Acara', pengguna.nama AS 'Nama User'
                FROM regis_acara JOIN acara ON regis_acara.id_acara = acara.id
                JOIN pengguna ON regis_acara.id_pengguna = pengguna.id";
$query2 = "SELECT organisasi.nama AS 'Nama Organisasi', pengguna.nama AS 'Nama User'
                FROM regis_organisasi
                JOIN organisasi ON regis_organisasi.id_organisasi = organisasi.id
                JOIN pengguna ON regis_organisasi.id_pengguna = pengguna.id";

$result = mysqli_query($conn, $query);
$result2 = mysqli_query($conn, $query2);

if (!$result) {
    die('Query error: ' . mysqli_error($conn));
}

//Parameter check
// if (!isset($_GET['submit'])) {
//     echo 'Error: Category ID (submit) required.';
//     exit();
// }

// //Fetch categories from database
// $result = mysqli_query($conn, "SELECT * FROM regis_acara WHERE id=" . $_GET['submit']);

// //Initialize array variable
// $dbdata = array();

// //Fetch into associative array
// while ($row = mysqli_fetch_assoc($result))  {
//     $dbdata[]=$row;
// }

// //Print array in JSON format
// echo json_encode($dbdata);
?>


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
          <h4><?php echo e(session()->get('success')); ?></h4>
          <p>Super Admin</p>
        </div>
         </div>
        </div>
        <div class="info">
            <div class="box-1">
              <div class="overlay">
                <h5>Welcome to Admin</h5>
                <p><?php echo e(session()->get('success')); ?></p>
              </div>
            </div>
          </div>
          <div class="info2">
            <div class="box-2">
                <table class="tabel" border="1">
                    <tr>
                        <th>Nama Acara</th>
                        <th>Nama Pengguna</th>
                    </tr>
                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?php echo $row['Nama Acara'] ?></td>
                            <td><?php echo $row['Nama User'] ?></td>
                        </tr>
                    <?php endwhile; ?>
                </table>

            </div>


          <div class="box-3">
            <table class="tabel" border="1">
                <tr>
                    <th>Nama Organisasi</th>
                    <th>Nama Pengguna</th>
                </tr>
                <?php while ($row = mysqli_fetch_assoc($result2)): ?>
                    <tr>
                        <td><?php echo $row['Nama Organisasi'] ?></td>
                        <td><?php echo $row['Nama User'] ?></td>
                    </tr>
                <?php endwhile; ?>
            </table>

            <div class="overlay3">

            </div>
          </div>
        </div>
      </div>
    </div>
</div>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel1-tugas\T-zens\resources\views/admin.blade.php ENDPATH**/ ?>