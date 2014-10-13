
Classified Ads 7.3
==================

===============================================================================
Classified Ads 7.3 is a straight conversion from the 6.3 version on 2011/07/25.

As such it has no notion of Drupal 7 concepts like entities and fields, but is
still a traditional node module. It completely leverages the new APIs in D7,
though: DBTNG, EFQ, Token...

Comments below may or may not apply: they were written for 6.3 and have not yet
been revised for 7.x
===============================================================================

Classified is a new module suite for Classified Ads, which happens to be 
implemented in the same Drupal.org project as the early ED Classified module.


Installing
----------

Follow the normal Drupal installation procedure for a module, including 
installing and enabling its dependencies: core Taxonomy and contrib Token 
modules. Then, configure the module: 

- Optional: allow statistics collection 
  - Enable the "Statistics" module
  - Browse to http://<your site URL>/admin/reports/settings
  - Check "Count content view" and click "Save configuration".

- Browse to http://<your site url>/admin/content/taxonomy
- Click on the "list terms" link on the vocabulary designated as "Classified Ads categories"
- The module installs two categories by default: "For sale" and "Wanted". Define 
  or remove categories to your liking. Take care to keep them in a tree: no term 
  should have more than one parent.
  
- Browse to http://<your site url>/admin/settings/classified
- You can now define the various settings, including Ad lifetime for each of the
  categories you defined previously. Any category without an explicit lifetime
  defined inherits the lifetime of its parent category.
  
- Browse to http://<your site url>/admin/build/block
- You can enable and configure 3 blocks

- Optional: enable notifications
  - Download and enable the contrib "Job queue" module 
  - Enable the Classified Notifications module
  - Browse to http://<your site url>/admin/settings/classified/notifications
  - Configure your notification messages: various tokens are available to
    customize the content, the most important being [ads] and [classified-ads-url]. 

- Optional: getting advanced help
  - Download and enable the Advanced Help module for information on theming or
    using the module API to extend its functionality.


Updating from ED Classified
---------------------------

Although the user interface and features of the modules are largely similar, 
they are quite different under the hood, meaning that switching from 
ED Classified 6.x-2.0-alpha6 to Classified 6.x-3.x basically means a fresh 
install. 

The recommended procedure is as follows:

1. Prepare on the 6.2 side
  - update ed_classified to 6.x-2.0-alpha6
  - go to http://<your site url>/admin/settings/ed-classified and write down the
    current settings 
  - export or delete all existing "Classified Ad" nodes
  - disable ed_classified
  - uninstall ed_classified
    - this will not delete your current ed_classified settings
    - this will not delete the edi_classified_nodes table
  - delete the now-useless edi_classified_nodes table
  - delete all entries in the {variable} table starting with "ed_classified_"
    
2. Clean up
  - delete the ed_classified directory, probably at: 
    <site path>/sites/all/modules/ed_classified

3. Install 6.3
  - download version 6.3 of the Classified Ads project
  - enable the Classified module in the Classified package
  - configure the module as explained in the "Installing" section, possibly
    reapplying settings from ed_classified where they apply.  


Customizing Classified Ads
--------------------------

You can adjust the settings and content of the Classified Ads vocabulary and
its associated Taxonomy field, but MUST NOT remove them or the module will no
longer work.

This module can be customized and extended in a number of ways:

- A bundled Context 3 condition plugin allowing you to trigger reactions on
  paths controlled by the module
- Views integration allows you to build views including the non-CCK fields of
  ads in addition to the core and CCK fields
- CCK integration allows you 
  - to customize the placement of the Expiration widget on ad pages
  - to customize the rendering of the default Ads list page by modifying the
    "Classified Ads" build mode  
- The main Ads listing page, in addition to being customizable at the build mode
  level, is also a theme template which you can override in your site theme for
  even more flexibility
- The module defined three hooks which custom modules can use to override its
  default behaviours. 
  
These features are detailed in the Advanced Help section for the module.
