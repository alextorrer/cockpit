<?php
 return array (
  'name' => 'bio',
  'label' => 'bio',
  '_id' => 'bio',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'published',
      'label' => 'Published',
      'type' => 'boolean',
      'default' => '',
      'info' => '',
      'localize' => false,
      'options' => 
      array (
        'default' => false,
        'label' => false,
      ),
      'width' => '1-1',
      'lst' => true,
    ),
    1 => 
    array (
      'name' => 'content',
      'label' => 'Content',
      'type' => 'html',
      'default' => '',
      'info' => '',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-1',
      'lst' => true,
    ),
    2 => 
    array (
      'name' => 'images',
      'label' => '',
      'type' => 'gallery',
      'default' => '',
      'info' => 'images',
      'group' => '',
      'localize' => false,
      'options' => 
      array (
      ),
      'width' => '1-1',
      'lst' => true,
      'acl' => 
      array (
      ),
    ),
  ),
  'sortable' => false,
  'in_menu' => false,
  '_created' => 1611770202,
  '_modified' => 1611802597,
  'color' => '',
  'acl' => 
  array (
  ),
  'sort' => 
  array (
    'column' => '_created',
    'dir' => -1,
  ),
  'rules' => 
  array (
    'create' => 
    array (
      'enabled' => false,
    ),
    'read' => 
    array (
      'enabled' => false,
    ),
    'update' => 
    array (
      'enabled' => false,
    ),
    'delete' => 
    array (
      'enabled' => false,
    ),
  ),
  'icon' => 'login.svg',
);