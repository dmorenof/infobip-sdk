<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N322179e48f777ec7fa4be8d16ebc634ba865098b0ae9d513535e196958077f6c;

/**
 * UploadResponse
 */
final class UploadResponse extends \Dmorenof\SdkRuntime\DTO
{
    /**
     * Id of the uploaded audio file.
     */
    public string $fileId;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fileId' => is_string($value) ? $this->fileId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
