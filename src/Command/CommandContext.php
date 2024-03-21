<?php

namespace Src\Command;

class CommandContext
{
    private array $params = [];

    private ?string $error = null;

    public function getParams(): array
    {
        return $this->params;
    }

    public function setParams(array $params): void
    {
        $this->params = $params;
    }

    public function getParam(string $key): ?string
    {
        return $this->params[$key] ?? null;
    }

    public function addParam(string $key, string $value): void
    {
        $this->params[$key] = $value;
    }

    public function getError(): ?string
    {
        return $this->error;
    }

    public function setError(string $error): void
    {
        $this->error = $error;
    }
}