<?php

require_once 'includes/functions.php';

$twig = getTwigInstance();

$template = $twig->load('index.twig');

$tpl_data = [
  'title' => 'Hello World',
];

echo $template->render($tpl_data);
