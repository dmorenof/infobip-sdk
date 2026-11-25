<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N45c843446703ba5f4438a6f721c629420452796de20bd3dd9adfccde3ed2ffff;

/**
 * ApiBulkRequest
 *
 * Validations request
 */
final class ApiBulkRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'destinations',
    ];

    protected const array VALIDATION = [
        'destinations' => [
            'minItems' => 1,
            'maxItems' => 100000,
        ],
        'validationRequestId' => [
            'minLength' => 0,
            'maxLength' => 200,
        ],
    ];

    /**
     * Array of email addresses to be validated.
     */
    public \InfobipSDK\Collections\N45c843446703ba5f4438a6f721c629420452796de20bd3dd9adfccde3ed2ffff\ApiBulkRequest\DestinationsCollection $destinations {
        set {
            $this->assigning('destinations', $value);
            $this->destinations = $value;
        }
    }
    /**
     * Unique identifier for the bulk email validation request. Provide your own or leave it blank to have one generated automatically.
     *
     */
    public string $validationRequestId {
        set {
            $this->assigning('validationRequestId', $value);
            $this->validationRequestId = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'destinations' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->destinations = new \InfobipSDK\Collections\N45c843446703ba5f4438a6f721c629420452796de20bd3dd9adfccde3ed2ffff\ApiBulkRequest\DestinationsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N45c843446703ba5f4438a6f721c629420452796de20bd3dd9adfccde3ed2ffff\ValidationDestination::class)) : parent::assignMember($name, $value),
            'validationRequestId' => is_string($value) ? $this->validationRequestId = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
