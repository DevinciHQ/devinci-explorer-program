<?php
/**
 * @file
 * custom_config.features.menu_links.inc
 */

/**
 * Implements hook_menu_default_menu_links().
 */
function custom_config_menu_default_menu_links() {
  $menu_links = array();

  // Exported menu link: navigation_all-movies:node/12.
  $menu_links['navigation_all-movies:node/12'] = array(
    'menu_name' => 'navigation',
    'link_path' => 'node/12',
    'router_path' => 'node/%',
    'link_title' => 'All Movies',
    'options' => array(
      'attributes' => array(
        'title' => '',
      ),
      'identifier' => 'navigation_all-movies:node/12',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 0,
    'customized' => 1,
  );
  // Exported menu link: navigation_all-stars:node/13.
  $menu_links['navigation_all-stars:node/13'] = array(
    'menu_name' => 'navigation',
    'link_path' => 'node/13',
    'router_path' => 'node/%',
    'link_title' => 'All Stars',
    'options' => array(
      'identifier' => 'navigation_all-stars:node/13',
    ),
    'module' => 'menu',
    'hidden' => 0,
    'external' => 0,
    'has_children' => 0,
    'expanded' => 0,
    'weight' => 0,
    'customized' => 0,
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('All Movies');
  t('All Stars');

  return $menu_links;
}
