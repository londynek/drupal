<?php
/**
 * @file
 * classified_advertising_ad_search.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function classified_advertising_ad_search_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "context" && $api == "context") {
    return array("version" => "3");
  }
  if ($module == "facetapi" && $api == "facetapi_defaults") {
    return array("version" => "1");
  }
  if ($module == "strongarm" && $api == "strongarm") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_views_api().
 */
function classified_advertising_ad_search_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_default_search_api_index().
 */
function classified_advertising_ad_search_default_search_api_index() {
  $items = array();
  $items['ad_search'] = entity_import('search_api_index', '{
    "name" : "Ad search",
    "machine_name" : "ad_search",
    "description" : null,
    "server" : "db_server",
    "item_type" : "node",
    "options" : {
      "index_directly" : 0,
      "cron_limit" : "50",
      "fields" : {
        "author" : { "type" : "integer", "entity_type" : "user" },
        "created" : { "type" : "date" },
        "field_ad_category" : { "type" : "list\\u003Cinteger\\u003E", "entity_type" : "taxonomy_term" },
        "field_ad_price" : { "type" : "decimal" },
        "search_api_language" : { "type" : "string" },
        "status" : { "type" : "integer" },
        "type" : { "type" : "string" }
      },
      "data_alter_callbacks" : {
        "search_api_alter_add_viewed_entity" : { "status" : 1, "weight" : "-50", "settings" : { "mode" : "full" } },
        "search_api_alter_add_aggregation" : { "status" : 1, "weight" : "-49", "settings" : [] },
        "search_api_alter_bundle_filter" : {
          "status" : 1,
          "weight" : "-48",
          "settings" : { "default" : "0", "bundles" : { "classified" : "classified" } }
        },
        "search_api_ranges_alter" : { "status" : 0, "weight" : "-47", "settings" : { "fields" : [] } },
        "search_api_alter_node_status" : { "status" : 0, "weight" : "-46", "settings" : [] },
        "search_api_alter_node_access" : { "status" : 0, "weight" : "-45", "settings" : [] },
        "search_api_alter_add_url" : { "status" : 0, "weight" : "-44", "settings" : [] },
        "search_api_alter_add_hierarchy" : { "status" : 0, "weight" : "-43", "settings" : { "fields" : [] } }
      },
      "processors" : {
        "search_api_case_ignore" : { "status" : 1, "weight" : "0", "settings" : { "fields" : [] } },
        "search_api_html_filter" : {
          "status" : 1,
          "weight" : "10",
          "settings" : {
            "fields" : [],
            "title" : 0,
            "alt" : 1,
            "tags" : "h1 = 5\\r\\nh2 = 3\\r\\nh3 = 2\\r\\nstrong = 2\\r\\nb = 2\\r\\nem = 1.5\\r\\nu = 1.5"
          }
        },
        "search_api_tokenizer" : {
          "status" : 1,
          "weight" : "20",
          "settings" : { "fields" : [], "spaces" : "[^[:alnum:]]", "ignorable" : "[\\u0027]" }
        },
        "search_api_stopwords" : {
          "status" : 0,
          "weight" : "30",
          "settings" : {
            "fields" : [],
            "file" : "",
            "stopwords" : "but\\r\\ndid\\r\\nthe this that those\\r\\netc"
          }
        },
        "search_api_highlighting" : {
          "status" : 0,
          "weight" : "35",
          "settings" : {
            "prefix" : "\\u003Cstrong\\u003E",
            "suffix" : "\\u003C\\/strong\\u003E",
            "excerpt" : 1,
            "excerpt_length" : "256",
            "highlight" : "always"
          }
        }
      }
    },
    "enabled" : "1",
    "read_only" : "0",
    "rdf_mapping" : []
  }');
  return $items;
}

/**
 * Implements hook_default_search_api_server().
 */
function classified_advertising_ad_search_default_search_api_server() {
  $items = array();
  $items['db_server'] = entity_import('search_api_server', '{
    "name" : "DB server",
    "machine_name" : "db_server",
    "description" : "",
    "class" : "search_api_db_service",
    "options" : {
      "database" : "default:default",
      "min_chars" : "3",
      "indexes" : { "ad_search" : {
          "type" : {
            "table" : "search_api_db_ad_search",
            "column" : "type",
            "type" : "string",
            "boost" : "1.0"
          },
          "status" : {
            "table" : "search_api_db_ad_search",
            "column" : "status",
            "type" : "integer",
            "boost" : "1.0"
          },
          "created" : {
            "table" : "search_api_db_ad_search",
            "column" : "created",
            "type" : "date",
            "boost" : "1.0"
          },
          "author" : {
            "table" : "search_api_db_ad_search",
            "column" : "author",
            "type" : "integer",
            "boost" : "1.0"
          },
          "field_ad_category" : {
            "table" : "search_api_db_ad_search_field_ad_category",
            "column" : "value",
            "type" : "list\\u003Cinteger\\u003E",
            "boost" : "1.0"
          },
          "field_ad_price" : {
            "table" : "search_api_db_ad_search",
            "column" : "field_ad_price",
            "type" : "decimal",
            "boost" : "1.0"
          },
          "search_api_language" : {
            "table" : "search_api_db_ad_search",
            "column" : "search_api_language",
            "type" : "string",
            "boost" : "1.0"
          }
        }
      }
    },
    "enabled" : "1",
    "rdf_mapping" : []
  }');
  return $items;
}
