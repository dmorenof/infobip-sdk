<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53932f53b54839fd583eae39fe878805e79c364296f164379eb97a5f2c4b6c59;

/**
 * AltUri
 *
 * Optional alternative URI used on desktop clients.
 */
final class AltUri extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'desktop' => [
            'minLength' => 0,
            'maxLength' => 1000,
        ],
    ];

    /**
     * URI opened on desktop clients.
     * Example: "https://example.com/desktop"
     */
    public string $desktop {
        set {
            $this->assigning('desktop', $value);
            $this->desktop = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'desktop' => is_string($value) ? $this->desktop = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
