<?php
require_once('functions.php');
?>

<div class="container">
  <section class="promo">
    <h2 class="promo__title">Нужен стафф для катки?</h2>
    <p class="promo__text">На нашем интернет-аукционе ты найдёшь самое эксклюзивное сноубордическое и горнолыжное снаряжение.</p>
    <ul class="promo__list">
      <?php foreach ($categories as $key => $val) : ?>
        <li class="promo__item promo__item--other">
          <a class="promo__link" href="all-lots.html"><?= $val; ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
  </section>

  <section class="lots">
    <div class="lots__header">
      <h2>Открытые лоты</h2>
    </div>
    <ul class="lots__list">
      <?php foreach ($lots as $key => $val) : ?>
        <li class="lots__item lot">
          <div class="lot__image">
            <img src="<?= $val['img']; ?>" width="350" height="260" alt="<?= htmlspecialchars($val['name']); ?>">
          </div>
          <div class="lot__info">
            <span class="lot__category"><?= $val['category']; ?></span>
            <h3 class="lot__title"><a class="text-link" href="lot.php?id=<?= $key; ?>"><?= htmlspecialchars($val['name']); ?></a></h3>
            <div class="lot__state">
              <div class="lot__rate">
                <span class="lot__amount">Стартовая цена</span>
                <span class="lot__cost"><?= format_price(htmlspecialchars($val['price'])); ?></span>
              </div>
              <div class="lot__timer timer">
                <?= get_time_until_the_end(); ?>
              </div>
            </div>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
  </section>
</div>