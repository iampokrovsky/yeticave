<?php
require_once('functions.php');
require_once('data.php');

$title = 'Yeti Cave';

$page_content = render_template('templates/index.php', ['categories' => $categories, 'lots' => $lots]);

$layout_content = render_template('templates/layout.php', ['title' => $title, 'is_auth' => $is_auth, 'user_name' => $user_name, 'user_avatar' => $user_avatar, 'content' => $page_content, 'categories' => $categories]);

print($layout_content);
