<?php namespace Tutor\Tests\Unit;

use PHPUnit\Framework\TestCase;

class UtilTest extends TestCase {
	
	public function test_check_is_assoc_helper() {
		$this->assertTrue( tutor_utils()->is_assoc( array( 'a' => 33 ) ) );
		$this->assertFalse( tutor_utils()->is_assoc( array( 2, 3, 4 ) ) );
	}
}
