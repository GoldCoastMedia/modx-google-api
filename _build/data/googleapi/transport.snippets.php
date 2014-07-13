<?php
/**
 * snippets transport file for GoogleAPI extra
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
/* @var xPDOObject[] $snippets */


$snippets = array();

$snippets[1] = $modx->newObject('modSnippet');
$snippets[1]->fromArray(array (
  'id' => 1,
  'description' => 'Google API Client Library',
  'name' => 'GoogleAPI',
), '', true, true);
$snippets[1]->setContent(file_get_contents($sources['source_core'] . '/elements/snippets/googleapi.snippet.php'));

return $snippets;
