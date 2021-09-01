<div class="container" style="margin-top : 100px;">
  <div class="row">
    <div class="col-6 col-md-4">
      <div class="card">
        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
          <img src="https://mdbootstrap.com/img/new/standard/nature/111.jpg" class="img-fluid" />
          <a href="#!">
            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
          </a>
        </div>
        <div class="card-body">
          <h5 class="card-title"><?= $dataBody['name'] ?></h5>
          <h6 class="card-subtitle mb-2 text-muted"><?= $dataBody['nim'] ?></h6>
          <p class="card-text">
            <?= $dataBody['email'] ?>
            <br>
            <?= $dataBody['college'] ?>
          </p>
          <a href="<?= BASE_URL ?>/student" class="btn btn-primary">Back</a>
        </div>
      </div>
    </div>
  </div>
</div>