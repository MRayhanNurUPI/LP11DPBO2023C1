<?php

/******************************************
Asisten Pemrogaman 11
 ******************************************/

include_once("model/Template.class.php");
include_once("model/DB.class.php");
include_once("model/Pasien.class.php");
include_once("model/TabelPasien.class.php");
include_once("view/FormPasien.php");


$tp = new FormPasien();

if (isset($_POST['add'])) {
    // memanggil fungsi tambah data
    $tp->tambahData($_POST);
} else if (isset($_POST['edit'])) {
    // memanggil fungsi sunting data
    $id = $_POST['id'];
    $tp->suntingData($id, $_POST);
} else if (!empty($_GET['id_edit'])) {
    //memanggil form edit
    $id = $_GET['id_edit'];
    $tp->tampilSunting($id);
} else {
    //memanggil form tambah
    $tp->tampil();
}
