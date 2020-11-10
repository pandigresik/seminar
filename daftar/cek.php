<?php 
include "../koneksi.php";
?>
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
	<?php
        $npa = '';
        $info = '';
		if($_POST['submit']){
            $npa = $_POST['npa'];
			$sql = "select * from user where npa = '{$npa}'";            
            $result = mysql_query($sql);
			if(mysql_num_rows($result)){
				$data = mysql_fetch_array($result);				
                $info = '<div style="padding:10px;background:#FFFFFF">
							<div>Hasil pengecekan</div>
							<hr>
							<ul>
								<li>NPA     :'.$data['npa'].'</li>
								<li>Nama    :'.$data['nama'].'</li>
								<li>Email   :'.$data['email'].'</li>
								<li>Sekolah :'.$data['sekolah'].'</li>
								<li>Daftar  :'.$data['wkt_dftr'].'</li>
							</ul>
						</div>
					';
			}else{
                $info = '<div style="padding:10px;background:#FFFFFF">NPA tersebut tidak ditemukan, silakan lakukan pendaftaran di <a href="index.php">Daftar</a></div>';
			}
            
			
		}
	?>
	<div class="main-w3layouts center-container">
		<h1><img src="images/iconamin.png" /><br/>Daftar Seminar</h1>
		<div class="main-agileinfo">
			<div class="agileits-top"> 
				<form action="" method="post" enctype="multipart/form-data"> 
					<i class="fa fa-user-o" aria-hidden="true"></i>
					<input class="text" type="text" name="npa" placeholder="Nomer Pokok Anggota" required="" value="<?php echo $npa ?>">                    
					<input type="submit" name="submit" value="CEK">
				</form>
			</div>
			<?php echo $info ?>	 
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