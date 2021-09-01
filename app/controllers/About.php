<?php
class About extends Controller
{
  public function index()
  {
    $dataHeader['title'] = 'about/index';
    $dataBody['name'] = "Erlangga Dewa Sakti";
    $dataBody['age'] = "20";
    $dataBody['job'] = "Software Engineer";

    $this->view('about/index', $dataHeader, $dataBody);
  }

  public function page()
  {
    $dataHeader['title'] = 'about/page';

    $this->view('about/page', $dataHeader);
  }
}
