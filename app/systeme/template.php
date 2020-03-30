<?php

class Template
{
  public $model;
	public $view;
  
  function load(string $template_view,$data = null){
    $this->view = new View();

    $this->view->load('defaults/template_header',$data);
    /*echo '<body>';
    $this->view->load('pages/header_view',$data);
    $this->view->load('pages/'.$template_view,$data);
    $this->view->load('pages/footer_view',$data);
    echo '</body>';*/
    include "app/views/template-test/defaults/template_main.php";
    //$this->view->load('defaults/template_main',$data);
    $this->view->load('defaults/template_footer',$data);
  }
}



?>