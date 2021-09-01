<?php
class Controller
{
  public function view($view, $dataHeader = [], $dataBody = [], $dataFooter = [])
  {
    require_once "../app/views/partials/header.php";
    require_once "../app/views/{$view}.php";
    require_once "../app/views/partials/footer.php";
  }

  public function model($model)
  {
    require_once "../app/models/{$model}.php";
    return new $model;
  }
}
