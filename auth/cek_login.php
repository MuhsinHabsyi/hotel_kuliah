<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include '../koneksi/koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * FROM users WHERE username='$username' AND password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['level']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:../admin/index.php");
 
	// cek jika user login sebagai resepsionis
	}else if($data['level']=="resepsionis"){
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "resepsionis";
        // alihkan ke halaman dashboard resepsionis
        header("location:../resepsionis/index.php");
    
    // cek jika user login sebagai tamu
    }else if($data['level']=="tamu"){
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "tamu";
        // alihkan ke halaman dashboard tamu
        header("location:../tamu/index.php");
    
    }else{
    
        // alihkan ke halaman login kembali
        header("location:login.php?pesan=gagal");
    }
}else{
    header("location:login.php?pesan=gagal");
}

?>