<?php

unset($REX);
$REX['REDAXO'] = true;
$REX['HTDOCS_PATH'] = './';
$REX['BACKEND_FOLDER'] = 'redaxo';

$application = require __DIR__.'/redaxo/src/core/console.php';
return $application;
