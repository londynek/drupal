<?php
/**
 * @file
 * classified_advertising_common.field_group.inc
 */

/**
 * Implements hook_field_group_info().
 */
function classified_advertising_common_field_group_info() {
  $export = array();

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_ad_description|node|classified|default';
  $field_group->group_name = 'group_ad_description';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'classified';
  $field_group->mode = 'default';
  $field_group->parent_name = 'group_tab_group';
  $field_group->data = array(
    'label' => 'Description',
    'weight' => '4',
    'children' => array(
      0 => 'body',
    ),
    'format_type' => 'htab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => '',
        'id' => '',
      ),
    ),
  );
  $export['group_ad_description|node|classified|default'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_ad_location|node|classified|default';
  $field_group->group_name = 'group_ad_location';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'classified';
  $field_group->mode = 'default';
  $field_group->parent_name = 'group_tab_group';
  $field_group->data = array(
    'label' => 'Location',
    'weight' => '5',
    'children' => array(
      0 => 'field_ad_location',
    ),
    'format_type' => 'htab',
    'format_settings' => array(
      'formatter' => 'closed',
      'instance_settings' => array(
        'description' => '',
        'classes' => '',
        'id' => '',
      ),
    ),
  );
  $export['group_ad_location|node|classified|default'] = $field_group;

  $field_group = new stdClass();
  $field_group->disabled = FALSE; /* Edit this to true to make a default field_group disabled initially */
  $field_group->api_version = 1;
  $field_group->identifier = 'group_tab_group|node|classified|default';
  $field_group->group_name = 'group_tab_group';
  $field_group->entity_type = 'node';
  $field_group->bundle = 'classified';
  $field_group->mode = 'default';
  $field_group->parent_name = '';
  $field_group->data = array(
    'label' => 'Tab group',
    'weight' => '4',
    'children' => array(
      0 => 'group_ad_description',
      1 => 'group_ad_location',
    ),
    'format_type' => 'htabs',
    'format_settings' => array(
      'formatter' => '',
      'instance_settings' => array(
        'classes' => '',
      ),
    ),
  );
  $export['group_tab_group|node|classified|default'] = $field_group;

  return $export;
}
