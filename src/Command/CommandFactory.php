<?php

namespace Src\Command;

class CommandFactory
{
    private CommandCache $cache;

    /**
     * @param CommandCache $cache
     */
    public function __construct(CommandCache $cache)
    {
        $this->cache = $cache;
    }

    /**
     * @param string $Action
     * @return Command
     * @throws CommandNotFoundException
     */
    public function getCommand(string $Action): Command
    {
        return $this->cache->get($Action);
    }
}