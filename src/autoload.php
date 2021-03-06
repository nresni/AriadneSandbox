<?php

$vendorDir = __DIR__.'/vendor';

require_once $vendorDir.'/symfony/src/Symfony/Component/HttpFoundation/UniversalClassLoader.php';

use Symfony\Component\HttpFoundation\UniversalClassLoader;

$loader = new UniversalClassLoader();
$loader->registerNamespaces(array(
    'Symfony'                        => $vendorDir.'/symfony/src',
    'Application'                    => __DIR__,
    'Bundle'                         => __DIR__,
    'Doctrine\\Common\\DataFixtures' => $vendorDir.'/doctrine-data-fixtures/lib',
    'Doctrine\\Common'               => $vendorDir.'/doctrine-common/lib',
    'Doctrine\\DBAL\\Migrations'     => $vendorDir.'/doctrine-migrations/lib',
    'Doctrine\\MongoDB'              => $vendorDir.'/doctrine-mongodb/lib',
    'Doctrine\\ODM\\MongoDB'         => $vendorDir.'/doctrine-mongodb-odm/lib',
    'Doctrine\\DBAL'                 => $vendorDir.'/doctrine-dbal/lib',
    'Doctrine'                       => $vendorDir.'/doctrine/lib',
    'Ariadne'                        => $vendorDir.'/ariadne/lib',
    'Ariadne\\Tests'                 => $vendorDir.'/ariadne/tests',
    'Everzet\\Behat'                 => $vendorDir . '/behat/src',
	'Everzet\\Gherkin'               => $vendorDir . '/behat/src',
    'Zend'                           => $vendorDir.'/zend/library',
));
$loader->registerPrefixes(array(
    'Swift_'           => $vendorDir.'/swiftmailer/lib/classes',
    'Twig_Extensions_' => $vendorDir.'/twig-extensions/lib',
    'Twig_'            => $vendorDir.'/twig/lib',
));
$loader->register();
