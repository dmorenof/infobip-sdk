<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\A389f65d9a8b852c007cdb5a24c983f5c2dc5fa67bb655d3284926dc5c3ce095;

/**
 * DefinitionsResponseBody
 */
final class DefinitionsResponseBody extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'definitionIdList',
    ];

    protected const array READ_ONLY_FIELDS = [
        'definitionIdList',
    ];

    /**
     * Available `definitionId`s.
     */
    public \InfobipSDK\Collections\StringCollection $definitionIdList;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'definitionIdList' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->definitionIdList = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
