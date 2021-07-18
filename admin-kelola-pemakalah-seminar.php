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
<title>Halaman kelola pemakalah seminar</title>
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

<body>
    <div class="header_main">
		<div class="container">
			<div class="logo"><a href="kelola-daftar-peserta-seminar.html"><img src="images/logo.jpeg" alt="Image" style="width:90px;height:70px;"></a></div>
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
                                    <a class="nav-link" href="admin-landing-page.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="admin-jadwal-seminar.php">Jadwal <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="admin-kelola-daftar-seminar.php">Kelola Daftar Seminar<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="admin-kelola-daftar-peserta-seminar.php">Kelola Peserta</a>
                                </li>
                            </ul>
                            <ul class="navbar-nav ml-md-auto">
                                <li class="nav-item active">
                                     <a class="nav-link" href="#">Admin<span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div> 
    </div>
    <br/>
    <br/>
    <!-- end header end --> 
    <!--services start -->
    <div class="about_main">
        <div class="services_main">
            <div align ="center">
                <td>
                    <button class="bubbly-button01">
                        <a class="nav-link" href="admin-kelola-pemakalah-seminar.html">Tambah Baru</a>
                    </button>
                </td>
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
                            <br/>
                            <button><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Update</button>
                            <button><i class="fa fa-trash-o" aria-hidden="true"></i> Hapus</button>
                    </fieldset>
                    <br/>
                </form>
            </div>
        </div>
    </div>
    <script>
        function myfunction(){
            document.getElementById("tambah").value;
            window.location = "daftar-seminar.html";
        }
    </script>
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