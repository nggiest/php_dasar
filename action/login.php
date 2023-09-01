<?php
session_start(); // memulai sesi
include 'config.php'; // cek koneksi db

        // di form login kan pake nama sama password doang ya, jadi yaudah ini aja yang dipake
        // kalau mau ditambahin juga serah, yang penting di form login juga ditambahin
         $name = $_POST["name"];
         $password = $_POST["password"];

         // query untuk cek nama yang kita ketik ada di table accunt
         // tadi pertama kita bikin db, terus ada table account ceunah
         $query = "SELECT * FROM account WHERE name='$name'";

         $result = mysqli_query($connect, $query); //untuk cek hasil query dan koneksi db
         $hasil = $result->num_rows > 0; //untuk cek hasil apakah nama yg login ada di db atau engga
         $data = mysqli_fetch_assoc($result);  //untuk ngambil data yang login. kaya nama yg login dan rolenya apa

         if ($hasil) { //jika hasilnya ada maka ...

            if ($data["role"] === "admin") { // kita cek lagi nih rolenya apa, kalau rolenya admin
                header("location:/latihanphp/admin.html"); //dia bakalan auto ke halaman admin.html
            } else { // sebaliknya kalau role doi bukan admin
               header("location:/latihanphp/editor.html");//dia bakalan auto ke halaman editor.html
            }
         } else { // jika hasilnya kaga ada
            echo "akun belum ada"; // ya bakal muncul akun belum ada aja sih, register dulu :)
         }
?>