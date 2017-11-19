<?php
$module_name = 'A1_Calls';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CNAME' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CNAME',
    'width' => '10%',
    'default' => true,
  ),
  'CPHONE' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CPHONE',
    'width' => '10%',
    'default' => true,
  ),
  'PREASON' => 
  array (
    'type' => 'enum',
    'studio' => 'visible',
    'label' => 'LBL_PREASON',
    'width' => '10%',
    'default' => true,
  ),
  'RA' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_RA',
    'width' => '10%',
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
