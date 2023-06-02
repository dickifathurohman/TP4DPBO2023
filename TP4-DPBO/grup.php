<?php

include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Grup.controller.php");

$grup = new GrupController();

if (!empty($_GET['id_edit'])) {
    //memanggil add
    $id = $_GET['id_edit'];
    $grup->index($id);
}
else if (isset($_POST['edit'])){

    $id = $_POST['id'];
    $grup->edit($id, $_POST);
}
else if (isset($_POST['add'])) {
    //memanggil add
    $grup->add($_POST);
}
//mengecek apakah ada id_hapus, jika ada maka memanggil fungsi delete
else if (!empty($_GET['id_hapus'])) {
    //memanggil add
    $id = $_GET['id_hapus'];
    $grup->delete($id);
}
else{
    $id = null;
    $grup->index($id);
}

