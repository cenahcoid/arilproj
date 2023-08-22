<?php
class Fantasi extends JI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->setTheme('dropdown');
  
  }
  public function index()
  {
    $data = array();
    $this->setTitle('Get The Data!');
    $this->setDescription("Here is the example for getting the data.");
    $this->setKeyword('Seme Framework');
    $this->setAuthor('Seme Framework');


    $this->putThemeContent("kategori/fantasi",$data); //pass data to view
    $this->putJsContent("kategori/fantasi_bottom",$data); //pass data to view

    $this->loadLayout("col-3",$data);
    $this->render();
  }
}