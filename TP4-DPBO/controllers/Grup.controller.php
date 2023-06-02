<?php
include_once("conf.php");
include_once("models/Grup.class.php");
include_once("views/Grup.view.php");

class GrupController {
  private $grup;

  function __construct(){
    $this->grup = new Grup(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
  }

  public function index($id) {
    $this->grup->open();
    $this->grup->getGrup();
    $data = array(
      'grup' => array(),
      'selected' => array()
    );
    while($row = $this->grup->getResult()){
      array_push($data['grup'], $row);
    }

    if (!empty($id)) {
      $this->grup->getGrupById($id);

      while ($row = $this->grup->getResult()) {
          array_push($data['selected'], $row);
      }
  }

    $this->grup->close();

    $view = new GrupView();
    $view->render($data, $id);
  }

  
  function add($data){
    $this->grup->open();
    $this->grup->add($data);
    $this->grup->close();
    
    header("location:grup.php");
  }

  function edit($id, $data){
    $this->grup->open();
    $this->grup->update($id, $data);
    $this->grup->close();
    
    header("location:grup.php");
  }

  function delete($id){
    $this->grup->open();
    $this->grup->delete($id);
    $this->grup->close();
    
    header("location:grup.php");
  }


}