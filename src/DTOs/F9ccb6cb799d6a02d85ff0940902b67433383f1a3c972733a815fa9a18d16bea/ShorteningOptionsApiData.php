<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\F9ccb6cb799d6a02d85ff0940902b67433383f1a3c972733a815fa9a18d16bea;

/**
 * ShorteningOptionsApiData
 *
 * URL shortening options. Applicable only if at least one dynamic URL button is present. Modifying this provided URL outside of our company's services may lead to unexpected results.
 */
final class ShorteningOptionsApiData extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'customDomain',
    ];

    protected const array VALIDATION = [
        'customDomain' => [
            'minLength' => 1,
        ],
    ];

    /**
     * Custom domain to be used for URL shortening.
     */
    public string $customDomain {
        set {
            $this->assigning('customDomain', $value);
            $this->customDomain = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'customDomain' => is_string($value) ? $this->customDomain = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
