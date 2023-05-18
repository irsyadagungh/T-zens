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
    $query = "SELECT `nama_acara`, `nama_pengguna` FROM regis_acara";
    $query2 = "SELECT `nama_organisasi`, `nama_pengguna` FROM regis_organisasi";
    $result = mysqli_query($conn, $query);
    $result2 = mysqli_query($conn, $query2);

    if (!$result) {
        die('Query error: ' . mysqli_error($conn));
    }

?>

  <div class="wrapper">
    <div class="sidebar">
      <ul>
            <li><a href="#"><i class="fas fa-blog"></i>Dashboard</a></li>
            <li><a href="{{url('/admin/viewAcara')}}"><i class="fas fa-address-book"></i>Acara</a></li>
            <li><a href="{{url('/admin/viewOrganisasi')}}"><i class="fas fa-map-pin"></i>Organisasi</a></li>
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
          <h4>{{session()->get('success')}}</h4>
          <p>Super Admin</p>
        </div>
         </div>
        </div>
        <div class="info">
            <div class="box-1">
              <div class="overlay">
                <h5>Welcome to Admin</h5>
                <p>{{session()->get('success')}}</p>
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
                            <td><?php echo $row['nama_acara'] ?></td>
                            <td><?php echo $row['nama_pengguna'] ?></td>
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
                    <td><?php echo $row['nama_organisasi'] ?></td>
                    <td><?php echo $row['nama_pengguna'] ?></td>
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
