<?php

<<__EntryPoint>> function main() {
$a = 'a';
$b = 'A';
setlocale (LC_COLLATE, 'C');
$result = strcoll($a, $b);
if($result > 0) {
    echo "Pass\n";
}
}
