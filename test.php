<?php

require_once('./BookGluttonEpub.php');
require_once('./BookGluttonZipEpub.php');

$file = './H. G. Wells - The War of the Worlds.epub';

echo "Opening $file as OPS in temp dir:\n";

$epub = new BookGluttonEpub();
$epub->open($file);
print_r($epub->getMetaPairs());

echo "Now opening $file as virtual zip (no filesystem on disk):\n";

$epub = new BookGluttonZipEpub();
$epub->loadZip($file);
print_r($epub->getMetaPairs());



?>