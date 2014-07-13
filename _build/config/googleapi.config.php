<?php

$packageNameLower = 'googleapi'; /* No spaces, no dashes */

$components = array(
    /* These are used to define the package and set values for placeholders */
    'packageName' => 'googleapi',  /* No spaces, no dashes */
    'packageNameLower' => $packageNameLower,
    'packageDescription' => 'Google API Client Library for MODX',
    'version' => '1.0.4',
    'release' => 'beta',
    'author' => 'Dan Gibbs',
    'email' => '',
    'authorUrl' => 'http://www.goldcoastmedia.co.uk/',
    'authorSiteName' => "Gold Coast Media",
    'packageDocumentationUrl' => 'http://www.goldcoastmedia.co.uk/tools/modx/google-api-client',
    'copyright' => '2014',

    /* no need to edit this except to change format */
    'createdon' => strftime('%m-%d-%Y'),

    'gitHubUsername' => 'GoldCoastMedia',
    'gitHubRepository' => 'modx-google-api',

    /* two-letter code of your primary language */
    'primaryLanguage' => 'en',

    /* Set directory and file permissions for project directories */
    'dirPermission'  => 0755,  /* No quotes!! */
    'filePermission' => 0644, /* No quotes!! */

    /* Define source and target directories */

    /* path to MyComponent source files */
    'mycomponentRoot' => $this->modx->getOption('mc.root', null,
        MODX_CORE_PATH . 'components/mycomponent/'),

    /* path to new project root */
    'targetRoot' => MODX_ASSETS_PATH . 'mycomponents/' . $packageNameLower . '/',


    /* *********************** NEW SYSTEM SETTINGS ************************ */

    /* If your extra needs new System Settings, set their field values here.
     * You can also create or edit them in the Manager (System -> System Settings),
     * and export them with exportObjects. If you do that, be sure to set
     * their namespace to the lowercase package name of your extra */

    'newSystemSettings' => array(
		'googleapi_application' => array( // key
            'key' => 'googleapi.application',
            'name' => 'Google API Application Name',
            'description' => 'The default application name to use in the library.',
            'namespace' => 'googleapi',
            'xtype' => 'textfield',
            'value' => '[[++site_name]]',
            'area' => 'api',
        ),
        'googleapi_key' => array( // key
            'key' => 'googleapi.key',
            'name' => 'Google API Developer Key',
            'description' => 'The default developer key to use in the library. See <a href="https://code.google.com/apis/console">API Console</a>',
            'namespace' => 'googleapi',
            'xtype' => 'text-password',
            'value' => '1234567890',
            'area' => 'api',
        ),
    ),


    'namespaces' => array(
        'googleapi' => array(
            'name' => 'googleapi',
            'path' => '{core_path}components/googleapi/',
            'assets_path' => '{assets_path}components/googleapi/',
        ),

    ),

    /* (optional) will make all element objects static - 'static' field above will be ignored */
    'allStatic' => false,

    /* ********************************************* */
    /* Define basic directories and files to be created in project*/

    'docs' => array(
        'readme.txt',
        'license.txt',
        'changelog.txt',
    ),

    /* (optional) Description file for GitHub project home page */
    'readme.md' => true,
    /* assume every package has a core directory */
    'hasCore' => true,


    /* *******************************************
     * These settings control exportObjects.php  *
     ******************************************* */
    /* ExportObjects will update existing files. If you set dryRun
       to '1', ExportObjects will report what it would have done
       without changing anything. Note: On some platforms,
       dryRun is *very* slow  */

    'dryRun' => '0',

    /* Array of elements to export. All elements set below will be handled.
     *
     * To export resources, be sure to list pagetitles and/or IDs of parents
     * of desired resources
    */
    'process' => array(
        'contexts',
        'snippets',
        'plugins',
        'templateVars',
        'templates',
        'chunks',
        'resources',
        'propertySets',
        'systemSettings',
        'contextSettings',
        'systemEvents',
        'menus'
    ),
    /*  Array  of resources to process. You can specify specific resources
        or parent (container) resources, or both.

        They can be specified by pagetitle or ID, but you must use the same method
        for all settings and specify it here. Important: use IDs if you have
        duplicate pagetitles */
    'getResourcesById' => false,

    'exportResources' => array(
        // 'Resource1',
        // 'Resource2',
    ),
    /* Array of resource parent IDs to get children of. */
    'parents' => array(),
    /* Also export the listed parent resources
      (set to false to include just the children) */
    'includeParents' => false,


    /* ******************** LEXICON HELPER SETTINGS ***************** */
    /* These settings are used by LexiconHelper */
    'rewriteCodeFiles' => false,  /* remove ~~descriptions */
    'rewriteLexiconFiles' => true, /* automatically add missing strings to lexicon files */
    /* ******************************************* */

    /* Array of aliases used in code for the properties array.
     * Used by the checkproperties utility to check properties in code against
     * the properties in your properties transport files.
     * if you use something else, add it here (OK to remove ones you never use.
     * Search also checks with '$this->' prefix -- no need to add it here. */
    'scriptPropertiesAliases' => array(
        // 'props',
        // 'sp',
        // 'config',
        // 'scriptProperties'
    ),
);

return $components;
