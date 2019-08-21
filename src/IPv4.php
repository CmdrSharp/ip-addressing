<?php

namespace CmdrSharp\IpAddressing;

use CmdrSharp\IpAddressing\Helpers\Validation;

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
        Validation::validateIp($ip) & Validation::validateIp($netmask);

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
        Validation::validateIp($ip) & Validation::validateIp($netmask);

        return long2ip(ip2long($ip) | (~ip2long($netmask)));
    }
}
