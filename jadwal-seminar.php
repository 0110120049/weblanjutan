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
    <!--services start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                NO
                            </th>
                            <th>
                                NIM
                            </th>
                            <th>
                                Nama Mahasiswa/i
                            </th>
                            <th>
                                Seminar
                            </th>
                            <th>
                                Waktu
                            </th>
                            <th>
                                Ruang
                            </th>
                            <th>
                                Keterangan
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="table-active">
                            <td>1</td>
                            <td id="nim">0110120049</td>
                            <td id="nama">Arif Budiman</td>
                            <td id="Seminar">Seminar proposal</td>
                            <td id="waktu">Senin, 12 Desember 2020. 10.00</td>
                            <td id="ruangan">online</td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" href="#modalDetail01" data-idmitra="1">Detail</button>
                            </td>
                        </tr>
                        <tr class="table-success">
                            <td>
                                2
                            </td>
                            <td>
                                0110120099
                            </td>
                            <td>
                                Gigih Novika
                            </td>
                            <td>
                                Seminar proposal
                            </td>
                            <td>
                                10:00 12/01/2021
                            </td>
                            <td>
                                online
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" href="#modalDetail02" data-idmitra="1">Detail</button>
                            </td>
                        </tr>
                        <tr class="table-warning">
                            <td>
                                3
                            </td>
                            <td>
                                0110120076
                            </td>
                            <td>
                                Siti pujayansyah
                            <td>
                                Seminar proposal
                            </td>
                            <td>
                                80:00 15/01/2021
                            </td>
                            <td>
                                online
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" href="#modalDetail03" data-idmitra="1">Detail</button>
                            </td>
                        </tr>
                        <tr class="table-danger">
                            <td>
                                4
                            </td>
                            <td>
                                0110120041
                            </td>
                            <td>
                                Rina Ningsih
                            </td>
                            <td>
                                Seminar proposal
                            </td>
                            <td>
                                15:00 10/01/2021
                            </td>
                            <td>
                                online
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" href="#modalDetail04" data-idmitra="1">Detail</button>
                            </td>
                        </tr>
                        <tr class="table-active">
                            <td>
                                5
                            </td>
                            <td>
                                0110118017
                            </td>
                            <td>
                                Dulsaid
                            </td>
                            <td>
                                Seminar proposal
                            </td>
                            <td>
                                10:00 11/01/2021
                            </td>
                            <td>
                                online
                            </td>
                            <td>
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" href="#modalDetail05" data-idmitra="1">Detail</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalDetail01" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Detail Mahasiswa</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <table>
                    <tr>
                        <td>NIM</td>
                        <td> &nbsp;: 0110120049</td>
                        <td>Pembimbing</td>
                        <td> : Sirojul Munir S.SI, M.KOM</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td> : Arif Budiman</td>
                        <td>Penguji</td>
                        <td> : Ahmad Rio, M.Si</td>
                    </tr>
                    <tr>
                        <td>Program Studi</td>
                        <td> : Sistem Informasi</td>
                    </tr>
                    <tr>
                        <td>Judul</td>
                        <td> : Rencana Bangun Aplikasi Seminar Tugas Akhir</td>
                    </tr>
                    <tr>
                        <td>Waktu</td>
                        <td> : Senin, 12 Desember 2020. 10.00</td>
                    </tr>
                    <tr>
                        <td>Ruang </td>
                        <td> : Zoom Online</td>
                    </tr>
                    <tr>
                        <td>Kelas</td>
                        <td> : SI06</td>
                    </tr>
                </table>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button tabindex="button" class="btn btn-secondary">
                        <a href="pendaftaran-peserta1.html">Daftar</a>
                    </button>
                </div>
            </div>
         </div>
        </div>
    </div>
    <div class="modal fade" id="modalDetail02" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Detail Mahasiswa</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <table>
                <tr>
                    <td>NIM</td>
                    <td> &nbsp;: 0110120099</td>
                    <td>Pembimbing</td>
                    <td> : Sirojul Munir S.SI, M.KOM</td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td> : Gigih Novika</td>
                    <td>Penguji</td>
                    <td> : Ahmad Rio, M.Si</td>
                </tr>
                <tr>
                    <td>Program Studi</td>
                    <td> : Sistem Informasi</td>
                </tr>
                <tr>
                    <td>Judul</td>
                    <td> : Rencana Bangun Aplikasi Seminar Tugas Akhir</td>
                </tr>
                <tr>
                    <td>Waktu</td>
                    <td> : Senin, 12 Januari 2021. 10.00</td>
                </tr>
                <tr>
                    <td>Ruang </td>
                    <td> : Zoom Online</td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td> : SI06</td>
                </tr>
            </table>
            </table>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button tabindex="button" class="btn btn-secondary">
                <a href="pendaftaran-peserta2.html">Daftar</a>
            </button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="modalDetail03" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Detail Mahasiswa</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <table>
                <tr>
                    <td>NIM</td>
                    <td> &nbsp;: 0110120076</td>
                    <td>Pembimbing</td>
                    <td> : Sirojul Munir S.SI, M.KOM</td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td> : Siti Pujayansyah</td>
                    <td>Penguji</td>
                    <td> : Ahmad Rio, M.Si</td>
                </tr>
                <tr>
                    <td>Program Studi</td>
                    <td> : Sistem Informasi</td>
                </tr>
                <tr>
                    <td>Judul</td>
                    <td> : Rencana Bangun Aplikasi Seminar Tugas Akhir</td>
                </tr>
                <tr>
                    <td>Waktu</td>
                    <td> : Senin, 15 Januari 2021. 08.00</td>
                </tr>
                <tr>
                    <td>Ruang </td>
                    <td> : Zoom Online</td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td> : SI06</td>
                </tr>
            </table>
            </table>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button tabindex="button" class="btn btn-secondary">
                <a href="pendaftaran-peserta3.html">Daftar</a>
            </button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="modalDetail04" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Detail Mahasiswa</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <table>
                <tr>
                    <td>NIM</td>
                    <td> &nbsp;: 0110120041</td>
                    <td>Pembimbing</td>
                    <td> : Sirojul Munir S.SI, M.KOM</td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td> : Rina Ningsih</td>
                    <td>Penguji</td>
                    <td> : Ahmad Rio, M.Si</td>
                </tr>
                <tr>
                    <td>Program Studi</td>
                    <td> : Sistem Informasi</td>
                </tr>
                <tr>
                    <td>Judul</td>
                    <td> : Rencana Bangun Aplikasi Seminar Tugas Akhir</td>
                </tr>
                <tr>
                    <td>Waktu</td>
                    <td> : Senin, 10 Januari 2021. 15.00</td>
                </tr>
                <tr>
                    <td>Ruang </td>
                    <td> : Zoom Online</td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td> : SI06</td>
                </tr>
            </table>
            </table>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button tabindex="button" class="btn btn-secondary">
                <a href="pendaftaran-peserta.html">Daftar</a>
            </button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="modalDetail05" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Detail Mahasiswa</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <table>
                <tr>
                    <td>NIM</td>
                    <td> &nbsp;: 0110118017</td>
                    <td>Pembimbing</td>
                    <td> : Sirojul Munir S.SI, M.KOM</td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td> : Dulsaid</td>
                    <td>Penguji</td>
                    <td> : Ahmad Rio, M.Si</td>
                </tr>
                <tr>
                    <td>Program Studi</td>
                    <td> : Sistem Informasi</td>
                </tr>
                <tr>
                    <td>Judul</td>
                    <td> : Rencana Bangun Aplikasi Seminar Tugas Akhir</td>
                </tr>
                <tr>
                    <td>Waktu</td>
                    <td> : Senin, 11 Januari 2021. 10.00</td>
                </tr>
                <tr>
                    <td>Ruang </td>
                    <td> : Zoom Online</td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td> : SI06</td>
                </tr>
            </table>
            </table>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button tabindex="button" class="btn btn-secondary">
                <a href="pendaftaran-peserta4.html">Daftar</a>
            </button>
            </div>
          </div>
        </div>
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