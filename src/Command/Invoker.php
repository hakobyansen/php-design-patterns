<?php

namespace Src\Command;

/**
 * Gets and invokes a specified command.
 */
class Invoker
{
    /**s
     * @param string $action
     * @param array|null $params
     * @return mixed
     * @throws CommandNotFoundException
     */
	public function process(string $action, ?array $params = null): CommandContext
	{
		$factory = new CommandFactory(CommandCache::getInstance());
		$command = $factory->getCommand($action);

        $context = new CommandContext();

        if($params) {
            $context->setParams($params);
        }

		return $command->execute($context);
	}
}
