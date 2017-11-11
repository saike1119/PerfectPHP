<?php
define('BOOK', 'Perfect PHP');
echo BOOK, PHP_EOL;

const BOOKS = 'Perfect PHP!!';
echo BOOKS, PHP_EOL;

$value = 'BOOK';
echo constant($value);

var_dump(get_defined_constants());