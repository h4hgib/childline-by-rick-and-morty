<?php
$module_name = 'A1_AA_Callout';
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
          1 => 'assigned_user_name',
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'cs',
            'label' => 'LBL_CS',
          ),
          1 => 
          array (
            'name' => 'op',
            'studio' => 'visible',
            'label' => 'LBL_OP',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'aareason',
            'label' => 'LBL_AAREASON',
          ),
          1 => 
          array (
            'name' => 'arreasion',
            'label' => 'LBL_ARREASION',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'aofname',
            'label' => 'LBL_AOFNAME',
          ),
          1 => 
          array (
            'name' => 'aofnum',
            'label' => 'LBL_AOFNUM',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'interv',
            'label' => 'LBL_INTERV',
          ),
          1 => 
          array (
            'name' => 'interviewers',
            'studio' => 'visible',
            'label' => 'LBL_INTERVIEWERS',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'rr',
            'label' => 'LBL_RR',
          ),
          1 => 
          array (
            'name' => 'ms',
            'label' => 'LBL_MS',
          ),
        ),
        6 => 
        array (
          0 => 
          array (
            'name' => 'inj',
            'label' => 'LBL_INJ',
          ),
          1 => 
          array (
            'name' => 'injcond',
            'studio' => 'visible',
            'label' => 'LBL_INJCOND',
          ),
        ),
        7 => 
        array (
          0 => 
          array (
            'name' => 'injdesc',
            'studio' => 'visible',
            'label' => 'LBL_INJDESC',
          ),
          1 => 
          array (
            'name' => 'lawyer',
            'label' => 'LBL_LAWYER',
          ),
        ),
        8 => 
        array (
          0 => 'description',
          1 => 
          array (
            'name' => 'at',
            'label' => 'LBL_AT',
          ),
        ),
        9 => 
        array (
          0 => 
          array (
            'name' => 'pc',
            'label' => 'LBL_PC',
          ),
          1 => 
          array (
            'name' => 'time',
            'label' => 'LBL_TIME',
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
