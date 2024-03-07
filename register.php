<?php
include "koneksi.php"
//inisialisasi
if (isset($_POST[submit])) {
    $UserID = $Username = $Password = $Email = $NamaLengkap = $Alamat = "";
    $UserID = @$_POST ['Username'];
    $Username = @$_POST ['Username'];
    $Password = @$_POST ['Username'];
    $Email = @$_POST ['Username'];
    $NamaLengkap 
