<?php
require_once('functions.php');
require_once('data.php');


if (isset($_GET['id'])) {
  $id =  $_GET['id'];
};

if ($id < count($lots)) {
  $title = $lots[$id]['name'];
  $nav = render_template('templates/nav.php', ['categories' => $categories]);
  $page_content = render_template('templates/lot.php', ['nav' => $nav, 'lot' => $lots[$id]]);
} else {
  http_response_code(404);
  $title = 'Страница не найдена';
  $page_content = render_template('templates/404.php');
};

$layout_content = render_template('templates/layout.php', ['title' => $title, 'is_auth' => $is_auth, 'user_name' => $user_name, 'user_avatar' => $user_avatar, 'content' => $page_content, 'categories' => $categories]);

print($layout_content);
