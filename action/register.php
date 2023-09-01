<?php
   session_start(); // memulai sesi
   include 'config.php'; // cek koneksi db

   //ini list yang isinya form di halaman register. bisa ditambah dan dikurang sesuai kebutuhan 
    	$name = $_POST['name'];
    	$password = $_POST['password'];
    	$password_confirmation = $_POST['password_confirmation'];
        $role = $_POST['role'];
    
    //validasi jika password & password_confirmation sama
    if($password != $password_confirmation){
    	echo 'Password yang anda masukkan tidak sama dengan password confirmation.';
    	header("Location: ../register.html");
    } 

    //kalau passwordnya sama password confirmation dah sama, baru ke step dibawah
        // query buat nambah data ke database
        $query = "INSERT INTO account (`name`, `password`, `role`) VALUES ('$name', '$password', '$role')";

        //untuk cek koneksi dan hasil dari quey database
        $result   = mysqli_query($connect, $query);
        //jika insert data berhasil
        if ($result) {
            echo "register berhasil, silahkan kembali ke halaman login"; //akan menampilkan pesan register berhasil
        //jika gagal 
        } else {
           echo "register gagal"; //pesan error
        }
    
?>
