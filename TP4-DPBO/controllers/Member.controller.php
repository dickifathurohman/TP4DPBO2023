<?php
include_once("conf.php");
include_once("models/Member.class.php");
include_once("models/Grup.class.php");
include_once("views/Member.view.php");
include_once("views/Form.view.php");

class MemberController {
  private $member;
  private $grup;

  function __construct(){
    $this->member = new Member(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
    $this->grup = new Grup(Conf::$db_host, Conf::$db_user, Conf::$db_pass, Conf::$db_name);
  }

  public function index() {
    $this->member->open();
    $this->member->getMember();
    
    $data = array(
      'member' => array()
    );
    while($row = $this->member->getResult()){
      array_push($data['member'], $row);
    }
    $this->member->close();

    $view = new MemberView();
    $view->render($data);
  }

  function input($id){
    $this->member->open();
    $this->grup->open();
    $this->member->getMemberById($id);
    $this->grup->getGrup();
    
    $data = array(
      'member' => array(),
      'grup' => array()
    );

    while ($row = $this->member->getResult()) {
      array_push($data['member'], $row);
    }

    while ($row = $this->grup->getResult()) {
        array_push($data['grup'], $row);
    }

    $this->grup->close();
    $this->member->close();

    $view = new FormView();
    $view->render($id, $data);
  }
  
  function add($data){
    $this->member->open();
    $this->member->add($data);
    $this->member->close();
    
    header("location:index.php");
  }

  function edit($id, $data){
    $this->member->open();
    $this->member->update($id, $data);
    $this->member->close();

    header("location:index.php");
  }

  function delete($id){
    $this->member->open();
    $this->member->delete($id);
    $this->member->close();

    header("location:index.php");
  }

}