<?php
/**
 * @file
 * classified_advertising_demo.features.node_export_features.inc
 */

/**
 * Implements hook_node_export_features_default().
 */
function classified_advertising_demo_node_export_features_default() {
  $node_export = array(
  'code_string' => 'array(
  (object) array(
      \'vid\' => \'3\',
      \'uid\' => \'1\',
      \'title\' => \'Used Moto g 16GB\',
      \'log\' => \'\',
      \'status\' => \'1\',
      \'comment\' => \'1\',
      \'promote\' => \'1\',
      \'sticky\' => \'0\',
      \'vuuid\' => \'5654881d-6bb7-4748-8028-363762354ba6\',
      \'nid\' => \'3\',
      \'type\' => \'classified\',
      \'language\' => \'und\',
      \'created\' => \'1407587184\',
      \'changed\' => \'1407587184\',
      \'tnid\' => \'0\',
      \'translate\' => \'0\',
      \'uuid\' => \'601ba945-95b9-449c-abfe-73c1090c03cf\',
      \'revision_timestamp\' => \'1407587184\',
      \'revision_uid\' => \'1\',
      \'body\' => array(
        \'und\' => array(
          array(
            \'value\' => "<p>One month used Moto g 16GB</p>\\r\\n",
            \'summary\' => \'\',
            \'format\' => \'filtered_html\',
            \'safe_value\' => "<p>One month used Moto g 16GB</p>\\n",
            \'safe_summary\' => \'\',
          ),
        ),
      ),
      \'field_ad_category\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'20\',
          ),
          array(
            \'tid\' => \'21\',
          ),
        ),
      ),
      \'field_ad_location\' => array(
        \'und\' => array(
          array(
            \'lid\' => \'2\',
            \'name\' => \'\',
            \'street\' => \'\',
            \'additional\' => \'\',
            \'city\' => \'San Francisco\',
            \'province\' => \'CA\',
            \'postal_code\' => \'\',
            \'country\' => \'us\',
            \'latitude\' => \'37.774930\',
            \'longitude\' => \'-122.419416\',
            \'source\' => \'1\',
            \'is_primary\' => \'0\',
            \'locpick\' => array(
              \'user_latitude\' => \'37.774930\',
              \'user_longitude\' => \'-122.419416\',
            ),
            \'province_name\' => \'California\',
            \'country_name\' => \'United States\',
          ),
        ),
      ),
      \'field_ad_photos\' => array(),
      \'field_ad_price\' => array(
        \'und\' => array(
          array(
            \'value\' => \'100.00\',
          ),
        ),
      ),
      \'field_location_taxonomize_terms\' => array(),
      \'rdf_mapping\' => array(
        \'rdftype\' => array(
          \'sioc:Item\',
          \'foaf:Document\',
        ),
        \'title\' => array(
          \'predicates\' => array(
            \'dc:title\',
          ),
        ),
        \'created\' => array(
          \'predicates\' => array(
            \'dc:date\',
            \'dc:created\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'changed\' => array(
          \'predicates\' => array(
            \'dc:modified\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'body\' => array(
          \'predicates\' => array(
            \'content:encoded\',
          ),
        ),
        \'uid\' => array(
          \'predicates\' => array(
            \'sioc:has_creator\',
          ),
          \'type\' => \'rel\',
        ),
        \'name\' => array(
          \'predicates\' => array(
            \'foaf:name\',
          ),
        ),
        \'comment_count\' => array(
          \'predicates\' => array(
            \'sioc:num_replies\',
          ),
          \'datatype\' => \'xsd:integer\',
        ),
        \'last_activity\' => array(
          \'predicates\' => array(
            \'sioc:last_activity_date\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
      ),
      \'cid\' => \'0\',
      \'last_comment_timestamp\' => \'1407587184\',
      \'last_comment_name\' => NULL,
      \'last_comment_uid\' => \'1\',
      \'comment_count\' => \'0\',
      \'name\' => \'admin\',
      \'picture\' => \'0\',
      \'data\' => \'a:6:{s:7:"contact";i:1;s:16:"ckeditor_default";s:1:"t";s:20:"ckeditor_show_toggle";s:1:"t";s:14:"ckeditor_width";s:4:"100%";s:13:"ckeditor_lang";s:2:"en";s:18:"ckeditor_auto_lang";s:1:"t";}\',
      \'path\' => array(
        \'pid\' => \'42\',
        \'source\' => \'node/3\',
        \'alias\' => \'used-moto-g-16gb-3\',
        \'language\' => \'und\',
      ),
      \'menu\' => NULL,
      \'node_export_drupal_version\' => \'7\',
    ),
  (object) array(
      \'vid\' => \'2\',
      \'uid\' => \'1\',
      \'title\' => \'Samsung galaxy note\',
      \'log\' => \'\',
      \'status\' => \'1\',
      \'comment\' => \'1\',
      \'promote\' => \'1\',
      \'sticky\' => \'0\',
      \'vuuid\' => \'73b8bb5a-7cea-4d35-9c45-43ec29e6ff36\',
      \'nid\' => \'2\',
      \'type\' => \'classified\',
      \'language\' => \'und\',
      \'created\' => \'1407585988\',
      \'changed\' => \'1407586570\',
      \'tnid\' => \'0\',
      \'translate\' => \'0\',
      \'uuid\' => \'aa769dc1-0faf-419e-8f6b-8b4366895610\',
      \'revision_timestamp\' => \'1407586570\',
      \'revision_uid\' => \'1\',
      \'body\' => array(
        \'und\' => array(
          array(
            \'value\' => "<p>My mobile is good condition, usage period is short time, No problem</p>\\r\\n",
            \'summary\' => \'\',
            \'format\' => \'filtered_html\',
            \'safe_value\' => "<p>My mobile is good condition, usage period is short time, No problem</p>\\n",
            \'safe_summary\' => \'\',
          ),
        ),
      ),
      \'field_ad_category\' => array(
        \'und\' => array(
          array(
            \'tid\' => \'20\',
          ),
          array(
            \'tid\' => \'21\',
          ),
        ),
      ),
      \'field_ad_location\' => array(
        \'und\' => array(
          array(
            \'lid\' => \'1\',
            \'name\' => \'\',
            \'street\' => \'\',
            \'additional\' => \'\',
            \'city\' => \'Virginia Beach\',
            \'province\' => \'VA\',
            \'postal_code\' => \'\',
            \'country\' => \'us\',
            \'latitude\' => \'36.852926\',
            \'longitude\' => \'-75.977985\',
            \'source\' => \'1\',
            \'is_primary\' => \'0\',
            \'locpick\' => array(
              \'user_latitude\' => \'36.852926\',
              \'user_longitude\' => \'-75.977985\',
            ),
            \'province_name\' => \'Virginia\',
            \'country_name\' => \'United States\',
          ),
        ),
      ),
      \'field_ad_photos\' => array(),
      \'field_ad_price\' => array(
        \'und\' => array(
          array(
            \'value\' => \'1500.00\',
          ),
        ),
      ),
      \'field_location_taxonomize_terms\' => array(),
      \'rdf_mapping\' => array(
        \'rdftype\' => array(
          \'sioc:Item\',
          \'foaf:Document\',
        ),
        \'title\' => array(
          \'predicates\' => array(
            \'dc:title\',
          ),
        ),
        \'created\' => array(
          \'predicates\' => array(
            \'dc:date\',
            \'dc:created\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'changed\' => array(
          \'predicates\' => array(
            \'dc:modified\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
        \'body\' => array(
          \'predicates\' => array(
            \'content:encoded\',
          ),
        ),
        \'uid\' => array(
          \'predicates\' => array(
            \'sioc:has_creator\',
          ),
          \'type\' => \'rel\',
        ),
        \'name\' => array(
          \'predicates\' => array(
            \'foaf:name\',
          ),
        ),
        \'comment_count\' => array(
          \'predicates\' => array(
            \'sioc:num_replies\',
          ),
          \'datatype\' => \'xsd:integer\',
        ),
        \'last_activity\' => array(
          \'predicates\' => array(
            \'sioc:last_activity_date\',
          ),
          \'datatype\' => \'xsd:dateTime\',
          \'callback\' => \'date_iso8601\',
        ),
      ),
      \'cid\' => \'0\',
      \'last_comment_timestamp\' => \'1407585988\',
      \'last_comment_name\' => NULL,
      \'last_comment_uid\' => \'1\',
      \'comment_count\' => \'0\',
      \'name\' => \'admin\',
      \'picture\' => \'0\',
      \'data\' => \'a:6:{s:7:"contact";i:1;s:16:"ckeditor_default";s:1:"t";s:20:"ckeditor_show_toggle";s:1:"t";s:14:"ckeditor_width";s:4:"100%";s:13:"ckeditor_lang";s:2:"en";s:18:"ckeditor_auto_lang";s:1:"t";}\',
      \'path\' => array(
        \'pid\' => \'41\',
        \'source\' => \'node/2\',
        \'alias\' => \'samsung-galaxy-note-2\',
        \'language\' => \'und\',
      ),
      \'menu\' => NULL,
      \'node_export_drupal_version\' => \'7\',
    ),
)',
);
  return $node_export;
}
