<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();

// $options[]    = array(
//   'id'        => '_custom_category_options',
//   'post_type' => 'category', // or array( 'category', 'post_tag' )

//   // begin: fields
//   'fields'    => array(

//     // begin: a field
//      array(
//           'id'          => 'gallery_cat',
//           'type'        => 'gallery',
//           'title'       => 'Gallery',
//         ),

//   ), // end: fields
// );
$options[]      = array(
  'id'            => '_custom_meta_options_2',
  'title'         => 'Slides',
  'post_type'     => 'du-an', // or post or CPT or array( 'page', 'post' )
  'context'       => 'normal',
  'priority'      => 'default',
  'sections'      => array(
    // begin section
    array(
      'name'      => 'section_1',
      'fields'    => array(
		  array(
		      'id'              => 'slides',
		      'type'            => 'group',
		      'button_title'    => 'Thêm',
		      'accordion_title' => 'Slide',
		      'fields'          => array(
		        
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
		       
		      ),
		    ),  

      ),
    ),

  ),
);
$options[]      = array(
  'id'            => '_custom_meta_options_dichvu',
  'title'         => 'Options',
  'post_type'     => 'dich-vu', // or post or CPT or array( 'page', 'post' )
  'context'       => 'normal',
  'priority'      => 'default',
  'sections'      => array(
    // begin section
    array(
      'name'      => 'section_1',
      'title'     => 'Mô tả',
      'fields'    => array(
		    
		    array(
	          'id'          => 'title_mo_ta',
	          'type'        => 'text',
	          'title'       => 'Tiêu đề',
	        ),
	        array(
	          'id'          => 'description',
	          'type'        => 'wysiwyg',
	          'title'       => 'Nội dung',
	        ),


      ),

    ),
    array(
      'name'      => 'section_2',
      'title'     => 'Ưu điểm',
      'fields'    => array(
		    
		    array(
	          'id'          => 'title_uu_diem',
	          'type'        => 'text',
	          'title'       => 'Tiêu đề',
	        ),
	        array(
		      'id'              => 'content_uu_diem_list',
		      'type'            => 'group',
		      'button_title'    => 'Thêm',
		      'accordion_title' => 'Ứu điểm',
		      'fields'          => array(
		        
		        array(
			      'id'            => 'content_uu_diem',
			      'type'          => 'textarea',
			      'title'         => 'Ưu điểm'
			    ),	        
		       
		      ),
		    ),


      ),

    ),
    array(
      'name'      => 'section_3',
      'title'     => 'Quy trình',
      'fields'    => array(
		    
		    array(
	          'id'          => 'title_quy_trinh',
	          'type'        => 'text',
	          'title'       => 'Tiêu đề',
	        ),
	        array(
		      'id'              => 'content_quytrinh',
		      'type'            => 'group',
		      'button_title'    => 'Thêm',
		      'accordion_title' => 'Ứu điểm',
		      'fields'          => array(
		        array(
			      'id'            => 'content_quy_trinh_imgae',
			      'type'          => 'image',
			      'title'         => 'Ảnh'
			    ),
		        array(
			      'id'            => 'content_quy_trinh',
			      'type'          => 'textarea',
			      'title'         => 'Nội dung'
			    ),	        
		       
		      ),
		    ),


      ),

    ),



  ),
);
CSFramework_Metabox::instance( $options );
