<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Theme Option',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'ALUSOFT Framework <small>by DoanLoc</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'general',
  'title'       => 'Cấu hình chung',
  'icon'        => 'fa fa-bullhorn',

  // begin: fields
  'fields'      => array(

    // begin: a field
   array(
        'id'        => 'logo',
        'type'      => 'image',
        'title'     => 'Logo',
      ),
    array(
        'id'        => 'logo-footer',
        'type'      => 'image',
        'title'     => 'Logo footer',
      ),
    array(
        'id'        => 'code-youtube',
        'type'      => 'text',
        'title'     => 'Code youtube',
      ),
    array(
      'id'    => 'file-download',
      'type'  => 'upload',
      'title' => 'File download',
    ),
   


  ), // end: fields
);

$options[]      = array(
  'name'        => 'social',
  'title'       => 'Social',
  'icon'        => 'fa fa-bullhorn',

  // begin: fields
  'fields'      => array(

    // begin: a field
    array(
      'id'      => 'facebook',
      'type'    => 'text',
      'title'   => 'Facebook',
    ),
    array(
      'id'      => 'google',
      'type'    => 'text',
      'title'   => 'Google',
    ),
    array(
      'id'      => 'youtube',
      'type'    => 'text',
      'title'   => 'Youtube',
    ),


  ), // end: fields
);
$options[]      = array(
  'name'        => 'gioi-thieu',
  'title'       => 'Dịch vụ',
  'icon'        => 'fa fa-bullhorn',

  // begin: fields
  'fields'      => array(

      array(
          'id'              => 'services',
          'type'            => 'group',
          'button_title'    => 'Thêm',
          'accordion_title' => 'Slide',
          'fields'          => array(
             array(
              'id'      => 'title',
              'type'    => 'text',
              'title'   => 'Tiêu đề',
            ),
            array(
            'id'            => 'image',
            'type'          => 'upload',
            'title'         => 'Upload Image',
            'settings'      => array(
             'upload_type'  => 'image',
             'button_title' => 'Upload',
             'frame_title'  => 'Select an image',
             'insert_title' => 'Use this image',
            ),
          ),          
           
            array(
              'id'      => 'url',
              'type'    => 'text',
              'title'   => 'Đường dẫn',
            ),
          ),
        ),
   
   


  ), // end: fields
);

$options[]      = array(
  'name'        => 'contact_information',
  'title'       => 'Thông tin liên hệ',
  'icon'        => 'fa fa-envelope',

  // begin: fields
  'fields'      => array(
    
    array(
      'id'      => 'company_name',
      'type'    => 'text',
      'title'   => 'Tên công ty',
    ), 
      array(
      'id'      => 'map_position',
      'type'    => 'text',
      'title'   => 'Map google',
    ),    
    
    array(
      'id'      => 'hotline',
      'type'    => 'text',
      'title'   => 'Hotline',
    ),  
    array(
      'id'      => 'address',
      'type'    => 'text',
      'title'   => 'Địa chỉ',
    ),

    array(
      'id'      => 'email',
      'type'    => 'text',
      'title'   => 'Email',
    ), 
    array(
      'id'      => 'phone',
      'type'    => 'text',
      'title'   => 'Điện thoại',
    ),


  ), // end: fields
);


CSFramework::instance( $settings, $options );
