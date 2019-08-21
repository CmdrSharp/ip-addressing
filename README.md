# About
[![Latest Stable Version](https://poser.pugx.org/cmdrsharp/ip-addressing/v/stable)](https://packagist.org/packages/cmdrsharp/ip-addressing)
[![Build Status](https://travis-ci.org/CmdrSharp/ip-addressing.svg?branch=master)](https://travis-ci.org/CmdrSharp/ip-addressing)
[![StyleCI](https://github.styleci.io/repos/203584133/shield?branch=master)](https://github.styleci.io/repos/203584133)
[![MIT licensed](https://img.shields.io/badge/license-MIT-blue.svg)](./LICENSE)

A trait for general IP operations. New traits may be added over time.

# Current Requirements
* PHP 7.1 or newer

# Installation
Via composer
```bash
$ composer require cmdrsharp/ip-addressing
```

# Usage
Use the applicable Trait in your classes.
```php
use CmdrSharp\IpAddressing\IPv4;

class RandomClass
{
	use IPv4;

	protected function randomFunction()
	{
		$result = $this->getNetworkFromIp('192.168.0.55', '255.255.255.0');
		// 192.168.0.0
	}
}
```

## Example: Get the Broadcast Address from an IP and Netmask.
```php
$this->getBroadcastFromIp('192.168.0.55', '255.255.255.0');
// 192.168.0.255
```

# Versioning
This package follows [Explicit Versioning](https://github.com/exadra37-versioning/explicit-versioning).

# Authors
[CmdrSharp](https://github.com/CmdrSharp)

# License
[The MIT License (MIT)](LICENSE)
