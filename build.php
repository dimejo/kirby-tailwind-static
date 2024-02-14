<?php

require __DIR__ . '/kirby/bootstrap.php';
require __DIR__ . '/site/plugins/static-site-generator/index.php';

$kirby = kirby();
$site = $kirby->site();

$staticSiteGenerator = new D4L\StaticSiteGenerator($kirby, $pathsToCopy = null, $pages = null);
$fileList = $staticSiteGenerator->generate($outputFolder = './static', $baseUrl = '/static', $preserve = []);
