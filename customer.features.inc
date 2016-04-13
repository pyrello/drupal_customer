<?php
/**
 * @file
 * customer.features.inc
 */

/**
 * Implements hook_node_info().
 */
function customer_node_info() {
  $items = array(
    'customer' => array(
      'name' => t('Customer'),
      'base' => 'node_content',
      'description' => t('The customer content type stores basic information about customers.'),
      'has_title' => '1',
      'title_label' => t('Name'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
