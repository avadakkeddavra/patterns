<?php
require_once __DIR__.'/loader.php';
require_once __DIR__.'/functions.php';

$loader = new Loader();

spl_autoload_register([$loader, 'loadClass']);

\core\Routing::execute();
