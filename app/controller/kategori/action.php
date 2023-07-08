<?php
class Action extends JI_Controller
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


    $this->putThemeContent("kategori/action",$data); //pass data to view
    $this->putJsContent("kategori/action_bottom",$data); //pass data to view

    $this->loadLayout("col-1",$data);
    $this->render();
  }
}