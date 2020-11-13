<?php
require_once('functions.php');
require_once('data.php');

$title = 'Добавление лота';

$nav = render_template('templates/nav.php', ['categories' => $categories]);

$page_content = render_template('templates/add-lot.php', ['nav' => $nav]);

$layout_content = render_template('templates/layout.php', ['title' => $title, 'is_auth' => $is_auth, 'user_name' => $user_name, 'user_avatar' => $user_avatar, 'content' => $page_content, 'categories' => $categories]);



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $lot = $_POST;

  $required = [
    'lot-name' => 'Наименование',
    'category' => 'Категория',
    'message' => 'Описание',
    'lot-rate' => 'Начальная цена',
    'lot-step' => 'Шаг ставки',
    'lot-date' => 'Дата окончания торгов',
  ];

  $errors = [];

  foreach ($required as $key => $val) {
    if (empty($_POST[$key])) {
      $errors[$val] = 'Это поле надо заполнить';
    }
  }

  function check_file_type($file_path, $valid_types)
  {
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $file_type = finfo_file($finfo, $tmp_name);
  }


  if (isset($_FILES['image']['name'])) {
    $tmp_name = $_FILES['image']['tmp_name'];
    $path = $_FILES['image']['name'];

    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    $file_type = finfo_file($finfo, $tmp_name);
    if ($file_type !== "image/gif") {
      $errors['file'] = 'Загрузите картинку в формате GIF';
    } else {
      move_uploaded_file($tmp_name, 'uploads/' . $path);
      $gif['path'] = $path;
    }
  } else {
    $errors['file'] = 'Вы не загрузили файл';
  }

  if (count($errors)) {
    $page_content = include_template('add.php', ['gif' => $gif, 'errors' => $errors, 'dict' => $dict]);
  } else {
    $page_content = include_template('view.php', ['gif' => $gif]);
  }
} else {
  $page_content = include_template('add.php', []);
}

$layout_content = include_template('layout.php', [
  'content'    => $page_content,
  'categories' => [],
  'title'      => 'GifTube - Добавление гифки'
]);





print($layout_content);
