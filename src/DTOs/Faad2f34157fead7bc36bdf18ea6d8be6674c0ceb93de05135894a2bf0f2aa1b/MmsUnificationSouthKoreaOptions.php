<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Faad2f34157fead7bc36bdf18ea6d8be6674c0ceb93de05135894a2bf0f2aa1b;

/**
 * MmsUnificationSouthKoreaOptions
 *
 * Use case dependent parameters for sending MMS to phone numbers registered in South Korea.
 */
final class MmsUnificationSouthKoreaOptions extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'resellerCode' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Reseller identification code: 9-digit registration number in the business registration certificate for South Korea. Resellers should submit this when sending.
     * Format: int32
     */
    public int $resellerCode {
        set {
            $this->assigning('resellerCode', $value);
            $this->resellerCode = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'resellerCode' => is_int($value) ? $this->resellerCode = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
