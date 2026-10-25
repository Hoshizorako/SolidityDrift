<?php
/**
 * Tests for SolidityDrift
 */

use PHPUnit\Framework\TestCase;
use Soliditydrift\Soliditydrift;

class SoliditydriftTest extends TestCase {
    private Soliditydrift $instance;

    protected function setUp(): void {
        $this->instance = new Soliditydrift(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Soliditydrift::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
