<?php
include dirname(__DIR__) . '/services/Autoload.php';
spl_autoload_register([new Autoload(), 'loadClass']);

$db = new DB();
$db->calcRows();

$good = new Good($db);
$good->calcRows();

var_dump($good->getAll());
var_dump($good->getOne(12));

$good2 = new User($db);
var_dump($good2->getAll());
var_dump($good2->getOne(12));