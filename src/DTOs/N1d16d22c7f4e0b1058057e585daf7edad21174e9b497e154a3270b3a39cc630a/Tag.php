<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N1d16d22c7f4e0b1058057e585daf7edad21174e9b497e154a3270b3a39cc630a;

/**
 * Tag
 *
 * Recently removed tag data.
 */
final class Tag extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'id',
];

    /**
     * Tag ID. UUID v4.
     * Example: "93edc97d-80a0-454a-bcaf-9a645194c335"
     */
    public string $id;
    /**
     * Tag name.
     * Example: "Tag Name 1"
     */
    public string $name;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'id' => is_string($value) ? $this->id = $value : parent::assignMember($name, $value),
            'name' => is_string($value) ? $this->name = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
