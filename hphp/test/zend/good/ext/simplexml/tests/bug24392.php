<?php <<__EntryPoint>> function main() {
$s = simplexml_load_file(dirname(__FILE__).'/bug24392.xml');
foreach ($s->item as $item) {
    echo $item->title . "\n";
}
}
