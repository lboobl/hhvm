<?php

class Test implements ArrayAccess
{
        public function __construct() { }
        public function offsetExists( $offset ) { return false; }
        public function offsetGet( $offset ) { return $offset; }
        public function offsetSet( $offset, $data ) { }
        public function offsetUnset( $offset ) { }
}
<<__EntryPoint>> function main() {
$post = new Test;
$id = 'page';
echo $post[$id.'_show'];
echo "\n";

echo "===DONE===\n";
}
