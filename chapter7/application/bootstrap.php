<?php


require 'core/ClassLoader.php';

$loader = new ClassLoader();
$loader->registerDir(diename(__FILE__).'core');
$loader->registerDir(diename(__FILE__).'models');
$loader->register();