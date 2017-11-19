<?php
$module_name = 'A1_Children';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'DEFAULT' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
      'syncDetailEditViews' => true,
    ),
    'panels' => 
    array (
      'default' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 
          array (
            'name' => 'fname',
            'label' => 'LBL_FNAME',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'mname',
            'label' => 'LBL_MNAME',
          ),
          1 => 
          array (
            'name' => 'faname',
            'label' => 'LBL_FANAME',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'age',
            'studio' => 'visible',
            'label' => 'LBL_AGE',
          ),
          1 => 
          array (
            'name' => 'dob',
            'label' => 'LBL_DOB',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'gender',
            'studio' => 'visible',
            'label' => 'LBL_GENDER',
          ),
          1 => 'assigned_user_name',
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'address',
            'label' => 'LBL_ADDRESS',
          ),
          1 => 
          array (
            'name' => 'address_city',
            'label' => 'LBL_ADDRESS_CITY',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'created_by_name',
            'label' => 'LBL_CREATED',
          ),
          1 => 
          array (
            'name' => 'date_entered',
            'comment' => 'Date record created',
            'label' => 'LBL_DATE_ENTERED',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'modified_by_name',
            'label' => 'LBL_MODIFIED_NAME',
          ),
          1 => 
          array (
            'name' => 'date_modified',
            'comment' => 'Date record last modified',
            'label' => 'LBL_DATE_MODIFIED',
          ),
        ),
      ),
    ),
  ),
);
;
?>
