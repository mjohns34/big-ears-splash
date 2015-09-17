<?php  return array (
  1 => 
  array (
    'basePath' => 'assets/images/',
    'basePathRelative' => true,
    'baseUrl' => 'assets/images/',
    'baseUrlRelative' => true,
    'allowedFileTypes' => '',
    'imageExtensions' => 'jpg,jpeg,png,gif',
    'thumbnailType' => 'png',
    'thumbnailQuality' => 90,
    'skipFiles' => '.svn,.git,_notes,nbproject,.idea,.DS_Store',
    'id' => NULL,
    'name' => 'Images',
    'description' => '',
    'class_key' => 'modFileMediaSource',
    'properties' => 
    array (
      'basePath' => 
      array (
        'name' => 'basePath',
        'desc' => 'prop_file.basePath_desc',
        'type' => 'textfield',
        'options' => 
        array (
        ),
        'value' => 'assets/images/',
        'lexicon' => 'core:source',
      ),
      'baseUrl' => 
      array (
        'name' => 'baseUrl',
        'desc' => 'prop_file.baseUrl_desc',
        'type' => 'textfield',
        'options' => 
        array (
        ),
        'value' => 'assets/images/',
        'lexicon' => 'core:source',
      ),
    ),
    'is_stream' => true,
    'source' => 5,
    'object_class' => 'modTemplateVar',
    'object' => 1,
    'context_key' => 'web',
    'source_class_key' => 'sources.modFileMediaSource',
  ),
  2 => 
  array (
    'basePath' => '',
    'basePathRelative' => true,
    'baseUrl' => '',
    'baseUrlRelative' => true,
    'allowedFileTypes' => '',
    'imageExtensions' => 'jpg,jpeg,png,gif',
    'thumbnailType' => 'png',
    'thumbnailQuality' => 90,
    'skipFiles' => '.svn,.git,_notes,nbproject,.idea,.DS_Store',
    'id' => NULL,
    'name' => 'Filesystem',
    'description' => '',
    'class_key' => 'modFileMediaSource',
    'properties' => 
    array (
    ),
    'is_stream' => true,
    'source' => 1,
    'object_class' => 'modTemplateVar',
    'object' => 2,
    'context_key' => 'web',
    'source_class_key' => 'sources.modFileMediaSource',
  ),
);