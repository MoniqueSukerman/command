<?php

require_once "vendor/autoload.php";

use Command\ControleRemoto;
use Command\DesligarLuzCommand;
use Command\LigarLuzCommand;

$controleRemoto = new ControleRemoto();
$ligarLuzCommand = new LigarLuzCommand();
$desligarLuzCommand = new DesligarLuzCommand();

$controleRemoto->executeCommand($ligarLuzCommand);
$controleRemoto->executeCommand($desligarLuzCommand);