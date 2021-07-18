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
<link rel="stylesheet" type="text/css" href="css/new.css">

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
                                    <a class="nav-link" href="index.php">Jadwal <span class="sr-only">(current)</span></a>
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
    <div class="about_main">
    <div class="services_main">
        <div align ="center">
            <h3>Pendaftaran seminar berlaku untuk mahasiswa yang telah mendapatkan persetujuan dari Pembimbing TA</h3>
            <br/>
            <form method="POST">
                <fieldset>
                        <legend>Form Daftar Seminar TA</legend>
                        <br/>
                        <table cellspacing="0px" cellpadding="20px" >
                            <tr>
                                <td>NIM</td>
                                <td> &nbsp;:<input type="number" name="number" required></td>
                                <td>Judul TA :</td>
                                <td> &nbsp;<textarea name="textarea" id="" cols="8" rows="4" required></textarea></td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td> &nbsp;:<input type="text" name="text" required></td>
                            </tr>
                            <tr>
                                <td>Program Studi</td>
                                <td> &nbsp;:<select name="select" required>
                                    <option value="1">Filih</option>
                                    <option value="2">Sistem Informasi</option>
                                    <option value="3">Teknik Informatika</option>
                                </select>
                                
                                <td>Seminar</td>
                                <td> &nbsp;:<select>
                                    <option value="1">Proposal</option>
                                    <option value="2">Seminar Hasil</option>
                                    <option value="3">Seminar Akhir</option>
                                </select>
                            </tr>
                            <tr>
                                <td>Tanggal Seminar</td>
                                <td> &nbsp;:<input type="date" name="start_date" id="startdate" value="01/01/2021" required></td>
                            
                                <td>Pembimbing</td>
                                <td> &nbsp;:<select>
                                    <option value="1">Sirojul Munir SSI, M.KOM</option>
                                    <option value="2">Ahmad Rio M.SI</option>
                                    <option value="3">Amalia Rahmah M.T</option>
                                </select>
                            </tr>
                            <tr>
                                <td>Jam Seminar</td>
                                <td> &nbsp;:<input type="text" name="text" required></td>
            
                                <td>Penguji 1</td>
                                <td> &nbsp;:<select>
                                    <option value="1">Ahmad Rio M.SI</option>
                                    <option value="2">Sirojul Munir SSI, M.KOM</option>
                                </select>
                            </tr>
                            <tr>
                                <td>Ruangan</td>
                                <td> &nbsp;:<input type="text" name="text" required></td>
                        
                                <td>Penguji 2</td>
                                <td> &nbsp;:<select>
                                    <option value="1">Amalia RAhmah M.T</option>
                                    <option value="2">Ahmad Rio M.SI</option>
                                </select>
                            </tr>
                        </table>
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" href="#simpan">Simpan</button>
                </fieldset>
            </form>
        </div>
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