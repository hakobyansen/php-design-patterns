<?php

namespace Src\Command;

abstract class Command
{
    /**
     * @param CommandContext $context
     * @return bool
     */
    abstract public function execute(CommandContext $context): mixed;
}