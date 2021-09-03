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

  public function delete($id)
  {
    if ($this->model('StudentModel')->deleteUser($id) > 0) Flasher::setFlash('berhasil', 'dihapus', 'success');
    else Flasher::setFlash('gagal', 'dihapus', 'danger');

    header('Location: ' . BASE_URL . '/student');
    exit;
  }

  public function edit()
  {
    if ($this->model('StudentModel')->editUser($_POST) > 0) Flasher::setFlash('berhasil', 'diubah', 'success');
    else Flasher::setFlash('gagal', 'diubah', 'danger');

    header('Location: ' . BASE_URL . '/student');
    exit;
  }

  public function getEdit()
  {
    echo json_encode($this->model('StudentModel')->getUser($_POST['id']));
  }

  public function search()
  {
    $dataBody = $this->model('StudentModel')->searchUser($_POST['search-keyword']);
    $dataHeader['title'] = 'student/search';
    $this->view('student/index', $dataHeader, $dataBody);
  }
}
