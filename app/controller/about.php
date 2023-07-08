<?php
class Dashboard extends JI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->setTheme('front');

  }
  public function index()
  {
    $this->getThemeElement('about');
  }
} 