<?php

namespace my127\Workspace\Types\Command;

use my127\Workspace\Definition\Definition as WorkspaceDefinition;

class Definition implements WorkspaceDefinition
{
    const TYPE = 'command';

    /** @var string */
    private $usage;

    /** @var string */
    private $section;

    /** @var string[] */
    private $env;

    /** @var string */
    private $exec;

    /** @var string */
    private $path;

    /** @var int */
    private $scope;

    public function getUsage(): string
    {
        return $this->usage;
    }

    public function getSection(): string
    {
        return $this->section;
    }

    public function getEnvironmentVariables(): array
    {
        return $this->env;
    }

    public function getExec(): string
    {
        return $this->exec;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function getScope(): int
    {
        return $this->scope;
    }

    public function getType(): string
    {
        return self::TYPE;
    }
}
