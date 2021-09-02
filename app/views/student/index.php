<div class="container" style="margin-top:100px;">

  <!-- flasher message to inform admin that the data was successfully or failed to be added-->
  <?= Flasher::getFlash() ?>

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary mb-4" data-mdb-toggle="modal" data-mdb-target="#addData">
    Tambah Data
  </button>

  <!-- Modal -->
  <div class="modal fade" id="addData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
          <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="container mt-4">

          <form method="POST" action="<?= BASE_URL ?>/student/add">
            <!-- Name input -->
            <div class="form-outline mb-4">
              <input type="text" id="name" class="form-control" name="name" />
              <label class="form-label" for="form4Example1">Name</label>
            </div>
            <div class="form-outline mb-4">
              <input type="text" id="nim" class="form-control" name="nim" />
              <label class="form-label" for="form4Example1">NIM</label>
            </div>
            <div class="form-outline mb-4">
              <input type="text" id="email" class="form-control" name="email" />
              <label class="form-label" for="form4Example1">Email</label>
            </div>
            <div class="form-outline mb-4">
              <input type="text" id="college" class="form-control" name="college" />
              <label class="form-label" for="form4Example1">University</label>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">
                Close
              </button>
              <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>

  <h1>Daftar Mahasiswa</h1>
  <div class="row">
    <div class="col-6">
      <ul class="list-group mt-3">
        <?php foreach ($dataBody as $data) : ?>
          <li class="list-group-item d-flex justify-content-between align-items-start"><?= $data['name'] ?>
            <a class="" href="<?= BASE_URL ?>/student/detail/<?= $data['id'] ?>">
              <span class="badge bg-primary">Detail</span>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>