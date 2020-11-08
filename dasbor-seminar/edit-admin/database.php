<?php 

class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "proyek";

	function __construct(){
		mysql_connect($this->host, $this->uname, $this->pass);
		mysql_select_db($this->db);
	}

	function tampil_data(){
		$data = mysql_query("select * from admin");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;

	}

	function input($nama,$alamat,$usia,$email){
		mysql_query("insert into user values('','$nama','$alamat','$tgl_lahir','$email')");
	}

	function hapus($id_user){
		mysql_query("delete from admin where id_user='$id_user'");
	}

	function edit($id_user){
		$data = mysql_query("select * from admin where id_user='$id_user'");
		while($d = mysql_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	function update($id_user,$nama,$username,$password){
		mysql_query("update admin set nama='$nama', username='$username', password='$password' where id_user='$id_user'");
	}

} 

?>