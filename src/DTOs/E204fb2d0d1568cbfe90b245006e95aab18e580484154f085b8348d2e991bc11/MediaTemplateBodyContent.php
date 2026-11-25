<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * MediaTemplateBodyContent
 *
 * Media template body
 */
final class MediaTemplateBodyContent extends \Dmorenof\SdkRuntime\DTO
{
    protected const array WRITE_ONLY_FIELDS = [
        'placeholders',
    ];

    /**
     * Media template body placeholders. The value must not be null, but can be an empty array. Values within the array must not be null or empty.
     */
    public \InfobipSDK\Collections\StringCollection $placeholders;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'placeholders' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->placeholders = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
