<?php
$module_name = 'A1_AA_Callout';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_CS',
    'width' => '10%',
    'default' => true,
  ),
  'AAREASON' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_AAREASON',
    'width' => '10%',
    'default' => true,
  ),
  'INJ' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_INJ',
    'width' => '10%',
  ),
  'PC' => 
  array (
    'type' => 'bool',
    'default' => true,
    'label' => 'LBL_PC',
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
