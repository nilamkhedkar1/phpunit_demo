<?php
require_once __DIR__.'/bootstrap.php.cache';
require __DIR__.'/autoload.php';
require_once __DIR__.'/AppKernel.php';

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Input\ArrayInput;
use Doctrine\Bundle\DoctrineBundle\Command\Proxy\CreateSchemaDoctrineCommand;
use Doctrine\Bundle\DoctrineBundle\Command\DropDatabaseDoctrineCommand;
use Doctrine\Bundle\DoctrineBundle\Command\CreateDatabaseDoctrineCommand;

$kernel = new AppKernel('test', false);
//print_r($kernel);exit;
$kernel->boot();
$application = new Application($kernel);

// add the database:drop command to the application and run it
$command = new DropDatabaseDoctrineCommand();
$application->add($command);
$input = new ArrayInput(array(
    'command' => 'doctrine:database:drop --env=test',
    '--force' => true,
));

$command->run($input, new ConsoleOutput());
$kernel = new AppKernel('test', false);
$kernel->boot();
$application = new Application($kernel);

// add the database:create command to the application and run it
$command = new CreateDatabaseDoctrineCommand();
$application->add($command);
$input = new ArrayInput(array(
    'command' => 'doctrine:database:create --env=test',
));

$command->run($input, new ConsoleOutput());
$kernel = new AppKernel('test', false);
$kernel->boot();
$application = new Application($kernel);

// let Doctrine create the database schema (i.e. the tables)
$command = new CreateSchemaDoctrineCommand();
$application->add($command);
$input = new ArrayInput(array(
    'command' => 'doctrine:schema:create --env=test',
));

$command->run($input, new ConsoleOutput());
Symfony\Bundle\FrameworkBundle\Test\KernelTestCase::bootKernel();