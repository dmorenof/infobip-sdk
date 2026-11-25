<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553;

/**
 * ZaloFollowerMoHttpForwardDocs
 */
final class ZaloFollowerMoHttpForwardDocs extends \InfobipSDK\DTOs\N7c77a2c703ce12a601f120565936de62cf48d1baf9232d5411f82fc339353553\ZaloFollowerMoActionDocs
{
    public const array REQUIRED_FIELDS = [];

    protected const array VALIDATION = [
    'url' => [
        'minLength' => 1,
    ],
];

    /**
     * Specifies pushed content format.
     */
    public string $format;
    /**
     * Specifies URL where message will be pushed.
     */
    public string $url {
        set {
            $this->assigning('url', $value);
            $this->url = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'format' => is_string($value) ? $this->format = $value : parent::assignMember($name, $value),
            'url' => is_string($value) ? $this->url = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
