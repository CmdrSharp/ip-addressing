<?php

namespace CmdrSharp\IpAddressing\Helpers;

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
}
