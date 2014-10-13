<?php
/**
 * @file
 * classified_advertising_common.features.field_instance.inc
 */

/**
 * Implements hook_field_default_field_instances().
 */
function classified_advertising_common_field_default_field_instances() {
  $field_instances = array();

  // Exported field_instance: 'taxonomy_term-location_taxonomize-location_taxonomize_longname'
  $field_instances['taxonomy_term-location_taxonomize-location_taxonomize_longname'] = array(
    'bundle' => 'location_taxonomize',
    'default_value' => NULL,
    'deleted' => 0,
    'description' => '',
    'display' => array(
      'default' => array(
        'label' => 'above',
        'module' => 'text',
        'settings' => array(
          'field_multiple_limit' => -1,
          'field_multiple_limit_offset' => 0,
        ),
        'type' => 'text_default',
        'weight' => 0,
      ),
    ),
    'entity_type' => 'taxonomy_term',
    'field_name' => 'location_taxonomize_longname',
    'label' => 'Long Name',
    'required' => FALSE,
    'settings' => array(
      'text_processing' => 0,
      'user_register_form' => FALSE,
    ),
    'widget' => array(
      'module' => 'text',
      'settings' => array(
        'size' => 60,
      ),
      'type' => 'text_textfield',
      'weight' => 31,
    ),
  );

  // Translatables
  // Included for use with string extractors like potx.
  t('Long Name');

  return $field_instances;
}
