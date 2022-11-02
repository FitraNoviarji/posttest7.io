<?php
$koneksi = mysqli_connect("localhost", "root", "", "multilevel");

//login
if(isset($_POST['login'])){
$username = $_POST['uname'];
$password = $_POST['psw'];

$cekuser = mysqli_query($koneksi, "select * from user where username ='$username' and password ='$password'");
$hitung = mysqli_num_rows($cekuser);

if($hitung>0){
    //kalau data ditemukan
    $ambildatarole = mysqli_fetch_array($cekuser);
    $role = $ambildatarole['role']; 

    if($role== 'admin'){
        //kalo admin
        $_SESSION['log'] = 'Logged';
        $_SESSION['role'] = 'Admin';
        header('location:admin');

    }else {
        //kalo bukan admin
        $_SESSION['log'] = 'Logged';
        $_SESSION['role'] = 'User';
        header('location:user');
    }

}else{
    //kalau tidak ditemukan
    echo 'Data tidak ditemukan';
}

};



//fungsi tambah tiket
if(isset($_POST['tambahfilm'])){
    $judulfilm = $_POST['judul'];
    $waktutayang = $_POST['waktutayang'];
    $hargatiket = $_POST['hargatiket'];
    $desc = $_POST['deskripsi'];
    $rate = $_POST['rate'];
    $tgl = $_POST['tanggal'];
    $gmbr = $_POST['gambar'];
    $addnewfilm = mysqli_query($koneksi, "insert into tiket (judulfilm, waktutayang, hargatiket, deskripsi, rate, tanggal, gambar) values ('$judulfilm','$waktutayang','$hargatiket','$desc','$rate' , '$tgl', '$gmbr')");


    if($addnewfilm){
        header('location:../admin');
    }else{
        header('location:/..admin');
    }


}


?>














