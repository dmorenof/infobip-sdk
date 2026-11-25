<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2;

/**
 * ColumnInfo
 *
 * Information about columns returned in response.
 */
final class ColumnInfo extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'columnDataType',
    'columnName',
];

    public \InfobipSDK\Enums\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\ColumnDataType $columnDataType;
    /**
     * Name of the column.
     */
    public string $columnName;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'columnDataType' => is_string($value) ? $this->columnDataType = \InfobipSDK\Enums\N99c561addf74bb07fd67942658f68818323ce564cc5eef645d487517ca1425f2\ColumnDataType::from($value) : parent::assignMember($name, $value),
            'columnName' => is_string($value) ? $this->columnName = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
