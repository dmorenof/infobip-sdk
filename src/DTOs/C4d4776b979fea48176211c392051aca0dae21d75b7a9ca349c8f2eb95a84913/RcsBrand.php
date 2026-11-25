<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\C4d4776b979fea48176211c392051aca0dae21d75b7a9ca349c8f2eb95a84913;

/**
 * RcsBrand
 *
 * Brand for which sender is created.
 */
final class RcsBrand extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'brandName',
    ];

    protected const array VALIDATION = [
        'brandName' => [
            'minLength' => 1,
            'maxLength' => 100,
        ],
    ];

    /**
     * Name of the brand.
     */
    public string $brandName {
        set {
            $this->assigning('brandName', $value);
            $this->brandName = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'brandName' => is_string($value) ? $this->brandName = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
