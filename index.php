<?php
require_once('functions.php');
require_once('data.php');


$page_content = render_template('templates/index.php', ['categories' => $categories, 'ads' => $ads]);
$layout_content = render_template('templates/layout.php', ['title' => $title, 'is_auth' => $is_auth, 'user_name' => $user_name, 'user_avatar' => $user_avatar, 'content' => $page_content, 'categories' => $categories]);

print($layout_content);



function get_time_until_the_end()
{
  date_default_timezone_set('Europe/Moscow');
  date_default_timezone_set('UTC');
  $secs_in_hour = 3600;
  $secs_in_minute = 60;

  $ts = time();
  $ts_midnight = strtotime('tomorrow');
  // $remaining_ts = $ts_midnight - $ts - 10800;

  $remaining_ts = $ts_midnight - $ts;
  // $remaining_hours = floor($remaining_ts / $secs_in_hour);
  // $remaining_minutes = floor(($remaining_ts % $secs_in_hour) / $secs_in_minute);

  $remaining_time = date('H:i', $remaining_ts);

  print(date('H:i', $ts));
  print('<br/>');
  print($remaining_ts);
  print('<br/>');
  print(date('H:i', $remaining_ts));
  print('<br/>');
  print(date('H:i', $remaining_ts));
  print('<br/>');
  print(date('H:i', $remaining_ts));
  print('<br/>');
  print($remaining_time);

  return date('H.i', $remaining_ts);
}

get_time_until_the_end();
