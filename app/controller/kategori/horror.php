<?php
class Horror extends JI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->setTheme('front');
  
  }
  public function index()
  {
    $data = array();
    $this->setTitle('Get The Data!');
    $this->setDescription("Here is the example for getting the data.");
    $this->setKeyword('Seme Framework');
    $this->setAuthor('Seme Framework');


    $this->putThemeContent("kategori/horror",$data); //pass data to view
    $this->putJsContent("kategori/horror_bottom",$data); //pass data to view

    $this->loadLayout("landing_page",$data);
    $this->render();
  }
}