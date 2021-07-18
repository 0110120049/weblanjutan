<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>Sistem Informasi Seminar Tugas Akhir - SISTA STTNF</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">	
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<link rel="icon" href="images/sista.ico">
<link rel="stylesheet" type="text/css" href="css/pendafran.css">


</head>
<!-- body -->
<body>
	<div class="header_main">
		<div class="container">
			<div class="logo"><a href="landing-page.html"><img src="images/logo.jpeg" alt="Image" style="width:90px;height:70px;"></a></div>
		</div>
	</div>
	</div>
	<div class="header">
		<div class="container">
        <!--  header inner -->
            <div class="col-sm-12">
                 
                 <div class="menu-area">
                    <nav class="navbar navbar-expand-lg ">
                        <!-- <a class="navbar-brand" href="#">Menu</a> -->
<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<i class="fa fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="jadwal-seminar.php">Jadwal <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="daftar-seminar.php">Daftar Seminar</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="berita.php">Berita</a>
                                </li>
                            </ul>
                            <ul class="navbar-nav ml-md-auto">
                                <li class="nav-item active">
                                     <a class="nav-link" href="register.php">Registrasi<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="login-admin.php">Login</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div> 
    </div>
    <!-- end header end -->        
    <!--banner start -->
    <br/>
    <br/>
    <tr>
        <td>&nbsp; Seminar hamahiswa</td>
        <td>&nbsp; : Rina Ningsih (0110120041) - Sistem Informasi</td>
        <br/>
        <td>&nbsp; Judul</td>
        <td>&nbsp; : Rancang Bangun Aplikasi Seminar Tugas Akhir Menggunakan MVC Framework</td>
        <br/>
        <td>&nbsp; Waktu Seminar</td>
        <td>&nbsp; : Rabu, 12 Januari 2021, jam 10.00</td>
    </tr>
    <br/>
    <br/>
    <h3>Daftar Seminar</h3>
    <div class="container">
    <form action="/action_page.php">
        <label for="fname">NIM</label>
        <input class="number" type="number" id="fname" name="firstname" placeholder="Nim" required>

        <label for="lname">Nama</label>
        <input type="text" id="lname" name="lastname" placeholder="Nama" required>

        <label for="country">Prodi</label>
        <select id="country" name="country" required>
        <option value="pilih">Pilih</option>
        <option value="australia">Teknik Informasi</option>
        <option value="canada">Sistem Informasi</option>
        </select>

        <label for="country">Program</label>
        <select id="country" name="country" required>
        <option value="pilih">Pilih</option>
        <option value="australia">D3</option>
        <option value="canada">S1 Leguler</option>
        <option value="canada">S2 Leguler</option>
        </select>
        <ul>
            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" href="#simpan" aria-hidden="true">Simpan</button>
        </ul>
    </form>
    </div>
    <div class="modal fade" id="simpan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <h5>Data Berhasil di simpan</h5>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      </main>
    </div>
    <!--Contact_section end -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                   <p class="copyright_text"><a href="https://nurulfikri.ac.id/">© 2020 SISTA STT NF. </a></p>
                </div>
            </div>
        </div>
    </div>
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>