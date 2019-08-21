<?php

use CmdrSharp\IpAddressing\Subnet;

// Exceptions
use CmdrSharp\IpAddressing\Exceptions\InvalidIpException;
use CmdrSharp\IpAddressing\Exceptions\InvalidCidrException;

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
    public function can_get_netmask_from_cidr()
    {
        $result = $this->getNetmaskFromCidr(24);

        $this->assertEquals('255.255.255.0', $result);
    }

    /** @test */
    public function exception_thrown_if_not_ip()
    {
        $this->expectException(InvalidIpException::class);
        $this->getCidrFromNetmask('abcdefg');
    }

    /** @test */
    public function exception_thrown_if_not_cidr()
    {
        $this->expectException(InvalidCidrException::class);
        $this->getNetmaskFromCidr(55);
    }
}
