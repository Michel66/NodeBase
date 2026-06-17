<?php
/**
 * Tests for NodeBase
 */

use PHPUnit\Framework\TestCase;
use Nodebase\Nodebase;

class NodebaseTest extends TestCase {
    private Nodebase $instance;

    protected function setUp(): void {
        $this->instance = new Nodebase(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Nodebase::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
