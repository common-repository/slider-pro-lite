<?php
/**
 * Contains the default settings for the slider, slides, layers etc.
 * 
 * @since 1.0.0
 */
class BQW_SliderPro_Lite_Settings {

	/**
	 * The slider's settings.
	 * 
	 * The array contains the name, label, type, default value, 
	 * JavaScript name and description of the setting.
	 *
	 * @since 1.0.0
	 * 
	 * @var array
	 */
	protected static $settings = array();

	/**
	 * The groups of settings.
	 *
	 * The settings are grouped for the purpose of generating
	 * the slider's admin sidebar.
	 *
	 * @since 1.0.0
	 * 
	 * @var array
	 */
	protected static $setting_groups = array();

	/**
	 * Layer settings.
	 *
	 * The array contains the name, label, type, default value
	 * and description of the setting.
	 *
	 * @since 1.0.0
	 * 
	 * @var array
	 */
	protected static $layer_settings = array();

	/**
	 * Slide settings.
	 *
	 * The array contains the name, label, type, default value
	 * and description of the setting.
	 *
	 * @since 1.0.0
	 * 
	 * @var array
	 */
	protected static $slide_settings = array();

	/**
	 * Hold the state (opened or closed) of the sidebar slides.
	 *
	 * @since 1.0.0
	 * 
	 * @var array
	 */
	protected static $panels_state = array(
		'appearance' => '',
		'animations' => 'closed',
		'navigation' => 'closed',
		'captions' => 'closed'
	);

	/**
	 * Holds the plugin settings.
	 *
	 * @since 1.0.0
	 * 
	 * @var array
	 */
	protected static $plugin_settings = array();

	/**
	 * Return the slider settings.
	 *
	 * @since 1.0.0
	 * 
	 * @param  string      $name The name of the setting. Optional.
	 * @return array|mixed       The array of settings or the value of the setting.
	 */
	public static function getSettings( $name = null ) {
		if ( empty( self::$settings ) ) {
			self::$settings = array(
				'width' => array(
					'js_name' => 'width',
					'label' => __( 'Width', 'slider-pro-lite' ),
					'type' => 'number',
					'default_value' => 500,
					'description' => __( 'Sets the width of the slide. Can be set to a fixed value, like 900 (indicating 900 pixels), or to a percentage value, like \'100%\'.', 'slider-pro-lite' )
				),

				'height' => array(
					'js_name' => 'height',
					'label' => __( 'Height', 'slider-pro-lite' ),
					'type' => 'number',
					'default_value' => 300,
					'description' => __( 'Sets the height of the slide. Can be set to a fixed value, like 900 (indicating 900 pixels), or to a percentage value, like \'100%\'.', 'slider-pro-lite' )
				),

				'responsive' => array(
					'js_name' => 'responsive',
					'label' => __( 'Responsive', 'slider-pro-lite' ),
					'type' => 'boolean',
					'default_value' => true,
					'description' => __( 'Makes the slider responsive. The slider can be responsive even if the \'width\' and/or \'height\' properties are set to fixed values. In this situation, \'width\' and \'height\' will act as the maximum width and height of the slides.', 'slider-pro-lite' )
				),

				'aspect_ratio' => array(
					'js_name' => 'aspectRatio',
					'label' => __( 'Aspect Ratio', 'slider-pro-lite' ),
					'type' => 'number',
					'default_value' => -1,
					'description' => __( 'Sets the aspect ratio of the slides. If set to a value different than -1, the height of the slides will be overridden in order to maintain the specified aspect ratio.', 'slider-pro-lite' )
				),

				'image_scale_mode' => array(
					'js_name' => 'imageScaleMode',
					'label' => __( 'Image Scale Mode', 'slider-pro-lite' ),
					'type' => 'select',
					'default_value' => 'cover',
					'available_values' => array(
						'cover' => __( 'Cover', 'slider-pro-lite' ),
						'contain' => __( 'Contain', 'slider-pro-lite' ),
						'exact' => __( 'Exact', 'slider-pro-lite' ),
						'none' => __( 'None', 'slider-pro-lite' )
					),
					'description' => __( 'Sets the scale mode of the main slide images. <i>Cover</i> will scale and crop the image so that it fills the entire slide. <i>Contain</i> will keep the entire image visible inside the slide. <i>Exact</i> will match the size of the image to the size of the slide. <i>None</i> will leave the image to its original size.', 'slider-pro-lite' )
				),

				'center_image' => array(
					'js_name' => 'centerImage',
					'label' => __( 'Center Image', 'slider-pro-lite' ),
					'type' => 'boolean',
					'default_value' => true,
					'description' => __( 'Indicates if the image will be centered.', 'slider-pro-lite' )
				),

				'start_slide' => array(
					'js_name' => 'startSlide',
					'label' => __( 'Start Slide', 'slider-pro-lite' ),
					'type' => 'number',
					'default_value' => 0,
					'description' => __( 'Sets the slide that will be selected when the slider loads.', 'slider-pro-lite' )
				),

				'slide_distance' => array(
					'js_name' => 'slideDistance',
					'label' => __( 'Slide Distance', 'slider-pro-lite' ),
					'type' => 'number',
					'default_value' => 10,
					'description' => __( 'Sets the distance between the slides.', 'slider-pro-lite' )
				),

				'slide_animation_duration' => array(
					'js_name' => 'slideAnimationDuration',
					'label' => __( 'Slide Animation Duration', 'slider-pro-lite' ),
					'type' => 'number',
					'default_value' => 700,
					'description' => __( 'Sets the duration of the slide animation.', 'slider-pro-lite' )
				),

				'autoplay' => array(
					'js_name' => 'autoplay',
					'label' => __( 'Autoplay', 'slider-pro-lite' ),
					'type' => 'boolean',
					'default_value' => true,
					'description' => __( 'Indicates whether or not autoplay will be enabled.', 'slider-pro-lite' )
				),

				'autoplay_delay' => array(
					'js_name' => 'autoplayDelay',
					'label' => __( 'Autoplay Delay', 'slider-pro-lite' ),
					'type' => 'number',
					'default_value' => 5000,
					'description' => __( 'Sets the delay/interval (in milliseconds) at which the autoplay will run.', 'slider-pro-lite' )
				),

				'autoplay_direction' => array(
					'js_name' => 'autoplayDirection',
					'label' => __( 'Autoplay Direction', 'slider-pro-lite' ),
					'type' => 'select',
					'default_value' => 'normal',
					'available_values' => array(
						'normal' => __( 'Normal', 'slider-pro-lite' ),
						'backwards' => __( 'Backwards', 'slider-pro-lite' )
					),
					'description' => __( 'Indicates whether autoplay will navigate to the next slide or previous slide.', 'slider-pro-lite' )
				),

				'autoplay_on_hover' => array(
					'js_name' => 'autoplayOnHover',
					'label' => __( 'Autoplay On Hover', 'slider-pro-lite' ),
					'type' => 'select',
					'default_value' => 'pause',
					'available_values' => array(
						'pause' => __( 'Pause', 'slider-pro-lite' ),
						'stop' => __( 'Stop', 'slider-pro-lite' ),
						'none' => __( 'None', 'slider-pro-lite' )
					),
					'description' => __( 'Indicates if the autoplay will be paused or stopped when the slider is hovered.', 'slider-pro-lite' )
				),

				'arrows' => array(
					'js_name' => 'arrows',
					'label' => __( 'Arrows', 'slider-pro-lite' ),
					'type' => 'boolean',
					'default_value' => false,
					'description' => __( 'Indicates whether the arrow buttons will be created.', 'slider-pro-lite' )
				),

				'fade_arrows' => array(
					'js_name' => 'fadeArrows',
					'label' => __( 'Fade Arrows', 'slider-pro-lite' ),
					'type' => 'boolean',
					'default_value' => true,
					'description' => __( 'Indicates whether the arrows will fade in only on hover.', 'slider-pro-lite' )
				),

				'buttons' => array(
					'js_name' => 'buttons',
					'label' => __( 'Buttons', 'slider-pro-lite' ),
					'type' => 'boolean',
					'default_value' => true,
					'description' => __( 'Indicates whether the buttons will be created.', 'slider-pro-lite' )
				),

				'keyboard' => array(
					'js_name' => 'keyboard',
					'label' => __( 'Keyboard', 'slider-pro-lite' ),
					'type' => 'boolean',
					'default_value' => true,
					'description' => __( 'Indicates whether keyboard navigation will be enabled.', 'slider-pro-lite' )
				),

				'keyboard_only_on_focus' => array(
					'js_name' => 'keyboardOnlyOnFocus',
					'label' => __( 'Keyboard Only On Focus', 'slider-pro-lite' ),
					'type' => 'boolean',
					'default_value' => false,
					'description' => __( 'Indicates whether the slider will respond to keyboard input only when the slider is in focus.', 'slider-pro-lite' )
				),

				'touch_swipe' => array(
					'js_name' => 'touchSwipe',
					'label' => __( 'Touch Swipe', 'slider-pro-lite' ),
					'type' => 'boolean',
					'default_value' => true,
					'description' => __( 'Indicates whether the touch swipe will be enabled for slides.', 'slider-pro-lite' )
				),

				'touch_swipe_threshold' => array(
					'js_name' => 'touchSwipeThreshold',
					'label' => __( 'Touch Swipe Threshold', 'slider-pro-lite' ),
					'type' => 'number',
					'default_value' => 50,
					'description' => __( 'Sets the minimum amount that the slides should move.', 'slider-pro-lite' )
				),

				'fade_caption' => array(
					'js_name' => 'fadeCaption',
					'label' => __( 'Fade Caption', 'slider-pro-lite' ),
					'type' => 'boolean',
					'default_value' => true,
					'description' => __( 'Indicates whether or not the captions will be faded.', 'slider-pro-lite' )
				),

				'caption_fade_duration' => array(
					'js_name' => 'captionFadeDuration',
					'label' => __( 'Caption Fade Duration', 'slider-pro-lite' ),
					'type' => 'number',
					'default_value' => 500,
					'description' => __( 'Sets the duration of the fade animation.', 'slider-pro-lite' )
				)
			);

			self::$settings = apply_filters( 'sliderpro_default_settings', self::$settings );
		}

		if ( ! is_null( $name ) ) {
			return self::$settings[ $name ];
		}

		return self::$settings;
	}

	/**
	 * Return the setting groups.
	 *
	 * @since 1.0.0
	 * 
	 * @return array The array of setting groups.
	 */
	public static function getSettingGroups() {
		if ( empty( self::$setting_groups ) ) {
			self::$setting_groups = array(
				'appearance' => array(
					'label' => __( 'Appearance', 'slider-pro-lite' ),
					'list' => array(
						'width',
						'height',
						'responsive',
						'aspect_ratio',
						'start_slide',
						'image_scale_mode',
						'center_image',
						'slide_distance'
					)
				),

				'animations' => array(
					'label' => __( 'Animations', 'slider-pro-lite' ),
					'list' => array(
						'slide_animation_duration'
					)
				),
						
				'navigation' => array(
					'label' => __( 'Navigation', 'slider-pro-lite' ),
					'list' => array(
						'autoplay',
						'autoplay_delay',
						'autoplay_direction',
						'autoplay_on_hover',
						'arrows',
						'fade_arrows',
						'buttons',
						'keyboard',
						'keyboard_only_on_focus',
						'touch_swipe',
						'touch_swipe_threshold'
					)
				),
				
				'captions' => array(
					'label' => __( 'Captions', 'slider-pro-lite' ),
					'list' => array(
						'fade_caption',
						'caption_fade_duration'
					)
				)
			);
		}

		return self::$setting_groups;
	}

	/**
	 * Return the default panels state.
	 *
	 * @since 1.0.0
	 * 
	 * @return array The array of panels state.
	 */
	public static function getPanelsState() {
		return self::$panels_state;
	}

	/**
	 * Return the plugin settings.
	 *
	 * @since 1.0.0
	 * 
	 * @return array The array of plugin settings.
	 */
	public static function getPluginSettings() {
		if ( empty( self::$plugin_settings ) ) {
			self::$plugin_settings = array(
				'load_stylesheets' => array(
					'label' => __( 'Load stylesheets', 'slider-pro-lite' ),
					'default_value' => 'automatically',
					'available_values' => array(
						'automatically' => __( 'Automatically', 'slider-pro-lite' ),
						'homepage' => __( 'On homepage', 'slider-pro-lite' ),
						'all' => __( 'On all pages', 'slider-pro-lite' )
					),
					'description' => __( 'The plugin can detect the presence of the slider in a post, page or widget, and will automatically load the necessary stylesheets. However, when the slider is loaded in PHP code, like in the theme\'s header or another template file, you need to manually specify where the stylesheets should load. If you load the slider only on the homepage, select <i>On homepage</i>, or if you load it in the header or another section that is visible on multiple pages, select <i>On all pages</i>.' , 'slider-pro-lite' )
				),
				'cache_expiry_interval' => array(
					'label' => __( 'Cache expiry interval', 'slider-pro-lite' ),
					'default_value' => 24,
					'description' => __( 'Indicates the time interval after which a slider\'s cache will expire. If the cache of a slider has expired, the slider will be rendered again and cached the next time it is viewed.', 'slider-pro-lite' )
				),
				'access' => array(
					'label' => __( 'Access', 'slider-pro-lite' ),
					'default_value' => 'manage_options',
					'available_values' => array(
						'manage_options' => __( 'Administrator', 'slider-pro-lite' ),
						'publish_pages' => __( 'Editor', 'sliderpro '),
						'publish_posts' => __( 'Author', 'slider-pro-lite' ),
						'edit_posts' => __( 'Contributor', 'slider-pro-lite' )
					),
					'description' => __( 'Sets what category of users will have access to the plugin\'s admin area.', 'slider-pro-lite' )
				)
			);
		}

		return self::$plugin_settings;
	}
}