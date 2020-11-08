<!DOCTYPE html>
<html lang="en">
<!-- Head -->

<head>
    <title>::Masuk Seminar::</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Amin Richman">
	
    <script>
	//jika di refresh maka kembali ke scrool atas halaman(otomatis)
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
	
	
    <!-- //Meta-Tags -->
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <!-- //Custom-Stylesheet-Links -->

    <!-- Icon-->
    <link rel="icon" type="image/png" sizes="96x96" href="images/iconamin.png">

    <!--fonts -->
    <link href="//fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400,500,600,700,800" rel="stylesheet">
    
	<!-- //fonts -->
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all">
    <!-- //Font-Awesome-File-Links -->
</head>
<!-- //Head -->
<!-- Body -->

<body>
    <h1 class="title-agile text-center"><img src="images/iconamin.png"></img><br/>Masuk Admin Seminar</h1>
    <div class="content-w3ls">
        <div class="content-bottom">
            <form action="cek_login.php" method="post">
                
				<div class="field-group">
                    <span class="fa fa-user" aria-hidden="true"></span>
                    <div class="wthree-field">
                        <input name="username" id="text1" type="text" value="" placeholder="Nama Pengguna" required>
                    </div>
                </div>
				
                <div class="field-group">
                    <span class="fa fa-lock" aria-hidden="true"></span>
                    <div class="wthree-field">
                        <input name="password" id="myInput" type="Password" placeholder="Kata Sandi">
                    </div>
                </div>
				
                <div class="field-group">
                    <div class="check">
                        <label class="checkbox w3l">
                            <input type="checkbox" onclick="myFunction()">
                            <i> </i>Perlihatkan Kata Sandi</label>
                    </div>
					
					
                    <!-- script for show password -->
                    <script>
                        function myFunction() {
							// id selector untuk mengambil nilai yg ada pada idmyinput
                            var x = document.getElementById("myInput");
							
							//kondisi jika cekbok dicentang maka pwd akan terlihat
                            if (x.type === "password") {
                                x.type = "text";
                            } else {
                                x.type = "password";
                            }
                        }
                    </script>
                    <!-- //script for show password -->
                </div>
                <div class="wthree-field">
                    <input id="saveForm" name="saveForm" type="submit" value="Masuk" />
                </div>
                <ul class="list-login">
                    <li>
                    <font color="white">Belum mendaftar?</font>
                    </li>
                    <li>
                       <a href="daftar/" class="text-right">Daftar</a>
                    </li>                    
                    <li class="clearfix"></li>
                </ul>
                <div>
                       <a href="daftar/absensi.php" style="color:#FFFFFF" class="text-right">Absen Kehadiran</a>
                    </div>
            </form>
        </div>
    </div>
    <div class="copyright text-center">
        <p>© 2018 Amin Seminar. Allright Reserved.
        </p>
    </div>
</body>
<!-- //Body -->
</html>