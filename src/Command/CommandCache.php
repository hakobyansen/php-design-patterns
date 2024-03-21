<?php

namespace Src\Command;

class CommandCache
{
    private static array $cache = [];

    private static CommandCache $instance;

    private function __construct()
    {
    }

    public static function getInstance(): CommandCache
    {
        if(empty(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function set(string $action, string $command): self
    {
        self::$cache[$action] = $command;

        return self::getInstance();
    }

    /**
     * @throws CommandNotFoundException
     */
    public function get(string $action): Command
    {
        if(!isset(self::$cache[$action]))
        {
            throw new CommandNotFoundException("No command found for action '{$action}' in the cache.");
        }

        return new self::$cache[$action];
    }
}