<?php

namespace Tests\Command;

use PHPUnit\Framework\TestCase;
use Src\Command\CommandCache;
use Src\Command\CommandNotFoundException;
use Src\Command\Invoker;
use Tests\Mock\Commands\MockCommand3;

class InvokerTest extends TestCase
{
    /**
     * @throws CommandNotFoundException
     */
    public function testProcess(): void
    {
        CommandCache::getInstance()->set(
            action: 'mock_command_3',
            command: MockCommand3::class
        );

        $invoker = new Invoker();

        $context = $invoker->process('mock_command_3');

        $this->assertEquals(
            expected: 'test_result',
            actual: $context->getParam('result')
        );
    }
}