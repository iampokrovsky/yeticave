<?php

function format_price($price)
{
  $price = ceil($price);

  if (!($price < 1000)) {
    $price = number_format($price, 0, '.', ' ');
  }

  $price = $price . ' ₽';

  return $price;
}


function render_template(string $template, array $data)
{
  extract($data);
  ob_start();
  require_once($template);
  return ob_get_clean();
}
