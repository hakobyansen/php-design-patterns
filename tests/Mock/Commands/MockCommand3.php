<?php

namespace Tests\Mock\Commands;

use Src\Command\Command;
use Src\Command\CommandContext;

class MockCommand3 extends Command
{
    public function execute(CommandContext $context): CommandContext
    {
        $context->addParam(
            key: 'result',
            value: 'test_result'
        );

        return $context;
    }
}