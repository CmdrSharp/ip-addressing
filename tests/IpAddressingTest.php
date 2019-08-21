<?php

use CmdrSharp\IpAddressing\IPv4;

// Exceptions
use CmdrSharp\IpAddressing\Exceptions\InvalidIpException;

class IpAddressingTest extends PHPUnit\Framework\TestCase
{
    use IPv4;

    /**
     * Setup the test environment.
     */
    public function setUp(): void
    {
        parent::setUp();
    }

    /** @test */
    public function can_get_network_from_ip()
    {
        $result = $this->getNetworkFromIp('192.168.0.55', '255.255.255.0');

        $this->assertEquals('192.168.0.0', $result);
    }

    /** @test */
    public function can_get_broadcast_from_ip()
    {
        $result = $this->getBroadcastFromIp('192.168.0.55', '255.255.255.0');

        $this->assertEquals('192.168.0.255', $result);
    }

    /** @test */
    public function exception_thrown_if_not_ip()
    {
        $this->expectException(InvalidIpException::class);
        $this->getNetworkFromIp('abcdefg', '255.255.255.0');
    }
}
