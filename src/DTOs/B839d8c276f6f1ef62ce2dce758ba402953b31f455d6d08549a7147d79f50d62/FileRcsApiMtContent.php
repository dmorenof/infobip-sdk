<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62;

/**
 * FileRcsApiMtContent
 */
final class FileRcsApiMtContent extends \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\FreeFormRcsApiMtContent
{
    public const array REQUIRED_FIELDS = [];

    protected const string ADDITIONAL_PROPERTIES_TYPE = 'mixed';
    protected const bool ADDITIONAL_PROPERTIES_NULLABLE = false;

    public \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\Resource $file;
    public \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\Resource $thumbnail;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'file' => $value instanceof \stdClass ? $this->file = new \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\Resource($value) : parent::assignMember($name, $value),
            'thumbnail' => $value instanceof \stdClass ? $this->thumbnail = new \InfobipSDK\DTOs\B839d8c276f6f1ef62ce2dce758ba402953b31f455d6d08549a7147d79f50d62\Resource($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
