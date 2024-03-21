<?php

namespace Command;

use Src\Command\CommandNotFoundException;
use Tests\Mock\Commands\MockCommand1;
use Tests\Mock\Commands\MockCommand2;
use PHPUnit\Framework\TestCase;
use Src\Command\CommandCache;

class CommandCacheTest extends TestCase
{
    protected function setUp(): void
    {
        CommandCache::getInstance()
            ->set(action: 'mock_command_1', command: MockCommand1::class)
            ->set(action: 'mock_command_2', command: MockCommand2::class);
    }

    public function testSetAndGet()
    {
        $this->assertInstanceOf(
            expected: MockCommand1::class,
            actual: CommandCache::getInstance()->get('mock_command_1')
        );

        $this->assertInstanceOf(
            expected: MockCommand2::class,
            actual: CommandCache::getInstance()->get('mock_command_2')
        );

        $this->expectException(CommandNotFoundException::class);

        CommandCache::getInstance()->get('invalid_command');
    }
}