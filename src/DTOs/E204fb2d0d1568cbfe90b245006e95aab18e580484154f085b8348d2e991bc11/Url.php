<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * Url
 *
 * Url information.
 */
final class Url extends \Dmorenof\SdkRuntime\DTO
{
    protected const array WRITE_ONLY_FIELDS = [
    'type',
    'url',
];

    /**
     * Type of a url. Can be HOME, WORK.
     */
    public string $type;
    /**
     * Url of a contact.
     */
    public string $url;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
