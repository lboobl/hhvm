<?php <<__EntryPoint>> function main() {
$bin = random_bytes(random_int(1, 1000));
$hex = sodium_bin2hex($bin);
$phphex = bin2hex($bin);
var_dump(strcasecmp($hex, $phphex));

$bin2 = sodium_hex2bin($hex);
var_dump($bin2 === $bin);

$bin2 = sodium_hex2bin('[' . $hex .']', '[]');
var_dump($bin2 === $bin);
}
