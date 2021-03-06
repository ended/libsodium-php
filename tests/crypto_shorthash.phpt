--TEST--
Check for libsodium shorthash
--SKIPIF--
<?php if (!extension_loaded("libsodium")) print "skip"; ?>
--FILE--
<?php
$m1 = 'message';
$k1 = '0123456789ABCDEF';
$h1 = Sodium::crypto_shorthash($m1, $k1);
echo bin2hex($h1) . "\n";
$k2 = '0123456789abcdef';
$h2 = Sodium::crypto_shorthash($m1, $k2);
echo bin2hex($h2) . "\n";
$m2 = 'msg';
$h3 = Sodium::crypto_shorthash($m2, $k2);
echo bin2hex($h3) . "\n";
?>
--EXPECT--
e0ad6fdbf8b9a191
c667b37af201a2d9
d27fa3fc70b45b72
