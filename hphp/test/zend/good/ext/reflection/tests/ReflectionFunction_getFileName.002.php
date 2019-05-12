<?php

/**
 * my doc comment
 */
function foo () {
    $d = 5;
}

/***
 * not a doc comment
 */
function bar () {}


function dumpFuncInfo($name) {
    $funcInfo = new ReflectionFunction($name);
    var_dump($funcInfo->getFileName());
}
<<__EntryPoint>> function main() {
dumpFuncInfo('foo');
dumpFuncInfo('bar');
dumpFuncInfo('array_pop');
}
