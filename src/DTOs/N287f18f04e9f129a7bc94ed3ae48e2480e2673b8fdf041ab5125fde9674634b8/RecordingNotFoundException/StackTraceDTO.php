<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\RecordingNotFoundException;

final class StackTraceDTO extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'lineNumber' => [
            'format' => 'int32',
        ],
    ];

    public string $classLoaderName;
    public string $className;
    public string $fileName;
    /**
     * Format: int32
     */
    public int $lineNumber {
        set {
            $this->assigning('lineNumber', $value);
            $this->lineNumber = $value;
        }
    }
    public string $methodName;
    public string $moduleName;
    public string $moduleVersion;
    public bool $nativeMethod;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'classLoaderName' => is_string($value) ? $this->classLoaderName = $value : parent::assignMember($name, $value),
            'className' => is_string($value) ? $this->className = $value : parent::assignMember($name, $value),
            'fileName' => is_string($value) ? $this->fileName = $value : parent::assignMember($name, $value),
            'lineNumber' => is_int($value) ? $this->lineNumber = $value : parent::assignMember($name, $value),
            'methodName' => is_string($value) ? $this->methodName = $value : parent::assignMember($name, $value),
            'moduleName' => is_string($value) ? $this->moduleName = $value : parent::assignMember($name, $value),
            'moduleVersion' => is_string($value) ? $this->moduleVersion = $value : parent::assignMember($name, $value),
            'nativeMethod' => is_bool($value) ? $this->nativeMethod = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
