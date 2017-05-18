<?php
/*
Plugin Name: First+Third Admin Pages
Description: Renders fieldmanager fields by page slug
*/

defined('ABSPATH') or die();

add_action('fm_post_page', function() {
  $config_path = WP_CONTENT_DIR . '/admin-pages';

	$id = null;

  if (isset($_GET['action']) && $_GET['action'] === 'edit') {
    $id = intval($_GET['post']);
  }

  if (isset($_POST['action']) && $_POST['action'] === 'editpost') {
    $id = intval($_POST['post_ID']);
  }

  if ($id === null) {
    return;
  }

  $slug = get_post_field('post_name', $id);

  $fieldFile = $config_path . '/' . sanitize_title_with_dashes($slug, null, 'save') . '.php';

  if(file_exists($fieldFile)) {
    include($fieldFile);
  }
});
