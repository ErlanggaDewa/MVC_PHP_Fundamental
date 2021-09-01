<div class="container text-center" style="margin-top : 100px;">

  <img alt="example" class="img-fluid rounded-circle shadow-2-strong " src="<?= BASE_URL ?>/img/about-me.jpg" width="300px" height="300px" />

  <figure class="text-center">
    <blockquote class="blockquote">
      <p>
        Hallo my name is <?= $dataBody['name'] ?>
        <br>
        I am <?= $dataBody['age'] ?> years old
      </p>
    </blockquote>
    <figcaption class="blockquote-footer">
      i am a <cite title="Source Title"><?= $dataBody['job'] ?></cite>
    </figcaption>
  </figure>
</div>