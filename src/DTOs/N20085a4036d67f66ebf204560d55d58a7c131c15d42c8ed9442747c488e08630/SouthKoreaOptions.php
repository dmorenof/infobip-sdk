<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N20085a4036d67f66ebf204560d55d58a7c131c15d42c8ed9442747c488e08630;

/**
 * SouthKoreaOptions
 *
 * Use case dependent parameters for sending SMS to phone numbers registered in South Korea.
 */
final class SouthKoreaOptions extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'resellerCode' => [
            'format' => 'int32',
        ],
        'title' => [
            'minLength' => 0,
            'maxLength' => 66,
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
    /**
     * Title of the message.
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
            'resellerCode' => is_int($value) ? $this->resellerCode = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
