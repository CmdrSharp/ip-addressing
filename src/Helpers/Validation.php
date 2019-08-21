<?php

namespace CmdrSharp\IpAddressing\Helpers;

use CmdrSharp\IpAddressing\Exceptions\InvalidCidrException;
use CmdrSharp\IpAddressing\Exceptions\InvalidIpException;

class Validation
{
    /**
     * @param string $ip
     * @return bool
     * @throws InvalidIpException
     */
    public static function validateIp(string $ip): bool
    {
        if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
            throw new InvalidIpException($ip . ' is not a valid IPv4-address');
        }

        return true;
    }

    /**
     * @param int $cidr
     * @return bool
     * @throws InvalidCidrException
     */
    public static function validateCidr(int $cidr): bool
    {
        if ($cidr < 0 || $cidr > 32) {
            throw new InvalidCidrException($cidr . ' is not a valid CIDR Notation');
        }

        return true;
    }
}
