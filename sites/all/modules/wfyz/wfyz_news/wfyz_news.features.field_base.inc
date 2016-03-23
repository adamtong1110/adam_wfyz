<?php
/**
 * @file
 * wfyz_news.features.field_base.inc
 */

/**
 * Implements hook_field_default_field_bases().
 */
function wfyz_news_field_default_field_bases() {
  $field_bases = array();

  // Exported field_base: 'field_info_category'.
  $field_bases['field_info_category'] = array(
    'active' => 1,
    'cardinality' => 1,
    'deleted' => 0,
    'entity_types' => array(),
    'field_name' => 'field_info_category',
    'indexes' => array(
      'tid' => array(
        0 => 'tid',
      ),
    ),
    'locked' => 0,
    'module' => 'taxonomy',
    'settings' => array(
      'allowed_values' => array(
        0 => array(
          'vocabulary' => 'info_category',
          'parent' => 0,
        ),
      ),
      'profile2_private' => FALSE,
    ),
    'translatable' => 0,
    'type' => 'taxonomy_term_reference',
  );

  return $field_bases;
}