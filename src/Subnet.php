<?php

namespace CmdrSharp\IpAddressing;

use CmdrSharp\IpAddressing\Exceptions\InvalidIpException;
use CmdrSharp\IpAddressing\Helpers\Validation;

trait Subnet
{
    /**
     * @param string $netmask
     * @return string
     * @throws InvalidIpException
     */
    public function getCidrFromNetmask(string $netmask): string
    {
        Validation::validateIp($netmask);

        if ($netmask[0] === '0') {
            return 0;
        }

        return 32 - log((ip2long($netmask) ^ ip2long('255.255.255.255')) + 1, 2);
    }
}
