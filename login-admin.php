<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>LOGIN ADMIN</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">	
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/new1.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/fevicon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets -->
<link rel="icon" href="images/sista.ico">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
 
</head>

<body background="images/bglogin.jpeg">
    <div class="container">
        <H1>SISTA</H1>
        <form action="" method="">
            <label>Username</label><input type="text" id="Username">
            <label>Password</label><input type="password" id="Password">
            <button type="submit" onclick="return Submit()">Sign in</button>
        </form>
        <button class="button"><a href="index.php">
            <ul>
                Kembali
            </ul>
        </button></a>
        <p style="color: blue;"> Belum punya akun?
            <a href="register.php">Registrasi di sini</a>
          </p>
    </div>

    <script>
        function Submit(){
            Username = document.getElementById("Username").value;
            Password = document.getElementById("Password").value;

            if (Username == "Admin" && Password == "123"){
            alert("Login Sukses");
            window.location="admin-landing-page.php";
            return false;
            }
            else{
                alert("Username dan Password salah");
            }
        }
    </script>
</body>
</html>