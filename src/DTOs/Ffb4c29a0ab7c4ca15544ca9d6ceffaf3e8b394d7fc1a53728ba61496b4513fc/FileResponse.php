<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Ffb4c29a0ab7c4ca15544ca9d6ceffaf3e8b394d7fc1a53728ba61496b4513fc;

/**
 * FileResponse
 */
final class FileResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Creation time of the file in UTC timezone. Has the following format: `yyyy-MM-dd'T'HH:mm:ss.SSS+ZZZZ`.
     * Format: date-time
     */
    public string $creationTime;
    public \InfobipSDK\Enums\N7916e19109f991cfe966f390ef0d36117967291fa90eff57d8c8cb768f38352e\FileFormat $fileFormat;
    /**
     * Unique id of the file.
     * Example: "5f4e8861-8ed7-4521-b8c8-f26346726716"
     */
    public string $id;
    /**
     * Name of the file.
     * Example: "5f4e8861-8ed7-4521-b8c8-f26346726716_alice_1680266280000.png"
     */
    public string $name;
    /**
     * Size in bytes of the file.
     * Example: 10780
     * Format: int64
     */
    public int $size;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'creationTime' => is_string($value) ? $this->creationTime = $value : parent::assignMember($name, $value),
            'fileFormat' => is_string($value) ? $this->fileFormat = \InfobipSDK\Enums\N7916e19109f991cfe966f390ef0d36117967291fa90eff57d8c8cb768f38352e\FileFormat::from($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            'size' => is_int($value) ? $this->size = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
