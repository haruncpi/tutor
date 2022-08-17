<?php namespace Tutor\Tests\Unit;

use PHPUnit\Framework\TestCase;

class UtilTest extends TestCase {

	public function test_check_array_is_assoc() {
		$this->assertTrue( tutor_utils()->is_assoc( array( 'a' => 33 ) ) );
		$this->assertFalse( tutor_utils()->is_assoc( array( 2, 3, 4 ) ) );
	}

	public function test_get_user_name() {
		$username           = 'admin';
		$user               = new \WP_User();
		$user->user_login   = $username;
		$user->display_name = $username;

		// If someone not set first and last name
		$this->assertEquals( 'admin', tutor_utils()->get_user_name( $user ) );

		// If someone only set first name
		$user->first_name = 'Jhon';
		$this->assertEquals( 'Jhon', tutor_utils()->get_user_name( $user ) );

		// If someone set first and last name both
		$user->last_name = 'Kou';
		$this->assertEquals( 'Jhon Kou', tutor_utils()->get_user_name( $user ) );

		// If someone only set last name
		unset( $user->first_name );
		$this->assertEquals( $username, tutor_utils()->get_user_name( $user ) );

	}

	public function test_tutor_option_test(){
		$key = 'minimum_days_for_balance_to_be_available';
		$value = tutor_utils()->get_option( $key );
		$default = '7';
		$this->assertEquals( $default, $value );
	}
}
