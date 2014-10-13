<?php
/**
 * @file
 * classified_advertising_common.ds.inc
 */

/**
 * Implements hook_ds_field_settings_info().
 */
function classified_advertising_common_ds_field_settings_info() {
  $export = array();

  $ds_fieldsetting = new stdClass();
  $ds_fieldsetting->api_version = 1;
  $ds_fieldsetting->id = 'node|classified|teaser';
  $ds_fieldsetting->entity_type = 'node';
  $ds_fieldsetting->bundle = 'classified';
  $ds_fieldsetting->view_mode = 'teaser';
  $ds_fieldsetting->settings = array(
    'title' => array(
      'weight' => '1',
      'label' => 'hidden',
      'format' => 'default',
      'formatter_settings' => array(
        'link' => '1',
        'wrapper' => 'b',
        'class' => '',
      ),
    ),
    'post_date' => array(
      'weight' => '4',
      'label' => 'hidden',
      'format' => 'ds_post_date_short',
    ),
  );
  $export['node|classified|teaser'] = $ds_fieldsetting;

  return $export;
}

/**
 * Implements hook_ds_layout_settings_info().
 */
function classified_advertising_common_ds_layout_settings_info() {
  $export = array();

  $ds_layout = new stdClass();
  $ds_layout->api_version = 1;
  $ds_layout->id = 'node|classified|teaser';
  $ds_layout->entity_type = 'node';
  $ds_layout->bundle = 'classified';
  $ds_layout->view_mode = 'teaser';
  $ds_layout->layout = 'ds_3col';
  $ds_layout->settings = array(
    'regions' => array(
      'left' => array(
        0 => 'field_ad_photos',
      ),
      'middle' => array(
        1 => 'title',
        2 => 'field_ad_category',
      ),
      'right' => array(
        3 => 'field_ad_price',
        4 => 'post_date',
      ),
    ),
    'fields' => array(
      'field_ad_photos' => 'left',
      'title' => 'middle',
      'field_ad_category' => 'middle',
      'field_ad_price' => 'right',
      'post_date' => 'right',
    ),
    'classes' => array(),
    'wrappers' => array(
      'left' => 'div',
      'middle' => 'div',
      'right' => 'div',
    ),
    'layout_wrapper' => 'div',
    'layout_attributes' => '',
    'layout_attributes_merge' => 1,
    'layout_link_attribute' => '',
    'layout_link_custom' => '',
  );
  $export['node|classified|teaser'] = $ds_layout;

  return $export;
}
