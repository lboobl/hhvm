<?php <<__EntryPoint>> function main() {
$a = new SplDoublyLinkedList();
$a->push(1);
$a->push(2);
$a->push(3);

$a->rewind();
while ($a->valid()) {
    var_dump($a->current(), $a->next());
}
echo "===DONE===\n";
}
