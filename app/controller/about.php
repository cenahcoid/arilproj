<?php
class Home extends JI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->setTheme('front');
  }
  public function index()
  {
    $data = array();
    $this->setTitle('About');
    $this->setDescription("Here is the example for getting the data.");
    $this->setKeyword('Seme Framework');
    $this->setAuthor('Seme Framework');

    $this->putThemeContent("about",$data); //pass data to view
    $this->loadLayout("col-1",$data);
    $this->render();
  }
}