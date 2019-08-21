<?php

namespace CmdrSharp\IpAddressing;

use CmdrSharp\IpAddressing\Exceptions\InvalidIpException;

trait IPv4
{
    /**
     * @param string $ip
     * @param string $netmask
     * @return string
     * @throws InvalidIpException
     */
    public function getNetworkFromIp(string $ip, string $netmask): string
    {
        $this->validateIp($ip) & $this->validateIp($netmask);

        return long2ip(ip2long($ip) & ip2long($netmask));
    }

    /**
     * @param string $ip
     * @param string $netmask
     * @return string
     * @throws InvalidIpException
     */
    public function getBroadcastFromIp(string $ip, string $netmask): string
    {
        $this->validateIp($ip) & $this->validateIp($netmask);

        return long2ip(ip2long($ip) | (~ip2long($netmask)));
    }

    /**
     * @param string $ip
     * @return bool
     * @throws InvalidIpException
     */
    private function validateIp(string $ip): bool
    {
        if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
            throw new InvalidIpException($ip . ' is not a valid IPv4-address');
        }

        return true;
    }
}
