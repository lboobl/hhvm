<?php <<__EntryPoint>> function main() {
ini_set("intl.error_level", E_WARNING);
$str = "a U+4E07";

$t = Transliterator::create("hex-any");
echo $t->id, ": ", $t->transliterate($str), "\n";

$u = clone $t;
echo $u->id, ": ", $u->transliterate($str), "\n";

echo "Done.\n";
}
