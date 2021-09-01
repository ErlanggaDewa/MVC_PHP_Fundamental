<?php
class Home extends Controller
{
  public function index()
  {
    $dataHeader['title'] = 'home/index';
    $this->view('home/index', $dataHeader);
  }

  public function page()
  {
    echo "Home/page";
  }
}
