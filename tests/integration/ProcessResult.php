<?php

namespace CaptainHook\App\Integration;

class ProcessResult
{
    /** @var string */
    private $stdout;

    /** @var string */
    private $stderr;

    /** @var int */
    private $exitCode;

    public function __construct(int $exitCode, string $stdout, string $stderr)
    {
        $this->exitCode = $exitCode;
        $this->stdout = $stdout;
        $this->stderr = $stderr;
    }

    public function getExitCode(): int
    {
        return $this->exitCode;
    }

    public function getStdout(): string
    {
        return $this->stdout;
    }

    public function getStderr(): string
    {
        return $this->stderr;
    }
}
