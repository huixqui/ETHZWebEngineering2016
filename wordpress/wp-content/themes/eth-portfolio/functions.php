<?php
add_theme_support( 'custom-background' );

add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'portfolio_element',
		array(
			'labels' => array(
				'name' => __( 'Portfolio' ),
				'singular_name' => __( 'Portfolio Element' ),
				'add_new_item' => __( 'Neues Portfolio Element hinzufügen')
			),
			'public' => true,
			'has_archive' => true
		)
	);
}

function add_custom_meta_boxes() {
	add_meta_box('wp_custom_attachment', 'Meta Data', 'wp_custom_attachment', 'portfolio_element', 'normal', 'high');
}
add_action('add_meta_boxes', 'add_custom_meta_boxes');

function wp_custom_attachment() {
	wp_nonce_field(plugin_basename(__FILE__), 'wp_custom_attachment_nonce');
	$html = '<p class="description">';
	$html .= 'Type:';
	$html .= '</p>';
	$html .= '<select id="wp_custom_select" name="wp_custom_select"><option value="android">Android</option><option value="uidesign">UI Design</option></select>';
	$html .= '<p class="description">';
	$html .= 'Thumbail Image:';
	$html .= '</p>';
	$html .= '<input type="file" id="wp_custom_attachment" name="wp_custom_attachment" value="" size="25">';
	echo $html;
}

add_action('save_post', 'save_custom_meta_data');
function save_custom_meta_data($id) {
	if(!empty($_POST['wp_custom_select'])) {
		add_post_meta($id, 'wp_custom_select', $_POST['wp_custom_select']);
		update_post_meta($id, 'wp_custom_select', $_POST['wp_custom_select']);
	}
	if(!empty($_FILES['wp_custom_attachment']['name'])) {
		$supported_types = array('image/jpg', 'image/png', 'image/jpeg');
		$arr_file_type = wp_check_filetype(basename($_FILES['wp_custom_attachment']['name']));
		$uploaded_type = $arr_file_type['type'];

		if(in_array($uploaded_type, $supported_types)) {
			$upload = wp_upload_bits($_FILES['wp_custom_attachment']['name'], null, file_get_contents($_FILES['wp_custom_attachment']['tmp_name']));
			if(isset($upload['error']) && $upload['error'] != 0) {
				wp_die('There was an error uploading your file. The error is: ' . $upload['error']);
			} else {
				add_post_meta($id, 'wp_custom_attachment', $upload);
				update_post_meta($id, 'wp_custom_attachment', $upload);
			}
		}
		else {
			wp_die("The file type that you've uploaded is not a PNG/JPG.");
		}
	}
}

function update_edit_form() {
	echo ' enctype="multipart/form-data"';
}
add_action('post_edit_form_tag', 'update_edit_form');


function starter_customize_register( $wp_customize )
{
    $wp_customize->add_section( 'technical_skills_section' , array(
        'title'    => __( 'Technical Skills'),
        'priority' => 30
    ) );

    $wp_customize->add_setting( 'technical_skills_setting_html' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
	 $wp_customize->add_setting( 'technical_skills_setting_css' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
	 $wp_customize->add_setting( 'technical_skills_setting_javascript' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
	 $wp_customize->add_setting( 'technical_skills_setting_wordpress' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( 'technical_skills_html', array(
        'type'     => 'number',
        'label'    => __( 'HTML Skills' ),
        'section'  => 'technical_skills_section',
        'settings' => 'technical_skills_setting_html',
    ) );

	 $wp_customize->add_control( 'technical_skills_css', array(
        'type'     => 'number',
        'label'    => __( 'CSS Skills' ),
        'section'  => 'technical_skills_section',
        'settings' => 'technical_skills_setting_css',
    ) );

	 $wp_customize->add_control( 'technical_skills_javascript', array(
        'type'     => 'number',
        'label'    => __( 'JavaScript Skills' ),
        'section'  => 'technical_skills_section',
        'settings' => 'technical_skills_setting_javascript',
    ) );

	 $wp_customize->add_control( 'technical_skills_wordpress', array(
        'type'     => 'number',
        'label'    => __( 'Wordpress Skills' ),
        'section'  => 'technical_skills_section',
        'settings' => 'technical_skills_setting_wordpress',
    ) );
}
add_action( 'customize_register', 'starter_customize_register');

function tcx_customizer_css() {
    ?>
    <script type="text/javascript">
        $('#skills .bar.blue').outerHeight('<?php echo get_theme_mod( 'technical_skills_setting_html' ); ?>%').find('.number').text('<?php echo get_theme_mod( 'technical_skills_setting_html' ); ?>%');
        $('#skills .bar.red').outerHeight('<?php echo get_theme_mod( 'technical_skills_setting_css' ); ?>%').find('.number').text('<?php echo get_theme_mod( 'technical_skills_setting_css' ); ?>%');
        $('#skills .bar.yellow').outerHeight('<?php echo get_theme_mod( 'technical_skills_setting_javascript' ); ?>%').find('.number').text('<?php echo get_theme_mod( 'technical_skills_setting_javascript' ); ?>%');
        $('#skills .bar.green').outerHeight('<?php echo get_theme_mod( 'technical_skills_setting_wordpress' ); ?>%').find('.number').text('<?php echo get_theme_mod( 'technical_skills_setting_wordpress' ); ?>%');
    </script>
	<?php
}
add_action( 'wp_footer', 'tcx_customizer_css' );
?>