<?php

class Student extends Controller
{
  public function index()
  {
    $dataBody = $this->model('StudentModel')->getUsers();
    $dataHeader['title'] = 'student/index';
    $this->view('student/index', $dataHeader, $dataBody);
  }
  public function detail($id)
  {
    $dataBody = $this->model('StudentModel')->getUser($id);
    $dataHeader['title'] = 'student/detail';
    $this->view('student/detail', $dataHeader, $dataBody);
  }
  public function add()
  {
    if ($this->model('StudentModel')->addUser($_POST) > 0) Flasher::setFlash('berhasil', 'ditambahkan', 'success');
    else Flasher::setFlash('gagal', 'ditambahkan', 'danger');

    header('Location: ' . BASE_URL . '/student');
    exit;
  }
}
