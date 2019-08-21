<?php

use CmdrSharp\IpAddressing\Subnet;

// Exceptions
use CmdrSharp\IpAddressing\Exceptions\InvalidIpException;

class SubnettingTest extends PHPUnit\Framework\TestCase
{
    use Subnet;

    /**
     * Setup the test environment.
     */
    public function setUp(): void
    {
        parent::setUp();
    }

    /** @test */
    public function can_get_cidr_from_netmask()
    {
        $result = $this->getCidrFromNetmask('255.255.255.0');

        $this->assertEquals('24', $result);
    }

    /** @test */
    public function exception_thrown_if_not_ip()
    {
        $this->expectException(InvalidIpException::class);
        $this->getCidrFromNetmask('abcdefg');
    }
}
