<?php
require_once('functions.php');
require_once('data.php');


$page_content = render_template('templates/index.php', ['categories' => $categories, 'ads' => $ads]);
$layout_content = render_template('templates/layout.php', ['title' => $title, 'is_auth' => $is_auth, 'user_name' => $user_name, 'user_avatar' => $user_avatar, 'content' => $page_content, 'categories' => $categories]);

print($layout_content);

print(get_time_until_the_end());
