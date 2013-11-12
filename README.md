PHP_IDN_Punycode
================

PHP Library for encoding and decoding international domain names to and from punycode

Simple example:
```php
echo Punycode::encodeHostname('bücher.ch')."\n";
echo Punycode::decodeHostname('xn--bcher-kva.ch')."\n";
```

