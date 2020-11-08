<!DOCTYPE html>
<html>
<head>
<title>::Absensi Seminar::</title>
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
				<form action="proses_absensi.php" method="post" enctype="multipart/form-data"> 
					<i class="fa fa-user-o" aria-hidden="true"></i>
					<input class="text" type="text" name="npa" placeholder="Nomer Pokok Anggota" required="">                    
                    <input class="text" type="file" name="images" placeholder="gambar" required="" accept="image/*;capture=camera">					
					<input type="submit" name="submit" value="ABSEN">
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
	})

</script>
</body>
</html>