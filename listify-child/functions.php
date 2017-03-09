<?php
/**
 * Listify child theme.
 */
function listify_child_styles() {
    wp_enqueue_style( 'listify-child', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'listify_child_styles', 999 );

/** Place any new code below this line */

add_filter( 'submit_job_form_fields', 'frontend_add_salary_field' );


function frontend_add_salary_field( $fields ) {
    
  $fields['job']['your_surname'] = array(
    'label'       => __( 'Surname', 'job_manager' ),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => 'e.g. Trump',
    'priority'    => 1.1
  );

  $fields['job']['your_forename'] = array(
    'label'       => __( 'Forename(s)', 'job_manager' ),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => 'e.g. Donald',
    'priority'    => 1.2
  );

  $fields['job']['your_dob'] = array(
    'label'       => __( 'Date of Birth', 'job_manager' ),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => 'DD/MM/YYYY',
    'priority'    => 1.3
  );

  $fields['job']['your_pob'] = array(
    'label'       => __( 'Place of Birth', 'job_manager' ),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => 'e.g. Boston',
    'priority'    => 1.4
  );

  $fields['job']['your_ethnicity'] = array(
    'label'       => __( 'Ethnicity', 'job_manager' ),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => 'e.g. Indian American',
    'priority'    => 1.5
  );  

  $fields['job']['your_religion'] = array(
    'label'       => __( 'Religion (Practising)', 'job_manager' ),
    'type'     => 'radio',
    'required'    => true,
    'priority' => 1.6,
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
      )
  );

  $fields['job']['your_maritalstatus'] = array(
    'label'       => __( 'Marital Status', 'job_manager' ),
    'type'     => 'radio',
    'required'    => true,
    'priority' => 1.7,
    'options'  => array(
      'Married' => 'Married',
      'Single' => 'Single',
      'Divorced' => 'Divorced',
      'Separated' => 'Separated',
      'Widowed' => 'Widowed'
      )
  );
 
  $fields['job']['your_lang'] = array(
    'label'       => __( 'Language(s) spoken at home ', 'job_manager' ),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => 'e.g. British English',
    'priority'    => 1.8
  );

  $fields['job']['your_tel'] = array(
    'label'       => __( 'Telephone (Home)', 'job_manager' ),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => '',
    'priority'    => 1.9
  );

  $fields['job']['your_mobile'] = array(
    'label'       => __( 'Telephone (Mobile)', 'job_manager' ),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => '',
    'priority'    => 1.91
  );

  $fields['job']['your_email'] = array(
    'label'       => __( 'E-mail', 'job_manager' ),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => 'e.g. donaldtrump@domain.com',
    'priority'    => 3.9
  );

  $fields['job']['your_address'] =array(
    'label'       =>_( 'Address'),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => '',
    'priority'    => 4
  );

  $fields['job']['your_postcode'] =array(
    'label'       =>_( 'Postcode'),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => '',
    'priority'    => 4.1
  );

  $fields['job']['your_role'] =array(
    'label'       =>_( 'Role'),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => '',
    'priority'    => 4.4
  );

  $fields['job']['your_empname'] =array(
    'label'       =>_( 'Employer\'s Name'),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => '',
    'priority'    => 4.4
  );

  $fields['job']['your_add'] =array(
    'label'       =>_( 'Address'),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => '',
    'priority'    => 4.5
  );

  $fields['job']['your_occupation'] =array(
    'label'       =>_( 'Occupation/Profession'),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => '',
    'priority'    => 4.6
  );

   $fields['job']['your_shifts'] =array(
    'label'       =>_( 'Shifts/hours worked'),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => '',
    'priority'    => 4.7
  );

  $fields['job']['your_skills'] = array(
    'label'       => __( 'Available to provide independent living skills support to a young person on a floating support basis', 'job_manager' ),
    'type'     => 'radio',
    'required'    => true,
    'priority' => 4.91,
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  ); 

  $fields['job']['your_respite'] = array(
    'label'       => __( 'Available for respite placements ', 'job_manager' ),
    'type'     => 'radio',
    'required'    => true,
    'priority' => 4.92,
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['job']['your_emergency'] = array(
    'label'       => __( 'Available for emergency placements ', 'job_manager' ),
    'type'     => 'radio',
    'required'    => true,
    'priority' => 4.93,
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['job']['your_undertake'] = array(
    'label'       => __( 'Available to undertake assessment of new hosts (training will be offered for this)', 'job_manager' ),
    'type'     => 'radio',
    'required'    => true,
    'priority' => 4.94,
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['job']['your_part'] = array(
    'label'       => __( 'Available to be part of a host peer group in your local area', 'job_manager' ),
    'type'     => 'radio',
    'required'    => true,
    'priority' => 4.95,
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['job']['your_type'] = array(
    'label'       => __( 'Preferred type of placement commissioning: block or spot purchase', 'job_manager' ),
    'type'     => 'radio',
    'required'    => true,
    'priority' => 4.96,
    'options'  => array(
      'Block' => 'Block',
      'Spot Purchase ' => 'Spot Purchase '
    )
  );

  $fields['job']['your_stealing'] = array(
    'label'       => __( 'Stealing', 'job_manager' ),
    'type'     => 'select',
    'required'    => true,
    'priority' => 5.11,
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10' => '10'
    )
  );

  $fields['job']['your_drinking'] = array(
    'label'       => __( 'Drinking', 'job_manager' ),
    'type'     => 'select',
    'required'    => true,
    'priority' => 5.12,
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10' => '10'
    )
  );

  $fields['job']['your_drugs'] = array(
    'label'       => __( 'Drugs', 'job_manager' ),
    'type'     => 'select',
    'required'    => true,
    'priority' => 5.13,
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10' => '10'
    )
  );

  $fields['job']['your_smoking'] = array(
    'label'       => __( 'Smoking', 'job_manager' ),
    'type'     => 'select',
    'required'    => true,
    'priority' => 5.14,
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10' => '10'
    )
  );

  $fields['job']['your_bad'] = array(
    'label'       => __( 'Bad Language', 'job_manager' ),
    'type'     => 'select',
    'required'    => true,
    'priority' => 5.15,
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10' => '10'
    )
  );
  
  $fields['job']['your_sexuality'] = array(
    'label'       => __( 'Sexuality', 'job_manager' ),
    'type'     => 'select',
    'required'    => true,
    'priority' => 5.16,
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10' => '10'
    )
  ); 

  $fields['job']['your_depression'] = array(
    'label'       => __( 'Depression', 'job_manager' ),
    'type'     => 'select',
    'required'    => true,
    'priority' => 5.17,
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10' => '10'
    )
  );
  
  $fields['job']['your_breaking'] = array(
    'label'       => __( 'Breaking House Rules', 'job_manager' ),
    'type'     => 'select',
    'required'    => true,
    'priority' => 5.18,
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10' => '10'
    )
  );

  $fields['job']['your_lack'] = array(
    'label'       => __( 'Lack of courtesy', 'job_manager' ),
    'type'     => 'select',
    'required'    => true,
    'priority' => 5.19,
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10' => '10'
    )
  );

  $fields['job']['your_untidiness'] = array(
    'label'       => __( 'Untidiness', 'job_manager' ),
    'type'     => 'select',
    'required'    => true,
    'priority' => 5.20,
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10'=> '10'
    )
  );

  $fields['job']['your_hygiene'] = array(
    'label'       => __( 'Hygiene', 'job_manager' ),
    'type'     => 'select',
    'required'    => true,
    'priority' => 5.21,
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10'=> '10'
    )
  );
 
  $fields['job']['your_late'] = array(
    'label'       => __( 'Coming in late', 'job_manager' ),
    'type'     => 'select',
    'required'    => true,
    'priority' => 5.22,
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10'=> '10'
    )
  );

  $fields['job']['your_motivation'] = array(
    'label'       => __( 'Lack of motivation', 'job_manager' ),
    'type'     => 'select',
    'required'    => true,
    'priority' => 5.23,
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10'=> '10'
    )
  );

  $fields['job']['your_risk'] = array(
    'label'       => __( 'Risk Taking', 'job_manager' ),
    'type'     => 'select',
    'required'    => true,
    'priority' => 5.24,
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10'=> '10'
    )
  );

  $fields['job']['your_violence'] = array(
    'label'       => __( 'Violence in background', 'job_manager' ),
    'type'     => 'select',
    'required'    => true,
    'priority' => 5.25,
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10'=> '10'
    )
  );

  $fields['job']['your_contact'] = array(
    'label'       => __( 'Having contact with his/her family', 'job_manager' ),
    'type'     => 'select',
    'required'    => true,
    'priority' => 5.26,
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10'=> '10'
    )
  );

  $fields['job']['your_different'] = array(
    'label'       => __( 'Ethinicity of a young person if different from yours', 'job_manager' ),
    'type'     => 'select',
    'required'    => true,
    'priority' => 5.27,
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10'=> '10'
    )
  );

  $fields['job']['your_beliefs'] = array(
    'label'       => __( 'Religion or beliefs if different from yours', 'job_manager' ),
    'type'     => 'select',
    'required'    => true,
    'priority' => 5.28,
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10'=> '10'
    )
  );

  $fields['job']['your_history'] = array(
    'label'       => __( 'Young person with history of physically/sexually/emotionally abuse', 'job_manager' ),
    'type'     => 'select',
    'required'    => true,
    'priority' => 5.29,
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10'=> '10'
    )
  );

  $fields['job']['your_medical'] = array(
    'label'       => __( 'Young person with medical (condition)  ', 'job_manager' ),
    'type'     => 'select',
    'required'    => true,
    'priority' => 5.30,
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10'=> '10'
    )
  );

  $fields['job']['your_disability'] = array(
    'label'       => __( 'Physical Disability', 'job_manager' ),
    'type'     => 'select',
    'required'    => true,
    'priority' => 5.31,
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10'=> '10'
    )
  );

  $fields['job']['your_move'] = array(
    'label'       => __( 'Helping a young person to move on', 'job_manager' ),
    'type'     => 'select',
    'required'    => true,
    'priority' => 5.32,
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10'=> '10'
    )
  );

  $fields['job']['your_placement'] = array(
    'label'       => __( 'Pregnant young person  or  mother & baby placement ', 'job_manager' ),
    'type'     => 'select',
    'required'    => true,
    'priority' => 5.33,
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10'=> '10'
    )
  );

  $fields['job']['your_emerplace'] = array(
    'label'       => __( 'Emergency (placement)', 'job_manager' ),
    'type'     => 'select',
    'required'    => true,
    'priority' => 5.34,
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10'=> '10'
    )
  );

  $fields['job']['your_claim'] = array(
    'label'       => __( 'Accepting young person claiming Housing Benefit ', 'job_manager' ),
    'type'     => 'select',
    'required'    => true,
    'priority' => 5.35,
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10'=> '10'
    )
  );

  $fields['job']['your_male'] = array(
    'label'       => __( 'Male ', 'job_manager' ),
    'type'     => 'radio',
    'required'    => true,
    'priority' => 5.38,
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['job']['your_female'] = array(
    'label'       => __( 'Female ', 'job_manager' ),
    'type'     => 'radio',
    'required'    => true,
    'priority' => 5.39,
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['job']['your_care'] = array(
    'label'       => __( 'Care Leaver ', 'job_manager' ),
    'type'     => 'radio',
    'required'    => true,
    'priority' => 5.40,
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['job']['your_child'] = array(
    'label'       => __( 'Looked After Child ', 'job_manager' ),
    'type'     => 'radio',
    'required'    => true,
    'priority' => 5.41,
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['job']['your_minors'] = array(
    'label'       => __( 'Unaccompanied Minors', 'job_manager' ),
    'type'     => 'radio',
    'required'    => true,
    'priority' => 5.42,
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['job']['your_need'] = array(
    'label'       => __( 'Child in Need', 'job_manager' ),
    'type'     => 'radio',
    'required'    => true,
    'priority' => 5.43,
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['job']['your_mother'] = array(
    'label'       => __( 'Mother and Baby', 'job_manager' ),
    'type'     => 'radio',
    'required'    => true,
    'priority' => 5.44,
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['job']['your_key'] = array(
    'label'       => __( 'A key to the front door', 'job_manager' ),
    'type'     => 'radio',
    'required'    => true,
    'priority' => 5.45,
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['job']['your_kitchen'] = array(
    'label'       => __( 'Unrestricted use of the kitchen', 'job_manager' ),
    'type'     => 'radio',
    'required'    => true,
    'priority' => 5.46,
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['job']['your_use'] = array(
    'label'       => __( 'Use of the washing machine', 'job_manager' ),
    'type'     => 'radio',
    'required'    => true,
    'priority' => 5.47,
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['job']['your_lounge'] = array(
    'label'       => __( 'Use of a lounge', 'job_manager' ),
    'type'     => 'radio',
    'required'    => true,
    'priority' => 5.48,
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['job']['your_visits'] = array(
    'label'       => __( 'Friends visits', 'job_manager' ),
    'type'     => 'radio',
    'required'    => true,
    'priority' => 5.49,
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['job']['your_access'] = array(
    'label'       => __( 'Access to a television', 'job_manager' ),
    'type'     => 'radio',
    'required'    => true,
    'priority' => 5.50,
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['job']['your_support'] = array(
    'label'       => __( 'Support to claim welfare benefits ', 'job_manager' ),
    'type'     => 'radio',
    'required'    => true,
    'priority' => 5.51,
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['job']['your_facility'] = array(
    'label'       => __( 'Any other available facility ', 'job_manager' ),
    'type'     => 'radio',
    'required'    => true,
    'priority' => 5.52,
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['job']['your_moti'] = array(
    'label'       => __( 'Motivation', 'job_manager' ),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => 'Please state your motivation and interest in applying to become a supported lodgings host.',
    'priority'    => 5.53
  );
  
  $fields['job']['your_background'] = array(
    'label'       => __( 'Background (e.g. ex foster carer, retired, etc.) ', 'job_manager' ),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => '',
    'priority'    => 5.55
  );

  $fields['job']['your_personality'] = array(
    'label'       => __( 'Personality ', 'job_manager' ),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => '',
    'priority'    => 5.56
  );

  $fields['job']['your_interests'] = array(
    'label'       => __( 'Interests and hobbies ', 'job_manager' ),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => '',
    'priority'    => 5.57
  );

  $fields['job']['your_present'] = array(
    'label'       => __( 'Present relationship/partnership', 'job_manager' ),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => '',
    'priority'    => 5.58
  );

  $fields['job']['your_ability'] = array(
    'label'       => __( 'Your (and partner’s) ability to support a young person to promote emotional, physical, sexual and intellectual development; and also supporting them to gain independent living skills such as cooking, washing, budgeting etc setting boundaries where required. ', 'job_manager' ),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => '',
    'priority'    => 5.60
  );

  $fields['job']['your_safe'] = array(
    'label'       => __( 'Your (and partner’s) ability to providing a safe and supportive environment where they can be safe from abuse. An ability to recognise young people may vary in their capacity to make competent decisions regarding their own safety and being able to negotiate with them the safest possible choices ', 'job_manager' ),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => '',
    'priority'    => 5.61
  );

  $fields['job']['your_required'] = array(
    'label'       => __( 'Your (and partner’s) ability to work with other individuals and organisations to support the young person using people and links within the community where required', 'job_manager' ),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => '',
    'priority'    => 5.62
  );

  $fields['job']['your_promote'] = array(
    'label'       => __( 'Confidentiality, Equality and Diversity: An ability to promote equality, diversity and rights of the young person and maintaining confidentiality as required', 'job_manager' ),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => '',
    'priority'    => 5.63
  );

  $fields['job']['your_certificate'] = array(
    'label'       => __( 'Do you have a DBS certificate issued within the last 3 years?', 'job_manager' ),
    'type'     => 'radio',
    'required'    => true,
    'priority' => 5.64,
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['job']['your_cnumber'] = array(
    'label'       => __( 'If yes, what is the certificate number?', 'job_manager' ),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => '',
    'priority'    => 5.65
  );

  $fields['job']['your_doi'] = array(
    'label'       => __( 'Date of issue', 'job_manager' ),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => 'DD/MM/YYYY',
    'priority'    => 5.66
  );

  $fields['job']['your_gp'] = array(
    'label'       => __( 'Your GP/Surgery’s name', 'job_manager' ),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => '',
    'priority'    => 5.67
  );

  $fields['job']['your_adrs'] = array(
    'label'       => __( 'Address', 'job_manager' ),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => '',
    'priority'    => 5.68
  );

  $fields['job']['your_tnum'] = array(
    'label'       => __( 'Telephone number ', 'job_manager' ),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => '',
    'priority'    => 5.69
  );

  $fields['job']['your_relevant'] = array(
    'label'       => __( 'Any relevant medical condition(s) that we should know about ', 'job_manager' ),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => '',
    'priority'    => 5.70
  );

  $fields['job']['your_ref1'] = array(
    'label'       => __( 'Referee 1 ', 'job_manager' ),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => '',
    'priority'    => 5.73
  );

  $fields['job']['your_ref2'] = array(
    'label'       => __( 'Referee 2 ', 'job_manager' ),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => '',
    'priority'    => 5.74
  );

  $fields['job']['your_ref3'] = array(
    'label'       => __( 'Referee 3 ', 'job_manager' ),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => '',
    'priority'    => 5.75
  );

  $fields['job']['your_adr1'] = array(
    'label'       => __( 'Address', 'job_manager' ),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => '',
    'priority'    => 5.76
  );

  $fields['job']['your_adr2'] = array(
    'label'       => __( 'Address', 'job_manager' ),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => '',
    'priority'    => 5.77
  );

  $fields['job']['your_adr3'] = array(
    'label'       => __( 'Address', 'job_manager' ),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => '',
    'priority'    => 5.78
  );

  $fields['job']['your_rel1'] = array(
    'label'       => __( 'Relationship to the applicant(s)', 'job_manager' ),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => '',
    'priority'    => 5.79
  );

  $fields['job']['your_rel2'] = array(
    'label'       => __( 'Relationship to the applicant(s)', 'job_manager' ),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => '',
    'priority'    => 5.80
  );

  $fields['job']['your_rel3'] = array(
    'label'       => __( 'Relationship to the applicant(s)', 'job_manager' ),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => '',
    'priority'    => 5.81
  );

  $fields['job']['your_type'] = array(
    'type'        => text,
    'required'    => true,
    'placeholder' => 'Type, location, home feel, amenities etc ',
    'priority'    => 5.85
  );

  $fields['job']['your_neigh'] = array(
    'label'       => __( 'The Neighbourhood', 'job_manager' ),
    'type'        => text,
    'required'    => true,
    'placeholder' => ' ',
    'priority'    => 5.86
  );

  $fields['job']['your_trans'] = array(
    'label'       => __( 'Transport links', 'job_manager' ),
    'type'        => text,
    'required'    => true,
    'placeholder' => ' ',
    'priority'    => 5.87
  );

  $fields['job']['your_rented'] = array(
    'label'       => __( 'Rented(Private)', 'job_manager' ),
    'type'     => 'radio',
    'required' => true,
    'priority' => 5.88,
    'options'  => array(
      'Yes' => 'Yes',
      'No'  => 'No'
    )
  );

  $fields['job']['your_council'] = array(
    'label'       => __( 'Rented(Council)', 'job_manager' ),
    'type'     => 'radio',
    'required' => true,
    'priority' => 5.89,
    'options'  => array(
      'Yes' => 'Yes',
      'No'  => 'No'
    )
  );

  $fields['job']['your_housing'] = array(
    'label'       => __( 'Rented (Housing Association)', 'job_manager' ),
    'type'     => 'radio',
    'required' => true,
    'priority' => 5.94,
    'options'  => array(
      'Yes' => 'Yes',
      'No'  => 'No'
    )
  );
     
  $fields['job']['your_mortgaged'] = array(
    'label'       => __( 'Mortgaged', 'job_manager' ),
    'type'     => 'radio',
    'required' => true,
    'priority' => 6,
    'options'  => array(
      'Yes' => 'Yes',
      'No'  => 'No'
    )
  );

  $fields['job']['your_house'] = array(
    'label'       => __( 'House', 'job_manager' ),
    'type'     => 'radio',
    'required' => true,
    'priority' => 6.11,
    'options'  => array(
      'Yes' => 'Yes',
      'No'  => 'No'
    )
  );
     
  $fields['job']['your_flat'] = array(
    'label'       => __( 'Flat', 'job_manager' ),
    'type'     => 'radio',
    'required' => true,
    'priority' => 6.12,
    'options'  => array(
      'Yes' => 'Yes',
      'No'  => 'No'
    )
  );
     
  $fields['job']['your_floors'] = array(
    'label'       => __( 'Number of floors', 'job_manager' ),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => ' ',
    'priority'    => 6.13
  );

  $fields['job']['your_size'] = array(
    'label'       => __( 'Is number suitable for size of property', 'job_manager' ),
    'type'        => 'radio',
    'required'    => true,
    'placeholder' => ' ',
    'priority'    => 6.14,
    'options'  => array(
      'Yes' => 'Yes',
      'No'  => 'No'
    )
  );

  $fields['job']['your_home'] = array(
    'label'       => __( 'The home', 'job_manager' ),
    'type'        => 'checkbox',
    'required'    => true,
    'placeholder' => ' ',
    'priority'    => 6.15,
    'options'  => array(
      'Is it hygienically clean?' => 'Is it hygienically clean?',
      'Any pet’s odour'  => 'Any pet’s odour',
      'Cigarette smell'  => 'Cigarette smell',
      'Dampness'         => 'Dampness'
      
    )
  );

  $fields['job']['your_lounge'] = array(
    'label'       => __( 'Lounge?', 'job_manager' ),
    'type'        => 'radio',
    'required'    => true,
    'placeholder' => ' ',
    'priority'    => 6.32,
    'options'  => array(
      'Yes' => 'Yes',
      'No'  => 'No'
    )
  );

  $fields['job']['your_bed'] = array(
    'label'       => __( 'Number of bedrooms', 'job_manager' ),
    'type'        => 'text',
    'required'    => true,
    'placeholder' => ' ',
    'priority'    => 6.33
  );

  $fields['job']['your_bathroom'] = array(
    'label'       => __( 'Bathroom', 'job_manager' ),
    'type'        => 'checkbox',
    'required'    => true,
    'placeholder' => ' ',
    'priority'    => 6.34,
    'options'  => array(
      'If yes, is the door lockable?' => 'If yes, is the door lockable?',
      'Bath tub'  => 'Bath tub',
      'Shower' => 'Shower'
    )
  );

  $fields['job']['your_toilet'] = array(
    'label'       => __( 'Toilet', 'job_manager' ),
    'type'        => 'checkbox',
    'required'    => true,
    'placeholder' => ' ',
    'priority'    => 7.6,
    'options'  => array(
      'If yes, is door lockable?' => 'If yes, is door lockable?'
    )
  );

  $fields['job']['your_kitchen'] = array(
    'label'       => __( 'Kitchen', 'job_manager' ),
    'type'        => 'checkbox',
    'required'    => true,
    'placeholder' => ' ',
    'priority'    => 7.8,
    'options'  => array(
      'If yes, is it hygienic' => 'If yes, is it hygienic',
      'Microwave'  => 'Microwave',
      'Toaster' => 'Toaster'
    )
  );

  $fields['job']['your_doors'] = array(
    'label'       => __( 'Doors: do they shut properly', 'job_manager' ),
    'type'        => 'radio',
    'required'    => true,
    'placeholder' => ' ',
    'priority'    => 8.24,
    'options'  => array(
      'Yes' => 'Yes',
      'No'  => 'No'
    )
  );

  $fields['job']['your_dining'] = array(
    'label'       => __( ' Dining Area ', 'job_manager' ),
    'type'        => 'radio',
    'required'    => true,
    'placeholder' => ' ',
    'priority'    => 8.25,
    'options'  => array(
      'Yes' => 'Yes',
      'No'  => 'No'
    )
  );

  $fields['job']['your_windows'] = array(
    'label'       => __( ' Windows ', 'job_manager' ),
    'type'        => 'checkbox',
    'required'    => true,
    'priority'    => 8.27,
    'options'  => array(
      'Single glaze' => 'Single glaze',
      'Double glaze'  => 'Double glaze',
      'Other'   => 'Other',
      'Are they easily opened for ventilation' => 'Are they easily opened for ventilation'
    )
  );

  $fields['job']['your_indoor'] = array(
    'label'       => __( ' General Indoors: are they clean and well maintained', 'job_manager' ),
    'type'        => 'radio',
    'required'    => true,
    'placeholder' => ' ',
    'priority'    => 8.31,
    'options'  => array(
      'Yes' => 'Yes',
      'No'  => 'No'
    )
  );

  $fields['job']['your_outdoor'] = array(
    'label'       => __( ' Outdoor/Garden: are they clean and well maintained', 'job_manager' ),
    'type'        => 'radio',
    'required'    => true,
    'placeholder' => ' ',
    'priority'    => 8.32,
    'options'  => array(
      'Yes' => 'Yes',
      'No'  => 'No'
    )
  );

  $fields['job']['your_heating'] = array(
    'label'       => __( ' Heating', 'job_manager' ),
    'type'        => 'checkbox',
    'required'    => true,
    'placeholder' => ' ',
    'priority'    => 8.33,
    'options'  => array(
      'Gas' => 'Gas',
      'Electric'  => 'Electric',
      'Is the heating adequate and comfortable' => 'Is the heating adequate and comfortable',
      'If applicable, has the boiler been serviced in the last 12 months ' => 'If applicable, has the boiler been serviced in the last 12 months '
    )
  );

  $fields['job']['your_exits'] = array(
    'label'       => __( ' Exits: have no obstructions ', 'job_manager' ),
    'type'        => 'radio',
    'required'    => true,
    'placeholder' => ' ',
    'priority'    => 8.34,
    'options'  => array(
      'Yes' => 'Yes',
      'No'  => 'No'
    )
  );

  $fields['job']['your_safety'] = array(
    'label'       => __( 'Safety Features ', 'job_manager' ),
    'type'        => 'checkbox',
    'required'    => true,
    'placeholder' => ' ',
    'priority'    => 8.35,
    'options'  => array(
      'Blanket' => 'Blanket',
      'Extinguisher'  => 'Extinguisher',
      'Smoke detector' => 'Smoke detector',
      'Carbon monoxide detector' => 'Carbon monoxide detector',
      'Intruder alarm' => 'Intruder alarm',
      'First Aid Box'  => 'First Aid Box'
    )
  );
 
  $fields['job']['your_locked'] = array(
    'label'       => __( ' Medicines, alcohol, bleach and toxic materials: will this be locked away safe  ', 'job_manager' ),
    'type'        => 'radio',
    'required'    => true,
    'placeholder' => ' ',
    'priority'    => 8.36,
    'options'  => array(
      'Yes' => 'Yes',
      'No'  => 'No'
    )
  );

  $fields['job']['your_any'] = array(
    'label'       => __( ' Smoking: any smoker in the household ', 'job_manager' ),
    'type'        => 'radio',
    'required'    => true,
    'placeholder' => ' ',
    'priority'    => 8.37,
    'options'  => array(
      'Yes' => 'Yes',
      'No'  => 'No'
    )
  );

  $fields['job']['your_car'] = array(
    'label'       => __( 'Car Keys: where applicable, will this be kept safe ', 'job_manager' ),
    'type'        => 'radio',
    'required'    => true,
    'placeholder' => ' ',
    'priority'    => 8.38,
    'options'  => array(
      'Yes' => 'Yes',
      'No'  => 'No'
    )
  );

  $fields['job']['your_info'] = array(
    'label'       => __( 'Pets ', 'job_manager' ),
    'type'        => 'checkbox',
    'required'    => true,
    'placeholder' => ' ',
    'priority'    => 8.39,
    'options'  => array(
      'Any safety information strangers or visitors  need to know' => 'Any safety information strangers or visitors  need to know'
    )
  );

  $fields['job']['your_insurance'] = array(
    'label'       => __( 'Insurance ', 'job_manager' ),
    'type'        => 'checkbox',
    'required'    => true,
    'placeholder' => ' ',
    'priority'    => 8.40,
    'options'  => array(
     'Building' => 'Building',
     'Content' => 'Content'
    )
  );

  $fields['job']['your_amenities'] = array(
    'label'       => __( 'Other amenities', 'job_manager' ),
    'type'        => 'checkbox',
    'required'    => true,
    'placeholder' => ' ',
    'priority'    => 8.41,
    'options'  => array(
     'Internet' => 'Internet',
     'Air conditioning' => 'Air conditioning',
     'Television ' => 'Television',
     'Laundry machine' => 'Laundry machine',
     'Laundry dryer' => 'Laundry dryer',
     'Pets allowed' => 'Pets allowed',
     'Smoking allowed' => 'Smoking allowed',
     'Disability access' => 'Disability access',
     'Indoor fireplace ' => 'Indoor fireplace ',
     'Intercom ' => 'Intercom ',
     'Free parking ' => 'Free parking ',
     'Swimming pool' => 'Swimming pool',
     'Gym' => 'Gym',
     'Iron' => 'Iron',
     'Hair dryer' => 'Hair dryer'

    )
  );

  $fields['job']['your_young'] = array(
    'label'       => __( 'The young person’s room', 'job_manager' ),
    'type'        => 'checkbox',
    'required'    => true,
    'placeholder' => ' ',
    'priority'    => 8.42,
    'options'  => array(
     'Storage' => 'Storage',
     'Secured door' => 'Secured door',
     'Secured windows' => 'Secured windows',
     'Adequate heating' => 'Adequate heating',
     'Table' => 'Table',
     'Chair' => 'Chair',
     'Ensuite facility  ' => 'Ensuite facility  '

    )
  );


  return $fields;
}


add_filter( 'job_manager_job_listing_data_fields', 'admin_add_salary_field' );

function admin_add_salary_field( $fields ) {

  $fields['_your_surname'] = array(
    'label'       => __( 'Surname', 'job_manager' ),
    'type'        => 'text',
    'placeholder' => 'e.g. Trump'
    
  );

  $fields['_your_forename'] = array(
    'label'       => __( 'Forename(s)', 'job_manager' ),
    'type'        => 'text',
    'placeholder' => 'e.g. Donald'
    
  );

  $fields['_your_dob'] = array(
    'label'       => __( 'Date of Birth', 'job_manager' ),
    'type'        => 'text',
    'placeholder' => 'DD/MM/YYYY'
  );

  $fields['_your_pob'] = array(
    'label'       => __( 'Place of Birth', 'job_manager' ),
    'type'        => 'text',
    'placeholder' => 'e.g. Boston'
  );

  $fields['_your_ethnicity'] = array(
    'label'       => __( 'Ethnicity', 'job_manager' ),
    'type'        => 'text',
    'placeholder' => 'e.g. Indian American'
  );

  $fields['_your_religion'] = array(
    'label'       => __( 'Religion (Practising)', 'job_manager' ),
    'type'     => 'radio',
    'description' => '',
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['_your_maritalstatus'] = array(
    'label'       => __( 'Marital Status', 'job_manager' ),
    'type'     => 'radio',
    'description' => '',
    'options'  => array(
      'Married' => 'Married',
      'Single' => 'Single',
      'Divorced' => 'Divorced',
      'Separated' => 'Separated',
      'Widowed' => 'Widowed',
    )
  );

  $fields['_your_lang'] = array(
    'label'       => __( 'Language(s) spoken at home ', 'job_manager' ),
    'type'        => 'text',
    'placeholder' => 'e.g. British English'
  );

  $fields['_your_tel'] = array(
    'label'       => __( 'Telephone (Home)', 'job_manager' ),
    'type'        => 'text',
    'placeholder' => ''
  );

  $fields['_your_mobile'] = array(
    'label'       => __( 'Telephone (Mobile)', 'job_manager' ),
    'type'        => 'text',
    'placeholder' => ''
  );

  $fields['_your_email'] = array(
    'label'       => __( 'E-mail', 'job_manager' ),
    'type'        => 'text',
    'placeholder' => 'e.g. donaldtrump@domain.com'
  );

  $fields['_your_address'] = array(
    'label'       => __( 'Address' ),
    'type'        => 'text',
    'placeholder' => ''
  );

  $fields['_your_postcode'] = array(
    'label'       => __( 'Postcode' ),
    'type'        => 'text',
    'placeholder' => ''
  );

  $fields['_your_role'] = array(
    'label'       => __( 'Role' ),
    'type'        => 'text',
    'placeholder' => ''
  );

  $fields['_your_empname'] =array(
    'label'       =>_( 'Employer &rsquo s Name'),
    'type'        => 'text',
    'placeholder' => ''
  );
  
  $fields['_your_add'] =array(
    'label'       =>_( 'Address'),
    'type'        => 'text',
    'placeholder' => ''
  );
   
  $fields['_your_occupation'] =array(
    'label'       =>_( 'Occupation/Profession'),
    'type'        => 'text',
    'placeholder' => ''
  );

  $fields['_your_shifts'] =array(
    'label'       =>_( 'Shifts/hours worked'),
    'type'        => 'text',
    'placeholder' => ''
  );

  $fields['_your_skills'] =array(
    'label'       =>_( 'Available to provide independent living skills support to a young person on a floating support basis'),
    'type'        => 'radio',
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )  
  );

  $fields['_your_respite'] = array(
    'label'       => __( 'Available for respite placements ', 'job_manager' ),
    'type'     => 'radio',
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['_your_emergency'] = array(
    'label'       => __( 'Available for emergency placements ', 'job_manager' ),
    'type'     => 'radio',
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['_your_undertake'] = array(
    'label'       => __( 'Available to undertake assessment of new hosts (training will be offered for this)', 'job_manager' ),
    'type'     => 'radio',
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['_your_part'] = array(
    'label'       => __( 'Available to be part of a host peer group in your local area', 'job_manager' ),
    'type'     => 'radio',
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['_your_type'] = array(
    'label'       => __( 'Preferred type of placement commissioning: block or spot purchase', 'job_manager' ),
    'type'     => 'radio',
    'options'  => array(
      'Block' => 'Block',
      'Spot Purchase ' => 'Spot Purchase '
    )
  );

  $fields['_your_stealing'] = array(
    'label'       => __( 'Stealing', 'job_manager' ),
    'type'     => 'select',
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10' => '10',
    )
  );
  
  $fields['_your_drinking'] = array(
    'label'       => __( 'Drinking', 'job_manager' ),
    'type'     => 'select',
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10' => '10',
    )
  );
  
  $fields['_your_drugs'] = array(
    'label'       => __( 'Drugs', 'job_manager' ),
    'type'     => 'select',
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10' => '10',
    )
  );

  $fields['_your_smoking'] = array(
    'label'       => __( 'Smoking', 'job_manager' ),
    'type'     => 'select',
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10' => '10',
    )
  );

  $fields['_your_bad'] = array(
    'label'       => __( 'Bad Language', 'job_manager' ),
    'type'     => 'select',
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10' => '10',
    )
  );
  
  $fields['_your_sexuality'] = array(
    'label'       => __( 'Sexuality', 'job_manager' ),
    'type'     => 'select',
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10' => '10'
    )
  ); 

  $fields['_your_depression'] = array(
    'label'       => __( 'Depression', 'job_manager' ),
    'type'     => 'select',
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10' => '10'
    )
  );
  
  $fields['_your_breaking'] = array(
    'label'       => __( 'Breaking House Rules', 'job_manager' ),
    'type'     => 'select',
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10' => '10'
    )
  );

  $fields['_your_lack'] = array(
    'label'       => __( 'Lack of courtesy', 'job_manager' ),
    'type'     => 'select',
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10' => '10'
    )
  );

  $fields['_your_untidiness'] = array(
    'label'       => __( 'Untidiness', 'job_manager' ),
    'type'     => 'select',
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10'=> '10'
    )
  );

  $fields['_your_hygiene'] = array(
    'label'       => __( '(Lack) of personal hygiene', 'job_manager' ),
    'type'     => 'select',
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10'=> '10'
    )
  );

  $fields['_your_late'] = array(
    'label'       => __( 'Coming in late', 'job_manager' ),
    'type'     => 'select',
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10'=> '10'
    )
  );

  $fields['_your_motivation'] = array(
    'label'       => __( 'Lack of motivation', 'job_manager' ),
    'type'     => 'select',
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10'=> '10'
    )
  );

  $fields['_your_risk'] = array(
    'label'       => __( 'Risk Taking', 'job_manager' ),
    'type'     => 'select',
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10'=> '10'
    )
  );

  $fields['_your_violence'] = array(
    'label'       => __( 'Violence in background', 'job_manager' ),
    'type'     => 'select',
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10'=> '10'
    )
  );

  $fields['_your_contact'] = array(
    'label'       => __( 'Having contact with his/her family', 'job_manager' ),
    'type'     => 'select',
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10'=> '10'
    )
  );

  $fields['_your_different'] = array(
    'label'       => __( 'Ethinicity of a young person if different from yours', 'job_manager' ),
    'type'     => 'select',
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10'=> '10'
    )
  );

  $fields['_your_beliefs'] = array(
    'label'       => __( 'Religion or beliefs if different from yours', 'job_manager' ),
    'type'     => 'select',
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10'=> '10'
    )
  );

  $fields['_your_history'] = array(
    'label'       => __( 'Young person with history of physically/sexually/emotionally abuse', 'job_manager' ),
    'type'     => 'select',
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10'=> '10'
    )
  );

  $fields['_your_medical'] = array(
    'label'       => __( 'Young person with medical (condition)  ', 'job_manager' ),
    'type'     => 'select',
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10'=> '10'
    )
  );

  $fields['_your_disability'] = array(
    'label'       => __( 'Physical Disability', 'job_manager' ),
    'type'     => 'select',
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10'=> '10'
    )
  );

  $fields['_your_move'] = array(
    'label'       => __( 'Helping a young person to move on', 'job_manager' ),
    'type'     => 'select',
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10'=> '10'
    )
  );

  $fields['_your_placement'] = array(
    'label'       => __( 'Pregnant young person  or  mother & baby placement ', 'job_manager' ),
    'type'     => 'select',
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10'=> '10'
    )
  );

  $fields['_your_emerplace'] = array(
    'label'       => __( 'Emergency (placement)', 'job_manager' ),
    'type'     => 'select',
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10'=> '10'
    )
  );

  $fields['_your_claim'] = array(
    'label'       => __( 'Accepting young person claiming Housing Benefit ', 'job_manager' ),
    'type'     => 'select',
    'options'  => array(
      '1' => '1',
      '2' => '2',
      '3' => '3',
      '4' => '4',
      '5' => '5',
      '6' => '6',
      '7' => '7',
      '8' => '8',
      '9' => '9',
      '10'=> '10'
    )
  );

  $fields['_your_male'] = array(
    'label'       => __( 'Male ', 'job_manager' ),
    'type'     => 'radio',
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['_your_female'] = array(
    'label'       => __( 'Female ', 'job_manager' ),
    'type'     => 'radio',
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['_your_care'] = array(
    'label'       => __( 'Care Leaver ', 'job_manager' ),
    'type'     => 'radio',
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['_your_child'] = array(
    'label'       => __( 'Looked After Child ', 'job_manager' ),
    'type'     => 'radio',
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['_your_minors'] = array(
    'label'       => __( 'Unaccompanied Minors', 'job_manager' ),
    'type'     => 'radio',
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['_your_need'] = array(
    'label'       => __( 'Child in Need', 'job_manager' ),
    'type'     => 'radio',
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['_your_mother'] = array(
    'label'       => __( 'Mother and Baby', 'job_manager' ),
    'type'     => 'radio',
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['_your_key'] = array(
    'label'       => __( 'A key to the front door', 'job_manager' ),
    'type'     => 'radio',
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['_your_kitchen'] = array(
    'label'       => __( 'Unrestricted use of the kitchen', 'job_manager' ),
    'type'     => 'radio',
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['_your_use'] = array(
    'label'       => __( 'Use of the washing machine', 'job_manager' ),
    'type'     => 'radio',
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['_your_lounge'] = array(
    'label'       => __( 'Use of a lounge', 'job_manager' ),
    'type'     => 'radio',
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['_your_visits'] = array(
    'label'       => __( 'Friends visits', 'job_manager' ),
    'type'     => 'radio',
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['_your_access'] = array(
    'label'       => __( 'Access to a television', 'job_manager' ),
    'type'     => 'radio',
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['_your_support'] = array(
    'label'       => __( 'Support to claim welfare benefits ', 'job_manager' ),
    'type'     => 'radio',
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['_your_facility'] = array(
    'label'       => __( 'Any other available facility ', 'job_manager' ),
    'type'     => 'radio',
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['_your_moti'] = array(
    'label'       => __( 'Motivation', 'job_manager' ),
    'type'        => 'text',
    'placeholder' => 'Please state your motivation and interest in applying to become a supported lodgings host.'
  );

  $fields['_your_background'] = array(
    'label'       => __( 'Background (e.g. ex foster carer, retired, etc.) ', 'job_manager' ),
    'type'        => 'text',
    'placeholder' => ''
  );

  $fields['_your_personality'] = array(
    'label'       => __( 'Personality ', 'job_manager' ),
    'type'        => 'text',
    'placeholder' => ''
  );

  $fields['_your_interests'] = array(
    'label'       => __( 'Interests and hobbies ', 'job_manager' ),
    'type'        => 'text',
    'placeholder' => ''
  );

  $fields['_your_present'] = array(
    'label'       => __( 'Present relationship/partnership', 'job_manager' ),
    'type'        => 'text',
    'placeholder' => ''
  );

  $fields['_your_ability'] = array(
    'label'       => __( 'Your (and partner’s) ability to support a young person to promote emotional, physical, sexual and intellectual development; and also supporting them to gain independent living skills such as cooking, washing, budgeting etc setting boundaries where required. ', 'job_manager' ),
    'type'        => 'text',
    'placeholder' => '',
  );

  $fields['_your_safe'] = array(
    'label'       => __( 'Your (and partner’s) ability to providing a safe and supportive environment where they can be safe from abuse. An ability to recognise young people may vary in their capacity to make competent decisions regarding their own safety and being able to negotiate with them the safest possible choices ', 'job_manager' ),
    'type'        => 'text',
    'placeholder' => ''
  );

  $fields['_your_required'] = array(
    'label'       => __( 'Your (and partner’s) ability to work with other individuals and organisations to support the young person using people and links within the community where required', 'job_manager' ),
    'type'        => 'text',
    'placeholder' => ''
  );

  $fields['_your_promote'] = array(
    'label'       => __( 'Confidentiality, Equality and Diversity: An ability to promote equality, diversity and rights of the young person and maintaining confidentiality as required', 'job_manager' ),
    'type'        => 'text',
    'placeholder' => ''
  );

  $fields['_your_certificate'] = array(
    'label'       => __( 'Do you have a DBS certificate issued within the last 3 years?', 'job_manager' ),
    'type'     => 'radio',
    'options'  => array(
      'Yes' => 'Yes',
      'No' => 'No'
    )
  );

  $fields['_your_cnumber'] = array(
    'label'       => __( 'If yes, what is the certificate number?', 'job_manager' ),
    'type'        => 'text',
    'placeholder' => ''
  );

  $fields['job']['your_doi'] = array(
    'label'       => __( 'Date of issue', 'job_manager' ),
    'type'        => 'DD/MM/YYYY',
    'placeholder' => ''
  );

  $fields['_your_gp'] = array(
    'label'       => __( 'Your GP/Surgery’s name', 'job_manager' ),
    'type'        => 'text',
    'placeholder' => ''
  );

  $fields['_your_adrs'] = array(
    'label'       => __( 'Address', 'job_manager' ),
    'type'        => 'text',
    'placeholder' => ''
  );

  $fields['_your_tnum'] = array(
    'label'       => __( 'Telephone number ', 'job_manager' ),
    'type'        => 'text',
    'placeholder' => ''
  );

  $fields['_your_relevant'] = array(
    'label'       => __( 'Any relevant medical condition(s) that we should know about ', 'job_manager' ),
    'type'        => 'text',
    'placeholder' => ''
  );

  $fields['_your_ref1'] = array(
    'label'       => __( 'Referee 1 ', 'job_manager' ),
    'type'        => 'text',
    'placeholder' => ''
  );

  $fields['_your_ref2'] = array(
    'label'       => __( 'Referee 2 ', 'job_manager' ),
    'type'        => 'text',
    'placeholder' => ''
  );

  $fields['_your_ref3'] = array(
    'label'       => __( 'Referee 3 ', 'job_manager' ),
    'type'        => 'text',
    'placeholder' => ''
  );

  $fields['_your_adr1'] = array(
    'label'       => __( 'Address', 'job_manager' ),
    'type'        => 'text',
    'placeholder' => ''
  );

  $fields['_your_adr2'] = array(
    'label'       => __( 'Address', 'job_manager' ),
    'type'        => 'text',
    'placeholder' => ''
  );

  $fields['_your_adr3'] = array(
    'label'       => __( 'Address', 'job_manager' ),
    'type'        => 'text',
    'placeholder' => ''
  );

  $fields['_your_rel1'] = array(
    'label'       => __( 'Relationship to the applicant(s)', 'job_manager' ),
    'type'        => 'text',
    'placeholder' => ''
  );

  $fields['_your_rel2'] = array(
    'label'       => __( 'Relationship to the applicant(s)', 'job_manager' ),
    'type'        => 'text',
    'placeholder' => ''
  );

  $fields['_your_rel3'] = array(
    'label'       => __( 'Relationship to the applicant(s)', 'job_manager' ),
    'type'        => 'text',
    'placeholder' => ''
  );

  $fields['_your_type'] = array(
    'type'        => 'text',
    'placeholder' => 'Type, location, home feel, amenities etc '
  );

  $fields['_your_neigh'] = array(
    'label'       => __( 'The Neighbourhood', 'job_manager' ),
    'type'        => text,
    'placeholder' => ' '
  );

  $fields['_your_trans'] = array(
    'label'       => __( 'Transport links', 'job_manager' ),
    'type'        => text,
    'placeholder' => ' '
  );

  $fields['_your_rented'] = array(
    'label'       => __( 'Rented(Private)', 'job_manager' ),
    'type'     => 'radio',
    'options'  => array(
      'Yes' => 'Yes',
      'No'  => 'No'
    )
  );
     
  $fields['_your_council'] = array(
    'label'       => __( 'Rented(Council)', 'job_manager' ),
    'type'     => 'radio',
    'options'  => array(
      'Yes' => 'Yes',
      'No'  => 'No'
    )
  );

  $fields['_your_housing'] = array(
    'label'       => __( 'Rented (Housing Association)', 'job_manager' ),
    'type'     => 'radio',
    'options'  => array(
      'Yes' => 'Yes',
      'No'  => 'No'
    )
  );
     
  $fields['_your_mortgaged'] = array(
    'label'       => __( 'Mortgaged', 'job_manager' ),
    'type'     => 'radio',
    'options'  => array(
      'Yes' => 'Yes',
      'No'  => 'No'
    )
  );

  $fields['_your_house'] = array(
    'label'       => __( 'House', 'job_manager' ),
    'type'     => 'radio',
    'options'  => array(
      'Yes' => 'Yes',
      'No'  => 'No'
    )
  );
     
  $fields['_your_flat'] = array(
    'label'       => __( 'Flat', 'job_manager' ),
    'type'     => 'radio',
    'options'  => array(
      'Yes' => 'Yes',
      'No'  => 'No'
    )
  );

  $fields['_your_floors'] = array(
    'label'       => __( 'Number of floors', 'job_manager' ),
    'type'        => 'text',
    'placeholder' => ' '
  );

  $fields['_your_size'] = array(
    'label'       => __( 'Is number suitable for size of property', 'job_manager' ),
    'type'        => 'radio',
    'placeholder' => ' ',
    'options'  => array(
      'Yes' => 'Yes',
      'No'  => 'No'
    )
  );

  $fields['_your_home'] = array(
    'label'       => __( 'The home', 'job_manager' ),
    'type'        => 'checkbox',
    'placeholder' => ' ',
    'options'  => array(
      'Is it hygienically clean?' => 'Is it hygienically clean?',
      'Any pet’s odour'  => 'Any pet’s odour',
      'Cigarette smell'  => 'Cigarette smell',
      'Dampness'         => 'Dampness'
    )
  );

  $fields['_your_lounge'] = array(
    'label'       => __( 'Lounge?', 'job_manager' ),
    'type'        => 'radio',
    'placeholder' => ' ',
    'options'  => array(
      'Yes' => 'Yes',
      'No'  => 'No'
    )
  );

  $fields['_your_bed'] = array(
    'label'       => __( 'Number of bedrooms', 'job_manager' ),
    'type'        => 'text',
    'placeholder' => ' '
  );

  $fields['_your_bathroom'] = array(
    'label'       => __( 'Bathroom?', 'job_manager' ),
    'type'        => 'checkbox',
    'options'  => array(
      'If yes, is the door lockable?' => 'If yes, is the door lockable?',
      'Bath tub'  => 'Bath tub',
      'Shower' => 'Shower'
    )
  );

  $fields['_your_toilet'] = array(
    'label'       => __( 'Toilet', 'job_manager' ),
    'type'        => 'checkbox',
    'options'  => array(
      'If yes, is door lockable?' => 'If yes, is door lockable?'
    )
  );
 
  $fields['_your_kitchen'] = array(
    'label'       => __( 'Kitchen', 'job_manager' ),
    'type'        => 'radio',
    'placeholder' => ' ',
    'options'  => array(
      'If yes, is it hygienic' => 'If yes, is it hygienic',
      'Microwave'  => 'Microwave',
      'Toaster' => 'Toaster'
      
    )
  );

  $fields['_your_doors'] = array(
    'label'       => __( 'Doors: do they shut properly', 'job_manager' ),
    'type'        => 'radio',
    'placeholder' => ' ',
    'options'  => array(
      'Yes' => 'Yes',
      'No'  => 'No'
    )
  );

  $fields['_your_dining'] = array(
    'label'       => __( ' Dining Area ', 'job_manager' ),
    'type'        => 'radio',
    'placeholder' => ' ',
    'options'  => array(
      'Yes' => 'Yes',
      'No'  => 'No'
    )
  );

  $fields['_your_windows'] = array(
    'label'       => __( ' Windows ', 'job_manager' ),
    'type'        => 'checkbox',
    'options'  => array(
      'Single glaze' => 'Single glaze',
      'Double glaze'  => 'Double glaze',
      'Other'   => 'Other',
      'Are they easily opened for ventilation' => 'Are they easily opened for ventilation'
    )
  );

  $fields['_your_indoor'] = array(
    'label'       => __( ' General Indoors: are they clean and well maintained', 'job_manager' ),
    'type'        => 'radio',
    'placeholder' => ' ',
    'options'  => array(
      'Yes' => 'Yes',
      'No'  => 'No'
    )
  );

  $fields['_your_outdoor'] = array(
    'label'       => __( ' Outdoor/Garden: are they clean and well maintained', 'job_manager' ),
    'type'        => 'radio',
    'placeholder' => ' ',
    'options'  => array(
      'Yes' => 'Yes',
      'No'  => 'No'
    )
  );

  $fields['_your_heating'] = array(
    'label'       => __( ' Heating', 'job_manager' ),
    'type'        => 'checkbox',
    'options'  => array(
      'Gas' => 'Gas',
      'Electric'  => 'Electric',
      'Is the heating adequate and comfortable' => 'Is the heating adequate and comfortable',
      'If applicable, has the boiler been serviced in the last 12 months ' => 'If applicable, has the boiler been serviced in the last 12 months '
    )
  );

  $fields['_your_exits'] = array(
    'label'       => __( ' Exits: have no obstructions ', 'job_manager' ),
    'type'        => 'radio',
    'options'  => array(
      'Yes' => 'Yes',
      'No'  => 'No'
    )
  );

  $fields['_your_safety'] = array(
    'label'       => __( 'Safety Features ', 'job_manager' ),
    'type'        => 'checkbox',
    'options'  => array(
      'Blanket' => 'Blanket',
      'Extinguisher'  => 'Extinguisher',
      'Smoke detector' => 'Smoke detector',
      'Carbon monoxide detector' => 'Carbon monoxide detector',
      'Intruder alarm' => 'Intruder alarm',
      'First Aid Box'  => 'First Aid Box'
    )
  );

  $fields['_your_locked'] = array(
    'label'       => __( ' Medicines, alcohol, bleach and toxic materials: will this be locked away safe  ', 'job_manager' ),
    'type'        => 'radio',
    'options'  => array(
      'Yes' => 'Yes',
      'No'  => 'No'
    )
  );

  $fields['_your_any'] = array(
    'label'       => __( ' Smoking: any smoker in the household ', 'job_manager' ),
    'type'        => 'radio',
    'options'  => array(
      'Yes' => 'Yes',
      'No'  => 'No'
    )
  );

  $fields['_your_car'] = array(
    'label'       => __( 'Car Keys: where applicable, will this be kept safe ', 'job_manager' ),
    'type'        => 'radio',
    'options'  => array(
      'Yes' => 'Yes',
      'No'  => 'No'
    )
  );

  $fields['_your_info'] = array(
    'label'       => __( 'Pets ', 'job_manager' ),
    'type'        => 'checkbox',
    'options'  => array(
      'Any safety information strangers or visitors  need to know' => 'Any safety information strangers or visitors  need to know'
    )
  );

  $fields['_your_insurance'] = array(
    'label'       => __( 'Insurance ', 'job_manager' ),
    'type'        => 'checkbox',
    'options'  => array(
     'Building' => 'Building',
     'Content' => 'Content'
    )
  );

  $fields['_your_amenities'] = array(
    'label'       => __( 'Other amenities', 'job_manager' ),
    'type'        => 'checkbox',
    'options'  => array(
     'Internet' => 'Internet',
     'Air conditioning' => 'Air conditioning',
     'Television ' => 'Television',
     'Laundry machine' => 'Laundry machine',
     'Laundry dryer' => 'Laundry dryer',
     'Pets allowed' => 'Pets allowed',
     'Smoking allowed' => 'Smoking allowed',
     'Disability access' => 'Disability access',
     'Indoor fireplace ' => 'Indoor fireplace ',
     'Intercom ' => 'Intercom ',
     'Free parking ' => 'Free parking ',
     'Swimming pool' => 'Swimming pool',
     'Gym' => 'Gym',
     'Iron' => 'Iron',
     'Hair dryer' => 'Hair dryer'

    )
  );

  $fields['_your_young'] = array(
    'label'       => __( 'The young person’s room', 'job_manager' ),
    'type'        => 'checkbox',
    'options'  => array(
     'Storage' => 'Storage',
     'Secured door' => 'Secured door',
     'Secured windows' => 'Secured windows',
     'Adequate heating' => 'Adequate heating',
     'Table' => 'Table',
     'Chair' => 'Chair',
     'Ensuite facility  ' => 'Ensuite facility  '

    )
  );

return $fields;
}

add_action( 'single_job_listing_start', 'display_job_salary_data' );

function display_job_salary_data() {
  global $post;

  $surname = get_post_meta( $post->ID, '_your_surname', true );
  $forename = get_post_meta( $post->ID, '_your_forename', true );
  $dob = get_post_meta( $post->ID, '_your_dob', true );
  $pob = get_post_meta( $post->ID, '_your_pob', true );
  $ethinicity = get_post_meta( $post->ID, '_your_ethinicity', true );
  $religion = get_post_meta( $post->ID, '_your_religion', true );
  $maritalstatus = get_post_meta( $post->ID, '_your_maritalstatus', true );
  $language = get_post_meta( $post->ID, '_your_lang', true );
  $tel = get_post_meta( $post->ID, '_your_tel', true );
  $mobile = get_post_meta( $post->ID, '_your_mobile', true );
  $email = get_post_meta( $post->ID, '_your_eamil', true );
  $address = get_post_meta( $post->ID, '_your_address', true );
  $postcode = get_post_meta( $post->ID, '_your_postcode', true );
  $role = get_post_meta( $post->ID, '_your_role', true );
  $empname = get_post_meta( $post->ID, '_your_empname', true );
  $addr = get_post_meta( $post->ID, '_your_add', true );
  $occ = get_post_meta( $post->ID, '_your_occupation', true );
  $shifts = get_post_meta( $post->ID, '_your_shifts', true );
  $skills = get_post_meta( $post->ID, '_your_skills', true );
  $respite = get_post_meta( $post->ID, '_your_respite', true );
  $emergency = get_post_meta( $post->ID, '_your_emergency', true );
  $undertake = get_post_meta( $post->ID, '_your_undertake', true );
  $part = get_post_meta( $post->ID, '_your_part', true );
  $type = get_post_meta( $post->ID, '_your_type', true );
  $stealing = get_post_meta( $post->ID, '_your_stealing', true );
  $drinking = get_post_meta( $post->ID, '_your_drinking', true );
  $drugs = get_post_meta( $post->ID, '_your_drugs', true );
  $smoking = get_post_meta( $post->ID, '_your_smoking', true );
  $bad = get_post_meta( $post->ID, '_your_bad', true );
  $sexuality = get_post_meta( $post->ID, '_your_sexuality', true );
  $depression = get_post_meta( $post->ID, '_your_depression', true );
  $breaking = get_post_meta( $post->ID, '_your_breaking', true );
  $lack = get_post_meta( $post->ID, '_your_lack', true );
  $untidiness = get_post_meta( $post->ID, '_your_untidiness', true );
  $hygiene = get_post_meta( $post->ID, '_your_hygiene', true );
  $late = get_post_meta( $post->ID, '_your_late', true );
  $motivation = get_post_meta( $post->ID, '_your_motivation', true );
  $risk = get_post_meta( $post->ID, '_your_risk', true );
  $violence = get_post_meta( $post->ID, '_your_violence', true );
  $contact = get_post_meta( $post->ID, '_your_contact', true );
  $different = get_post_meta( $post->ID, '_your_different', true );
  $beliefs = get_post_meta( $post->ID, '_your_beliefs', true );
  $history = get_post_meta( $post->ID, '_your_history', true );
  $medical = get_post_meta( $post->ID, '_your_medical', true );
  $disability = get_post_meta( $post->ID, '_your_disability', true );
  $move = get_post_meta( $post->ID, '_your_move', true );
  $placement = get_post_meta( $post->ID, '_your_placement', true );
  $emerplace = get_post_meta( $post->ID, '_your_emerplace', true );
  $claim = get_post_meta( $post->ID, '_your_claim', true ); 
  $male = get_post_meta( $post->ID, '_your_male', true ); 
  $female = get_post_meta( $post->ID, '_your_female', true ); 
  $care = get_post_meta( $post->ID, '_your_care', true );
  $child = get_post_meta( $post->ID, '_your_child', true ); 
  $minors = get_post_meta( $post->ID, '_your_minors', true ); 
  $need = get_post_meta( $post->ID, '_your_need', true ); 
  $mother = get_post_meta( $post->ID, '_your_mother', true ); 
  $key = get_post_meta( $post->ID, '_your_key', true ); 
  $kitchen = get_post_meta( $post->ID, '_your_kitchen', true ); 
  $use = get_post_meta( $post->ID, '_your_use', true ); 
  $lounge = get_post_meta( $post->ID, '_your_lounge', true ); 
  $visits = get_post_meta( $post->ID, '_your_visits', true ); 
  $access = get_post_meta( $post->ID, '_your_access', true ); 
  $support = get_post_meta( $post->ID, '_your_support', true ); 
  $facility = get_post_meta( $post->ID, '_your_facility', true ); 
  $moti = get_post_meta( $post->ID, '_your_moti', true);
  $background = get_post_meta( $post->ID, '_your_background', true);
  $personality = get_post_meta( $post->ID, '_your_personality', true);
  $interests = get_post_meta( $post->ID, '_your_interests', true);
  $present = get_post_meta( $post->ID, '_your_present', true);
  $ability = get_post_meta( $post->ID, '_your_ability', true);
  $safe = get_post_meta( $post->ID, '_your_safe', true);
  $required = get_post_meta( $post->ID, '_your_required', true);
  $promote = get_post_meta( $post->ID, '_your_promote', true);
  $certificate = get_post_meta( $post->ID, '_your_certificate', true);
  $cnumber = get_post_meta( $post->ID, '_your_cnumber', true);
  $doi = get_post_meta( $post->ID, '_your_doi', true);
  $gp = get_post_meta( $post->ID, '_your_gp', true);
  $adrs = get_post_meta( $post->ID, '_your_adrs', true);
  $tnum = get_post_meta( $post->ID, '_your_tnum', true);
  $relevant = get_post_meta( $post->ID, '_your_relevant', true);
  $ref1 = get_post_meta( $post->ID, '_your_ref1', true);
  $ref2 = get_post_meta( $post->ID, '_your_ref2', true);
  $ref3 = get_post_meta( $post->ID, '_your_ref3', true);
  $adr1 = get_post_meta( $post->ID, '_your_adr1', true);
  $adr2 = get_post_meta( $post->ID, '_your_adr2', true);
  $adr3 = get_post_meta( $post->ID, '_your_adr3', true);
  $rel1 = get_post_meta( $post->ID, '_your_rel1', true);
  $rel2 = get_post_meta( $post->ID, '_your_rel2', true);
  $rel3 = get_post_meta( $post->ID, '_your_rel3', true);
  $type = get_post_meta( $post->ID, '_your_type', true);
  $neigh = get_post_meta( $post->ID, '_your_neigh', true);
  $trans = get_post_meta( $post->ID, '_your_trans', true);
  $rented = get_post_meta( $post->ID, '_your_rented', true);
  $council = get_post_meta( $post->ID, '_your_council', true);
  $housing = get_post_meta( $post->ID, '_your_housing', true);
  $mortgaged = get_post_meta( $post->ID, '_your_mortgaged', true);
  $house = get_post_meta( $post->ID, '_your_house', true);
  $flat = get_post_meta( $post->ID, '_your_flat', true);
  $floors = get_post_meta( $post->ID, '_your_floors', true); 
  $size = get_post_meta( $post->ID, '_your_size', true); 
  $home = get_post_meta( $post->ID, '_your_home', true); 
  $lounge =  get_post_meta( $post->ID, '_your_lounge', true); 
  $bed =  get_post_meta( $post->ID, '_your_bed', true); 
  $bathroom =  get_post_meta( $post->ID, '_your_bathroom', true); 
  $toilet = get_post_meta( $post->ID, '_your_toilet', true); 
  $kitchen = get_post_meta( $post->ID, '_your_kitchen', true); 
  $doors = get_post_meta( $post->ID, '_your_doors', true); 
  $dining = get_post_meta( $post->ID, '_your_dining', true); 
  $windows = get_post_meta( $post->ID, '_your_windows', true); 
  $indoor = get_post_meta( $post->ID, '_your_indoor', true); 
  $indoor = get_post_meta( $post->ID, '_your_indoor', true); 
  $heating = get_post_meta( $post->ID, '_your_heating', true); 
  $exits = get_post_meta( $post->ID, '_your_exits', true); 
  $safety = get_post_meta( $post->ID, '_your_safety', true); 
  $locked =get_post_meta( $post->ID, '_your_locked', true);
  $any =get_post_meta( $post->ID, '_your_any', true);
  $car =get_post_meta( $post->ID, '_your_car', true);
  $info =get_post_meta( $post->ID, '_your_info', true);
  $insurance =get_post_meta( $post->ID, '_your_insurance', true);
  $amenities =get_post_meta( $post->ID, '_your_amenities', true);
  $young =get_post_meta( $post->ID, '_your_young', true);
?>

<div class="content-box"> 
    <p> Your personal details</p>
    <ul>
      <li> Surname: <?php echo esc_html( $surname ) ?></li>
      <li> Forename: <?php echo  esc_html( $forename ) ?></li>
      <li> Date of Birth: <?php echo   esc_html( $dob ) ?></li>
      <li> Place of Birth:<?php echo  esc_html( $pob ) ?></li>
      <li> Ethnicity:<?php  echo esc_html( $ethinicity ) ?></li>
      <li> Religion: <?php  echo esc_html( $religion ) ?></li>
      <li> Marital Status: <?php  echo  esc_html( $maritalstatus ) ?></li>  
      <li> Language(s) spoken at home: <?php  echo  esc_html( $language ) ?></li>  
      <li> Telephone (Home):<?php   echo  esc_html( $tel ) ?></li>
      <li> Telephone (Mobile): <?php  echo   esc_html( $mobile ) ?></li>
      <li> E-mail : <?php echo esc_html( $email) ?> </li>
      <li> Address: <?php echo esc_html( $address) ?></li>
      <li> Postcode: <?php echo esc_html( $postcode) ?></li>
      <li> Role: <?php echo esc_html( $role) ?></li>
      <li> Employer's Name: <?php echo esc_html( $empname) ?></li>
      <li> Address : <?php echo esc_html( $addr) ?></li>
      <li> Shifts/hours worked : <?php echo esc_html( $occ) ?></li>
      <li> Available to provide independent living skills support to a young person on a floating support basis: <?php echo esc_html( $skills) ?> </li>
      <li> Available for respite placements :<?php echo esc_html( $respite)?></li>
      <li> Available for emergency placements :<?php echo esc_html( $emergency)?></li>
      <li> Available to undertake assessment of new hosts (training will be offered for this) :<?php echo esc_html( $undertake)?></li>
      <li> Available to be part of a host peer group in your local area :<?php echo esc_html( $part)?></li>
      <li> Preferred type of placement commissioning: block or spot purchase :<?php echo esc_html( $type)?></li>
      <li> Stealing: <?php echo esc_html( $stealing) ?></li>
      <li> Drinking: <?php echo esc_html( $drinking) ?></li>
      <li> Drugs: <?php echo esc_html( $drugs) ?></li>
      <li> Smoking: <?php echo esc_html( $smoking) ?></li>
      <li> Bad Language: <?php echo esc_html( $bad) ?></li>
      <li> Sexuality: <?php echo esc_html( $sexuality) ?></li>
      <li> Depression: <?php echo esc_html( $depression) ?></li>
      <li> Breaking House Rules: <?php echo esc_html( $breaking) ?></li>
      <li> Lack of courtesy: <?php echo esc_html( $lack) ?></li>
      <li> Untidiness: <?php echo esc_html( $untidiness) ?></li>
      <li> (Lack of) personal hygiene: <?php echo esc_html( $hygiene) ?></li>
      <li> Coming in late: <?php echo esc_html( $late) ?></li>
      <li> Lack of motivation: <?php echo esc_html( $motivation) ?></li>
      <li> Risk Taking: <?php echo esc_html( $risk) ?></li>
      <li> Violence in background: <?php echo esc_html( $violence) ?></li>
      <li> Having contact with his/her family: <?php echo esc_html( $contact) ?></li>
      <li> Ethnicity of young person if different yours: <?php echo esc_html( $different)?></li>
      <li> Religion or Beliefs if different from yours: <?php echo esc_html( $beliefs) ?></li>
      <li> Young person with history of physically/sexually/emotionally abuse: <?php echo esc_html( $history) ?></li>
      <li> Young person with medical condition : <?php echo esc_html( $medical) ?></li>
      <li> Physical Disability : <?php echo esc_html( $disability) ?></li>
      <li> Helping a young person to move on : <?php echo esc_html( $move) ?></li>
      <li> Pregnant young person  or  mother &amp baby placement  : <?php echo esc_html( $placement) ?></li>
      <li> Emergency placement : <?php echo esc_html( $emerplace) ?></li>
      <li> Accepting young person claiming Housing Benefit  : <?php echo esc_html( $claim) ?></li>
      <li> Male : <?php echo esc_html( $male) ?></li>
      <li> Female : <?php echo esc_html( $female) ?></li>
      <li> Care Leaver : <?php echo esc_html( $care) ?></li>
      <li> Looked After Child : <?php echo esc_html( $child) ?></li>
      <li> Unaccompanied Minors : <?php echo esc_html( $minors) ?></li>
      <li> Child in Need : <?php echo esc_html( $need) ?></li>
      <li> Mother and Baby : <?php echo esc_html( $mother) ?></li>
      <li> A key to the front door : <?php echo esc_html( $key) ?></li>
      <li> Unrestricted use of the kitchen : <?php echo esc_html( $kitchen) ?></li>
      <li> Use of the washing machine : <?php echo esc_html( $use) ?></li>
      <li> Use of a lounge: <?php echo esc_html( $lounge) ?></li>
      <li> Friends visits : <?php echo esc_html( $visits) ?></li>
      <li> Access to a television : <?php echo esc_html( $access) ?></li>
      <li> Support to claim welfare benefits  : <?php echo esc_html( $support) ?></li>
      <li> Any other available facility: <?php echo esc_html( $facility) ?></li>
      <li> Your motivation: <?php echo esc_html( $moti) ?></li>
      <li> Background (e.g. ex foster carer, retired, etc.) : <?php echo esc_html( $background) ?></li>
      <li> Personality : <?php echo esc_html( $personality) ?></li>
      <li> Interests and hobbies: <?php echo esc_html( $interests) ?></li>
      <li> Present relationship/partnership  : <?php echo esc_html( $present) ?></li>
      <li> Your (and partner’s) ability to support a young person to promote emotional, physical, sexual and intellectual development; and also supporting them to gain independent living skills such as cooking, washing, budgeting etc setting boundaries where required.  : <?php echo esc_html( $ability) ?></li>
      <li> Your (and partner’s) ability to providing a safe and supportive environment where they can be safe from abuse. An ability to recognise young people may vary in their capacity to make competent decisions regarding their own safety and being able to negotiate with them the safest possible choices: <?php echo esc_html( $safe) ?></li>
      <li> Your (and partner’s) ability to work with other individuals and organisations to support the young person using people and links within the community where required  : <?php echo esc_html( $required) ?></li>
      <li> Confidentiality, Equality and Diversity: An ability to promote equality, diversity and rights of the young person and maintaining confidentiality as required: <?php echo esc_html( $promote) ?></li>
      <li> Do you have a DBS certificate issued within the last 3 years?  : <?php echo esc_html( $certificate) ?></li>
      <li> If yes, what is the certificate number? : <?php echo esc_html( $cnumber) ?></li>
      <li> Date of issue  : <?php echo esc_html( $doi) ?></li>
      <li> Your GP/Surgery’s name  : <?php echo esc_html( $gp) ?></li>
      <li> Address: <?php echo esc_html( $adrs) ?></li>
      <li> Telephone number  : <?php echo esc_html( $tnum) ?></li>
      <li> Any relevant medical condition(s) that we should know about  : <?php echo esc_html( $relevant) ?></li>
      <li> Referee 1 : <?php echo esc_html( $ref1) ?></li>
      <li> Referee 2 : <?php echo esc_html( $ref2) ?></li>
      <li> Referee 3 : <?php echo esc_html( $ref3) ?></li>
      <li> Address : <?php echo esc_html( $adr1) ?></li>
      <li> Address : <?php echo esc_html( $adr2) ?></li>
      <li> Address : <?php echo esc_html( $adr2) ?></li>
      <li> Relationship to the applicant(s) : <?php echo esc_html( $rel1) ?></li>
      <li> Relationship to the applicant(s) : <?php echo esc_html( $rel2) ?></li>
      <li> Relationship to the applicant(s) : <?php echo esc_html( $rel3) ?></li>
      <?php echo esc_html( $type) ?>
      <li> The Neighbourhood  <?php echo esc_html( $type) ?></li>
      <li> Transport links  <?php echo esc_html( $trans) ?></li>
      <li> Rented(Private) <?php echo esc_html( $rented) ?></li>
      <li> Rented(Council) <?php echo esc_html( $council) ?></li>
      <li> Rented (Housing Association) <?php echo esc_html( $housing) ?></li>
      <li> Mortgaged <?php echo esc_html( $mortgaged) ?></li>
      <li> House <?php echo esc_html( $house) ?></li>
      <li> Flat <?php echo esc_html( $flat) ?></li>
      <li> Floors <?php echo esc_html( $floors) ?></li>
      <li> Is number suitable for size of property <?php echo esc_html( $size) ?></li>
      <li> The home <?php echo esc_html( $home) ?></li>
      <li> Lounge?  <?php echo esc_html( $lounge) ?></li>
      <li> Number of Bedrooms  <?php echo esc_html( $bed) ?></li>
      <li> Bathroom <?php echo esc_html($bathroom) ?></li>
      <li> Toilet  <?php echo esc_html( $toilet) ?></li>
      <li> Kitchen  <?php echo esc_html( $kitchen) ?></li>
      <li> Doors: do they shut properly <?php echo esc_html( $doors) ?></li>
      <li> Dining Area <?php echo esc_html( $dining) ?></li>
      <li> Windows<?php echo esc_html( $windows) ?></li>
      <li> General Indoors: are they clean and well maintained<?php echo esc_html( $indoor) ?></li>
      <li> Heating : <?php echo esc_html( $heating) ?></li>
      <li> Exits: have no obstructions  <?php echo esc_html( $exits) ?></li>
      <li> Safety Features<?php echo esc_html( $safety) ?> </li>
      <li> Medicines, alcohol, bleach and toxic materials: will this be locked away safe : <?php echo esc_html( $locked) ?></li>
      <li> Smoking: any smoker in the household :<?php echo esc_html( $any) ?></li>
      <li> Car Keys: where applicable, will this be kept safe :<?php echo esc_html( $car) ?> </li>
      <li> Pets :<?php echo esc_html( $info) ?> </li>
      <li> Insurance :<?php echo esc_html( $insurance) ?> </li>
      <li> Other amenities:<?php echo esc_html( $amenities) ?> </li>
      <li> The young person’s room:<?php echo esc_html( $young) ?> </li>  
      </ul>
  </div> 
<?php  
} 

add_filter( 'submit_job_form_fields', 'custom_submit_job_form_fields' );

function custom_submit_job_form_fields( $fields ) {
    unset( $fields['company'] );
    unset( $fields['job']['job_category']);
    unset( $fields['job']['job_location']);
    unset( $fields['job']['job_region']);
    return $fields;
}
?>


 

