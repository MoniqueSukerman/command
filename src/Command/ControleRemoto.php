<?php

namespace Command;

/**
 * Invoker
 */
class ControleRemoto
{
    public function executeCommand(CommandInterface $command) {
        $command->execute();
    }
}