api = 2
core = 7.x

; Modules
projects[admin_menu][subdir] = "contrib"
projects[admin_menu][version] = "3.0-rc4"

projects[ctools][subdir] = "contrib"
projects[ctools][version] = "1.4"

projects[context][subdir] = "contrib"
projects[context][version] = "3.3"

projects[ds][subdir] = "contrib"
projects[ds][version] = "2.6"

projects[entity][subdir] = "contrib"
projects[entity][version] = "1.5"

projects[features][subdir] = "contrib"
projects[features][version] = "2.2"

projects[field_formatter_settings][subdir] = "contrib"
projects[field_formatter_settings][version] = "1.1"

projects[email][subdir] = "contrib"
projects[email][version] = "1.3"

projects[field_group][subdir] = "contrib"
projects[field_group][version] = "1.4"

projects[field_multiple_limit][subdir] = "contrib"
projects[field_multiple_limit][patch][] = "https://drupal.org/files/field_multiple_limit-ignore_missing_cardinality-1958614-1.patch"
projects[field_multiple_limit][version] = "1.0-alpha4"

projects[galleryformatter][subdir] = "contrib"
projects[galleryformatter][version] = "1.3"

projects[gmap][subdir] = "contrib"
projects[gmap][version] = "2.9"

projects[hierarchical_select][subdir] = "contrib"
projects[hierarchical_select][version] = "3.0-alpha5"

projects[jquery_update][subdir] = "contrib"
projects[jquery_update][version] = "2.4"

projects[libraries][subdir] = "contrib"
projects[libraries][version] = "2.2"

projects[location][subdir] = "contrib"
projects[location][version] = "3.4"

projects[location_taxonomize][subdir] = "contrib"
projects[location_taxonomize][patch][] = "http://drupal.org/files/issues/location_taxonomize-add-location-cck-support-1331052-15.patch"
projects[location_taxonomize][version] = "2.4"

projects[node_export][subdir] = "contrib"
projects[node_export][version] = "3.0"

projects[pathauto][subdir] = "contrib"
projects[pathauto][version] = "1.2"

projects[realname][subdir] = "contrib"
projects[realname][version] = "1.2"

projects[search_api][subdir] = "contrib"
projects[search_api][version] = "1.13"

projects[search_api_db][subdir] = "contrib"
projects[search_api_db][version] = "1.4"

projects[search_api_ranges][subdir] = "contrib"
projects[search_api_ranges][version] = "1.5"

projects[facetapi][subdir] = "contrib"
projects[facetapi][version] = "1.5"

projects[facetapi_pretty_paths][subdir] = "contrib"
projects[facetapi_pretty_paths][version] = "1.1"

projects[strongarm][subdir] = "contrib"
projects[strongarm][version] = "2.0"

projects[taxonomy_breadcrumb][subdir] = "contrib"
projects[taxonomy_breadcrumb][patch][] = "http://drupal.org/files/multiple-taxonomy%20terms-breadcrumb-1850040-3.patch"
projects[taxonomy_breadcrumb][version] = "1.x-dev"

projects[sharethis][subdir] = "contrib"
projects[sharethis][version] = "2.9"

projects[taxonomy_csv][subdir] = "contrib"
projects[taxonomy_csv][version] = "5.10"

projects[token][subdir] = "contrib"
projects[token][version] = "1.5"

projects[views_contact_form][subdir] = "contrib"
projects[views_contact_form][patch][] = "http://drupal.org/files/issues/views_contact_form-2144153-11.patch"
projects[views_contact_form][version] = "1.5"

projects[uuid][subdir] = "contrib"
projects[uuid][version] = "1.0-alpha6"

projects[views][subdir] = "contrib"
projects[views][version] = "3.8"

projects[ckeditor][subdir] = "contrib"
projects[ckeditor][version] = "1.15"

; Themes
projects[bootstrap][version] = "3.0"

; Libraries
; Please fill the following out. Type may be one of get, git, bzr or svn,
; and url is the url of the download.
libraries[ckeditor][download][type] = "get"
libraries[ckeditor][download][url] = "http://download.cksource.com/CKEditor/CKEditor/CKEditor%204.3.4/ckeditor_4.3.4_full.zip"
libraries[ckeditor][directory_name] = "ckeditor"
libraries[ckeditor][type] = "library"
