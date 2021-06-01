<?php

require_once __DIR__ . '/../vendor/autoload.php';

$loader = new Twig\Loader\FilesystemLoader(__DIR__ . '/../src/View');
$twig = new Twig\Environment($loader, ['debug' => true]);
$twig->addExtension(new Twig\Extension\DebugExtension());
//On ajoute la globale author à l'initialisation de l'objet Twig
$contactEmail = 'Oscar_Wilder@wildCodeSchool.fr';
$twig->addGlobal('contactEmail', $contactEmail);
