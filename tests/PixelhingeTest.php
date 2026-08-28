<?php
/**
 * Tests for PixelHinge
 */

use PHPUnit\Framework\TestCase;
use Pixelhinge\Pixelhinge;

class PixelhingeTest extends TestCase {
    private Pixelhinge $instance;

    protected function setUp(): void {
        $this->instance = new Pixelhinge(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Pixelhinge::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
