<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends MY_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data=array(
      'content'=>'front/landing',
      'landing'=>true
    );
    $this->template->loadfront($data);
  }

  function about_us(){
    $data=array(
      'content'=>'front/about_us'
    );
    $this->template->loadfront($data);
  }

  function services(){
    $data=array(
      'content'=>'front/services'
    );
    $this->template->loadfront($data);
  }
  function project_detail(){
    $data=array(
      'content'=>'front/project-detail'
    );
    $this->template->loadfront($data);
  }

  function news(){
    $data=array(
      'content'=>'front/news'
    );
    $this->template->loadfront($data);
  }
  function news_detail(){
    $data=array(
      'content'=>'front/news-detail'
    );
    $this->template->loadfront($data);
  }

  function faq(){
    $data=array(
      'content'=>'front/faq'
    );
    $this->template->loadfront($data);
  }

  function contact(){
    $data=array(
      'content'=>'front/contact'
    );
    $this->template->loadfront($data);
  }
  function project(){
    $data=array(
      'content'=>'front/project'
    );
    $this->template->loadfront($data);
  }
  function p404(){
    $data=array(
      'content'=>'front/404'
    );
    $this->template->loadfront($data);
  }



}
