# About
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
