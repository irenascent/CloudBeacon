<?php
/**
 * Tests for CloudBeacon
 */

use PHPUnit\Framework\TestCase;
use Cloudbeacon\Cloudbeacon;

class CloudbeaconTest extends TestCase {
    private Cloudbeacon $instance;

    protected function setUp(): void {
        $this->instance = new Cloudbeacon(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Cloudbeacon::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
