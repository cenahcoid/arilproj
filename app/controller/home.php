<?php
class Home extends JI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->setTheme('front');
    $this->load("a_apikey_model", "aakm");
  }
  public function index()
  {
    $data = array();
    $this->setTitle('Get The Data!');
    $this->setDescription("Here is the example for getting the data.");
    $this->setKeyword('Seme Framework');
    $this->setAuthor('Seme Framework');

    $data['aakm'] = $this->aakm->get();

    $this->putThemeContent("home/home",$data); //pass data to view
    $this->putJsContent("home/home_bottom",$data); //pass data to view

    $this->loadLayout("col-1",$data);
    $this->render();
  }
}