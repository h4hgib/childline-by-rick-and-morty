<?php
$module_name = 'A1_Children';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'FNAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_FNAME',
    'width' => '10%',
    'default' => true,
  ),
  'AGE' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_AGE',
    'width' => '10%',
    'default' => true,
  ),
  'GENDER' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_GENDER',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
);
;
?>
