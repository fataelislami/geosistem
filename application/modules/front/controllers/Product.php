<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function _remap($param) {//Agar index bisa diberi parameter
      $this->index($param);
  }

  function index($param=null)
  {
    $data = array();
    if($param!='index'){//ketika parameter url terisi (Task : belum dikasih pengecekan by slug)
      $this->single();
    }else{
      //$data['content']='portal/soal/list';
      $this->list();
    }
    //$this->template->load_front($data);

  }

  function list(){
    $data=array(
      'content'=>'front/product/list'
    );
    $this->template->loadfront($data);
  }

  function single(){
    $data=array(
      'content'=>'front/product/single'
    );
    $this->template->loadfront($data);
  }

}
