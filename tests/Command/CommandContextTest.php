<?php

namespace Tests\Command;

use PHPUnit\Framework\TestCase;
use Src\Command\CommandContext;

class CommandContextTest extends TestCase
{
    public function testParams()
    {
        $context = new CommandContext();

        $context->addParam('param1', 'value1');
        $context->addParam('param2', 'value2');

        $this->assertEquals(
            expected: 'value1',
            actual: $context->getParam('param1')
        );

        $this->assertEquals(
            expected: 'value2',
            actual: $context->getParam('param2')
        );

        $params = [
            'param' => 'value'
        ];

        $context->setParams($params);

        $this->assertEquals(
            expected: $params,
            actual: $context->getParams()
        );
    }

    public function testError()
    {
        $context = new CommandContext();

        $this->assertNull($context->getError());

        $msg = 'Something wrong happened';
        $context->setError($msg);

        $this->assertEquals(
            expected: $msg,
            actual: $context->getError()
        );
    }
}