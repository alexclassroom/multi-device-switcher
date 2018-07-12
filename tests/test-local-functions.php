<?php

class Test_Multi_Device_Switcher_Local_Functions extends WP_UnitTestCase {

	public function setUp() {
		parent::setUp();

		$this->multi_device_switcher = new Multi_Device_Switcher();

		$options = array(
			'pc_switcher' => 1,
			'default_css' => 1,
			'theme_smartphone' => 'Twenty Sixteen',
			'theme_tablet' => 'Twenty Sixteen',
			'theme_mobile' => 'None',
			'theme_game' => 'None',
			'userAgent_smart' => 'iPhone, iPod, Android.*Mobile, dream, CUPCAKE, Windows Phone, IEMobile.*Touch, webOS, BB10.*Mobile, BlackBerry.*Mobile, Mobile.*Gecko',
			'userAgent_tablet' => 'iPad, Kindle, Silk, Android(?!.*Mobile), Windows.*Touch, PlayBook, Tablet.*Gecko',
			'userAgent_mobile' => 'DoCoMo, SoftBank, J-PHONE, Vodafone, KDDI, UP.Browser, WILLCOM, emobile, DDIPOCKET, Windows CE, BlackBerry, Symbian, PalmOS, Huawei, IAC, Nokia',
			'userAgent_game' => 'PlayStation Portable, PlayStation Vita, PSP, PS2, PLAYSTATION 3, PlayStation 4, Nitro, Nintendo 3DS, Nintendo Wii, Nintendo WiiU, Xbox',
			'disable_path' => '',
			'enable_regex' => 0,
			'custom_switcher_theme_test' => 'Twenty Sixteen',
			'custom_switcher_userAgent_test' => 'test1,test2',
		);

		update_option( 'multi_device_switcher_options', $options );
	}

	function tearDown() {
		parent::tearDown();
	}

	/**
	 * @test
	 * @group local_functions
	 */
	function local_multi_device_switcher_add_pc_switcher() {
		$this->assertTrue( function_exists( 'multi_device_switcher_add_pc_switcher' ) );
	}

	/**
	 * @test
	 * @group local_functions
	 */
	function local_is_multi_device() {
		$this->assertTrue( function_exists( 'is_multi_device' ) );
	}

	/**
	 * @test
	 * @group local_functions
	 */
	function local_is_pc_switcher() {
		$this->assertTrue( function_exists( 'is_pc_switcher' ) );
	}

	/**
	 * @test
	 * @group local_functions
	 */
	function local_is_disable_switcher() {
		$this->assertTrue( function_exists( 'is_disable_switcher' ) );
	}

}