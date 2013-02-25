<?php
/**
 * Add chunks to build
 * 
 * @package sharelink
 * @subpackage build
 */

$chunks = array();

$chunks[0]= $modx->newObject('modChunk');
$chunks[0]->fromArray(array(
    'id' => 0,
    'name' => 'sharelink',
    'description' => '',
    'snippet' => file_get_contents($sources['source_assets'].'/elements/chunks/sharelink.tpl'),
),'',true,true);


return $chunks;
