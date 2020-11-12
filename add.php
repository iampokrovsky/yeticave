<?php
require_once('functions.php');
require_once('data.php');

$title = 'Добавление лота';

$nav = render_template('templates/nav.php', ['categories' => $categories]);

$page_content = render_template('templates/add-lot.php', ['nav' => $nav]);

$layout_content = render_template('templates/layout.php', ['title' => $title, 'is_auth' => $is_auth, 'user_name' => $user_name, 'user_avatar' => $user_avatar, 'content' => $page_content, 'categories' => $categories]);

print($layout_content);
