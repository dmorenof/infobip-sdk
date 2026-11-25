<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N267b6ecf9b18ace076c5287f2f55ab493690ff43a19cc6531a331c0c908f8fd5;

/**
 * AltUri
 *
 * URI opened on LINE for macOS and Windows, taking precedence over uri on those platforms.
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
     * URI opened on LINE for macOS and Windows when the action is performed.
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
