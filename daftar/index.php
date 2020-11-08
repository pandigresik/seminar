<!DOCTYPE html>
<html>
<head>
<title>::Daftar Seminar::</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Daftar Seminar" />

<!-- jika halaaman di refersh maka akan scroll ootmatis ke atas -->
<script type="application/x-javascript"> 
addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font --> 
<link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i&amp;subset=latin-ext" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- perintah bg bergerak berada di folder video -->
	<div data-vide-bg="video/1">
	
	<div class="main-w3layouts center-container">
		<h1><img src="images/iconamin.png" /><br/>Daftar Seminar</h1>
		<div class="main-agileinfo">
			<div class="agileits-top"> 
				<form action="isi.php" method="post"> 
					<i class="fa fa-user-o" aria-hidden="true"></i>
					<input class="text" type="text" name="npa" placeholder="Nomer Pokok Anggota" required="">
                    <input class="text" type="text" name="nama" placeholder="Nama Lengkap" required="">
                    <input class="text" type="text" name="alamat" placeholder="Alamat Anda" required="">
					<input class="text" type="text" name="sekolah" placeholder="Nama Sekolah" required="">
                    <input class="text" type="text" name="tgl_lahir" placeholder="Tanggal Lahir Anda (yyyy-mm-dd)" required="">
                    <input class="text email" type="email" name="email" placeholder="Email" required="">
					<div class="wthree-text">  
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>Saya Setuju dengan <a href="#">Syarat dan Ketentuan</a> berlaku.</span> 
						</label>  
						<div class="clear"> </div>
					</div>   
					<input type="submit" value="DAFTAR">
				</form>
			</div>	 
		</div>	
		<!-- copyright -->
		<div class="w3copyright-agile">
			<h2>© 2018. Amin Seminar. Allright Reserved.</h2>
		</div>
		<!-- //copyright -->	
	</div>	
	</div>	
	<!-- //main --> 
	<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/jquery.vide.min.js"></script>
<script src="js/jquery.maskedinput.min.js"></script>
<!-- //js -->
<script type="text/javascript">
	$(function(){
		$('input[name=npa]').mask("99999999999");
		$('input[name=tgl_lahir]').mask("9999-99-99");
	})

</script>
</body>
</html>