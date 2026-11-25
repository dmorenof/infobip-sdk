<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Eaaf11bb9830fc826a8597df01bea6f2a14ef6d1ed129a4f6623981d52827778;

/**
 * MarkupResponse
 *
 * Markup language response object.
 */
final class MarkupResponse extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'connectTimeout' => [
        'format' => 'int32',
    ],
    'maxDuration' => [
        'format' => 'int32',
    ],
];

    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Callback $callback;
    /**
     * Time to wait, in seconds, before the called party answers the call.
     * Format: int32
     */
    public int $connectTimeout {
        set {
            $this->assigning('connectTimeout', $value);
            $this->connectTimeout = $value;
        }
    }
    public \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CallEndpoint $endpoint;
    /**
     * Unique identifier of the call.
     */
    public string $externalId;
    /**
     * Phone number from which the call originated from.
     * Example: "44790123456"
     */
    public string $from;
    /**
     * Max duration of the call in seconds.
     * Format: int32
     */
    public int $maxDuration {
        set {
            $this->assigning('maxDuration', $value);
            $this->maxDuration = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'callback' => $value instanceof \stdClass ? $this->callback = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\Callback($value) : parent::assignMember($name, $value),
            'connectTimeout' => is_int($value) ? $this->connectTimeout = $value : parent::assignMember($name, $value),
            'endpoint' => $value instanceof \stdClass ? $this->endpoint = new \InfobipSDK\DTOs\N287f18f04e9f129a7bc94ed3ae48e2480e2673b8fdf041ab5125fde9674634b8\CallEndpoint($value) : parent::assignMember($name, $value),
            'externalId' => is_string($value) ? $this->externalId = $value : parent::assignMember($name, $value),
            'from' => is_string($value) ? $this->from = $value : parent::assignMember($name, $value),
            'maxDuration' => is_int($value) ? $this->maxDuration = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
