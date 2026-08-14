<?php
/**
 * Tests for SolarField
 */

use PHPUnit\Framework\TestCase;
use Solarfield\Solarfield;

class SolarfieldTest extends TestCase {
    private Solarfield $instance;

    protected function setUp(): void {
        $this->instance = new Solarfield(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Solarfield::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
