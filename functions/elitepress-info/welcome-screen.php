<?php
/**
 * Welcome Screen Class
 */
class elitepress_screen {

	/**
	 * Constructor for the welcome screen
	 */
	public function __construct() {

		/* create dashbord page */
		add_action( 'admin_menu', array( $this, 'elitepress_register_menu' ) );

		/* activation notice */
		add_action( 'load-themes.php', array( $this, 'elitepress_activation_admin_notice' ) );

		/* enqueue script and style for welcome screen */
		add_action( 'admin_enqueue_scripts', array( $this, 'elitepress_style_and_scripts' ) );

		/* enqueue script for customizer */
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'elitepress_scripts_for_customizer' ) );

		/* load welcome screen */
		add_action( 'elitepress_info_screen', array( $this, 'elitepress_getting_started' ), 10 );
		add_action( 'elitepress_info_screen', array( $this, 'elitepress_action_required' ), 20 );
		add_action( 'elitepress_info_screen', array( $this, 'elitepress_github' ), 40 );
		add_action( 'elitepress_info_screen', array( $this, 'elitepress_welcome_free_pro' ), 50 );

		/* ajax callback for dismissable required actions */
		add_action( 'wp_ajax_elitepress_dismiss_required_action', array( $this, 'elitepress_dismiss_required_action_callback') );
		add_action( 'wp_ajax_nopriv_elitepress_dismiss_required_action', array($this, 'elitepress_dismiss_required_action_callback') );

	}

	public function elitepress_register_menu() {
		add_theme_page( 'About Elitepress Theme', 'About Elitepress Theme', 'activate_plugins', 'elitepress-info', array( $this, 'elitepress_welcome_screen' ) );
	}

	public function elitepress_activation_admin_notice() {
		global $pagenow;

		if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
			add_action( 'admin_notices', array( $this, 'elitepress_admin_notice' ), 99 );
		}
	}

	/**
	 * Display an admin notice linking to the welcome screen
	 * @sfunctionse 1.8.2.4
	 */
	public function elitepress_admin_notice() {
		?>
			<div class="updated notice is-dismissible">
				<p><?php echo sprintf( esc_html__( "Welcome! Thank you for choosing ElitePress Lite! To take full advantage of all of our theme's best features, please visit our %swelcome page%s.", "elitepress" ), '<a href="' . esc_url( admin_url( 'themes.php?page=elitepress-info' ) ) . '">', '</a>' ); ?></p>
				<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=elitepress-info' ) ); ?>" class="button" style="text-decoration: none;"><?php _e( 'Get started with ElitePress Lite', 'elitepress' ); ?></a></p>
			</div>
		<?php
	}
	
	/**
	 * Load welcome screen css and javascript
	 * @sfunctionse  1.8.2.4
	 */
	public function elitepress_style_and_scripts( $hook_suffix ) {

		if ( 'appearance_page_elitepress-info' == $hook_suffix ) {
			
			
			wp_enqueue_style( 'elitepress-info-css', get_template_directory_uri() . '/functions/elitepress-info/css/bootstrap.css' );
			
			wp_enqueue_style( 'elitepress-info-screen-css', get_template_directory_uri() . '/functions/elitepress-info/css/welcome.css' );

			wp_enqueue_script( 'elitepress-info-screen-js', get_template_directory_uri() . '/functions/elitepress-info/js/welcome.js', array('jquery') );

			global $elitepress_required_actions;

			$nr_actions_required = 0;

			/* get number of required actions */
			if( get_option('elitepress_show_required_actions') ):
				$elitepress_show_required_actions = get_option('elitepress_show_required_actions');
			else:
				$elitepress_show_required_actions = array();
			endif;

			if( !empty($elitepress_required_actions) ):
				foreach( $elitepress_required_actions as $elitepress_required_action_value ):
					if(( !isset( $elitepress_required_action_value['check'] ) || ( isset( $elitepress_required_action_value['check'] ) && ( $elitepress_required_action_value['check'] == false ) ) ) && ((isset($elitepress_show_required_actions[$elitepress_required_action_value['id']]) && ($elitepress_show_required_actions[$elitepress_required_action_value['id']] == true)) || !isset($elitepress_show_required_actions[$elitepress_required_action_value['id']]) )) :
						$nr_actions_required++;
					endif;
				endforeach;
			endif;

			wp_localize_script( 'elitepress-info-screen-js', 'elitepressLiteWelcomeScreenObject', array(
				'nr_actions_required' => $nr_actions_required,
				'ajaxurl' => admin_url( 'admin-ajax.php' ),
				'template_directory' => get_template_directory_uri(),
				'no_required_actions_text' => __( 'Hooray! There are no required actions for you right now.','elitepress' )
			) );
		}
	}

	/**
	 * Load scripts for customizer page
	 * @sfunctionse  1.8.2.4
	 */
	public function elitepress_scripts_for_customizer() {

		wp_enqueue_style( 'elitepress-info-screen-customizer-css', get_template_directory_uri() . '/functions/elitepress-info/css/welcome_customizer.css' );
		wp_enqueue_script( 'elitepress-info-screen-customizer-js', get_template_directory_uri() . '/functions/elitepress-info/js/welcome_customizer.js', array('jquery'), '20120206', true );

		global $elitepress_required_actions;

		$nr_actions_required = 0;

		/* get number of required actions */
		if( get_option('elitepress_show_required_actions') ):
			$elitepress_show_required_actions = get_option('elitepress_show_required_actions');
		else:
			$elitepress_show_required_actions = array();
		endif;

		if( !empty($elitepress_required_actions) ):
			foreach( $elitepress_required_actions as $elitepress_required_action_value ):
				if(( !isset( $elitepress_required_action_value['check'] ) || ( isset( $elitepress_required_action_value['check'] ) && ( $elitepress_required_action_value['check'] == false ) ) ) && ((isset($elitepress_show_required_actions[$elitepress_required_action_value['id']]) && ($elitepress_show_required_actions[$elitepress_required_action_value['id']] == true)) || !isset($elitepress_show_required_actions[$elitepress_required_action_value['id']]) )) :
					$nr_actions_required++;
				endif;
			endforeach;
		endif;

		wp_localize_script( 'elitepress-info-screen-customizer-js', 'elitepressLiteWelcomeScreenObject', array(
			'nr_actions_required' => $nr_actions_required,
			'aboutpage' => esc_url( admin_url( 'themes.php?page=elitepress-info#actions_required' ) ),
			'customizerpage' => esc_url( admin_url( 'customize.php#actions_required' ) ),
			'themeinfo' => __('View Theme Info','elitepress'),
		) );
	}

	/**
	 * Dismiss required actions
	 * @sfunctionse 1.8.2.4
	 */
	public function elitepress_dismiss_required_action_callback() {

		global $elitepress_required_actions;

		$elitepress_dismiss_id = (isset($_GET['dismiss_id'])) ? $_GET['dismiss_id'] : 0;

		echo $elitepress_dismiss_id; /* this is needed and it's the id of the dismissable required action */

		if( !empty($elitepress_dismiss_id) ):

			/* if the option exists, update the record for the specified id */
			if( get_option('elitepress_show_required_actions') ):

				$elitepress_show_required_actions = get_option('elitepress_show_required_actions');

				$elitepress_show_required_actions[$elitepress_dismiss_id] = false;

				update_option( 'elitepress_show_required_actions',$elitepress_show_required_actions );

			/* create the new option,with false for the specified id */
			else:

				$elitepress_show_required_actions_new = array();

				if( !empty($elitepress_required_actions) ):

					foreach( $elitepress_required_actions as $elitepress_required_action ):

						if( $elitepress_required_action['id'] == $elitepress_dismiss_id ):
							$elitepress_show_required_actions_new[$elitepress_required_action['id']] = false;
						else:
							$elitepress_show_required_actions_new[$elitepress_required_action['id']] = true;
						endif;

					endforeach;

				update_option( 'elitepress_show_required_actions', $elitepress_show_required_actions_new );

				endif;

			endif;

		endif;

		die(); // this is required to return a proper result
	}


	/**
	 * Welcome screen content
	 * @sfunctionse 1.8.2.4
	 */
	public function elitepress_welcome_screen() {

		require_once( ABSPATH . 'wp-load.php' );
		require_once( ABSPATH . 'wp-admin/admin.php' );
		require_once( ABSPATH . 'wp-admin/admin-header.php' );
		?>
		<div class="container-fluid">
		<div class="row">
		<div class="col-md-12">
		<ul class="elitepress-nav-tabs" role="tablist">
			<li role="presentation" class="active"><a href="#getting_started" aria-controls="getting_started" role="tab" data-toggle="tab"><?php esc_html_e( 'Getting Started','elitepress'); ?></a></li>
			<li role="presentation"><a href="#actions_required" aria-controls="actions_required" role="tab" data-toggle="tab"><?php esc_html_e( 'Actions Required','elitepress'); ?></a></li>
			<li role="presentation"><a href="#github" aria-controls="github" role="tab" data-toggle="tab"><?php esc_html_e( 'Why Upgrade to Pro?','elitepress'); ?></a></li>
			<li role="presentation"><a href="#free_pro" aria-controls="free_pro" role="tab" data-toggle="tab"><?php esc_html_e( 'Free vs PRO','elitepress'); ?></a></li>
			
		</ul>
		</div>
		</div>
		</div>

		<div class="elitepress-tab-content">

			<?php do_action( 'elitepress_info_screen' ); ?>

		</div>
		<?php
	}

	/**
	 * Getting started
	 *
	 */
	public function elitepress_getting_started() {
		require_once( get_template_directory() . '/functions/elitepress-info/sections/getting-started.php' );
	}

	
	/**
	 * Action Requerd
	 *
	 */
	public function elitepress_action_required() {
		require_once( get_template_directory() . '/functions/elitepress-info/sections/actions-required.php' );
	}
	
	/**
	 * Contribute
	 *
	 */
	public function elitepress_github() {
		require_once( get_template_directory() . '/functions/elitepress-info/sections/github.php' );
	}


	/**
	 * Free vs PRO
	 * 
	 */
	public function elitepress_welcome_free_pro() {
		require_once( get_template_directory() . '/functions/elitepress-info/sections/free_pro.php' );
	}
	
	
}

$GLOBALS['elitepress_screen'] = new elitepress_screen();