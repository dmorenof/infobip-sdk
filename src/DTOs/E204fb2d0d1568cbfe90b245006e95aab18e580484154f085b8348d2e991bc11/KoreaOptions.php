<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\E204fb2d0d1568cbfe90b245006e95aab18e580484154f085b8348d2e991bc11;

/**
 * KoreaOptions
 *
 * Specific parameters required for sending SMS to phone numbers registered in Korea.
 */
final class KoreaOptions extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'title' => [
            'minLength' => 0,
            'maxLength' => 66,
        ],
    ];

    /**
     * Title of the message that will be sent.
     */
    public string $title {
        set {
            $this->assigning('title', $value);
            $this->title = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
