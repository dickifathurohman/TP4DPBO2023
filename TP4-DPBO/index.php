<?php
include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Member.controller.php");

$member = new MemberController();

if(!empty($_GET['create'])){
$id = $_GET['create'];
  $member->input($id);
}
else if (isset($_POST['add'])) {
    $member->add($_POST);
}
else if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $member->edit($id, $_POST);
}
else if (!empty($_GET['id_hapus'])) {
    //memanggil hapus
    $id = $_GET['id_hapus'];
    $member->delete($id);
}
else if (!empty($_GET['id_edit'])) {
    //memanggil form edit
    $id = $_GET['id_edit'];
    $member->input($id);
}
else{
    $member->index();
}
