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


function get_time_until_the_end()
{
  $secs_in_hour = 3600;
  $time_zone_correction = $secs_in_hour * 3;

  date_default_timezone_set('Europe/Moscow');

  $ts = time();
  $ts_midnight = strtotime('tomorrow');
  $remaining_ts = $ts_midnight - $ts;
  $remaining_time = date('H:i', $remaining_ts - $time_zone_correction);

  return $remaining_time;
}


function render_template(string $template, array $data)
{
  extract($data);
  ob_start();
  require_once($template);
  return ob_get_clean();
}
