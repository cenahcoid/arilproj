<?php
class About extends JI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->setTheme('history');
  
  }
  public function index()
  {
    $data = array();
    $this->setTitle('Get The Data!');
    $this->setDescription("Here is the example for getting the data.");
    $this->setKeyword('Seme Framework');
    $this->setAuthor('Seme Framework');


    $this->putThemeContent("about/home",$data); //pass data to view
    $this->putJsContent("about/home_bottom",$data); //pass data to view

    $this->loadLayout("col-2",$data);
    $this->render();
  }
}