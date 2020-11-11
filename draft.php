<ul class="gif-list">
  <?php foreach ($gifs as $key => $val) : ?>
    <li class="gif">
      <div class="gif picture">
        <a href="/gif/view?id ^ ?=$val['id']; ?>" class="gif preview">
          <img src="<?= $val['gif']; ?>">
        </a>
      </div>
      <div class="gif desctiption">
        <h3 class="gif desctiption-title">
          <a href="/gif/view? id <c ?=$val[ ' id ' ] ;?>">
            <?= $val [ 'title' ]; ?></a>
          </ h3>
          <div class="gif description-data">
            <span class="gif username">cO<?= $val[' author']; ?></ span>
              <span class="gif likes" x?=$val[ 'likes_count ' ];?></ span>
          </div>
      </div>
    </li>
  <?php endforeach; ?>
</ul>