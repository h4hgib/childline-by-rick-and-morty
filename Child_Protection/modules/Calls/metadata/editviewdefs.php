<?php
$module_name = 'A1_Calls';
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
        'LBL_EDITVIEW_PANEL2' => 
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
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'diverse',
            'label' => 'LBL_DIVERSE',
          ),
          1 => 
          array (
            'name' => 'diverse_type',
            'studio' => 'visible',
            'label' => 'LBL_DIVERSE_TYPE',
          ),
        ),
        2 => 
        array (
          0 => 'description',
          1 => '',
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'fu',
            'label' => 'LBL_FU',
          ),
          1 => 
          array (
            'name' => 'ra',
            'label' => 'LBL_RA',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'preason',
            'studio' => 'visible',
            'label' => 'LBL_PREASON',
          ),
          1 => 
          array (
            'name' => 'sreason',
            'studio' => 'visible',
            'label' => 'LBL_SREASON',
          ),
        ),
      ),
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'cname',
            'label' => 'LBL_CNAME',
          ),
          1 => 
          array (
            'name' => 'cphone',
            'label' => 'LBL_CPHONE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'caddress',
            'label' => 'LBL_CADDRESS',
          ),
          1 => 
          array (
            'name' => 'caddress_city',
            'label' => 'LBL_CADDRESS_CITY',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'caddress_postalcode',
            'label' => 'LBL_CADDRESS_POSTALCODE',
          ),
          1 => 
          array (
            'name' => 'caddress_country',
            'label' => 'LBL_CADDRESS_COUNTRY',
          ),
        ),
      ),
      'lbl_editview_panel2' => 
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
