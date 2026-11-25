<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14;

/**
 * File
 *
 * Recording file.
 */
final class File extends \Dmorenof\SdkRuntime\DTO
{
    public \InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\FileFormat $fileFormat;
    /**
     * Id of the file.
     */
    public string $id;
    /**
     * Name of the file.
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'fileFormat' => is_string($value) ? $this->fileFormat = \InfobipSDK\Enums\N2188fec7c48e989bb7053521bdef9d76d71def96483c5304f01cd7e0878f8f14\FileFormat::from($value) : parent::assignMember($name, $value),
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
