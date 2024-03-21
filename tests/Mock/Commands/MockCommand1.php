<?php

namespace Tests\Mock\Commands;

use Src\Command\Command;
use Src\Command\CommandContext;

class MockCommand1 extends Command
{
    public function execute(CommandContext $context): CommandContext
    {
        return $context;
    }
}