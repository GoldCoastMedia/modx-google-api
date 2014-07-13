<?php
/**
 * systemSettings transport file for GoogleAPI extra
 *
 * Copyright 2014 by Dan Gibbs 
 * Created on 07-13-2014
 *
 * @package GoogleAPI
 * @subpackage build
 */

if (! function_exists('stripPhpTags')) {
    function stripPhpTags($filename) {
        $o = file_get_contents($filename);
        $o = str_replace('<' . '?' . 'php', '', $o);
        $o = str_replace('?>', '', $o);
        $o = trim($o);
        return $o;
    }
}
/* @var $modx modX */
/* @var $sources array */
/* @var xPDOObject[] $systemSettings */


$systemSettings = array();

$systemSettings[1] = $modx->newObject('modSystemSetting');
$systemSettings[1]->fromArray(array (
  'key' => 'googleapi_system_setting1',
  'name' => 'Google Developer Key',
  'description' => 'Google Developer/API Key',
  'namespace' => 'googleapi',
  'xtype' => 'password',
  'value' => '',
  'area' => 'api',
), '', true, true);
return $systemSettings;
