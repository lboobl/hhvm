<?php
<<__EntryPoint>> function main() {
var_dump(finfo_open(FILEINFO_MIME, "\0"));
var_dump(finfo_open(FILEINFO_MIME, ''));
var_dump(finfo_open(FILEINFO_MIME, '123'));
var_dump(finfo_open(FILEINFO_MIME, '1.0'));
var_dump(finfo_open(FILEINFO_MIME, '/foo/bar/inexistent'));
}
