<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c;

/**
 * ErrorDetailsResponse
 *
 * An object containing specific information about an error.
 */
final class ErrorDetailsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'code',
    'index',
    'message',
];

    protected const array VALIDATION = [
    'code' => [
        'format' => 'int32',
    ],
    'index' => [
        'format' => 'int32',
    ],
];

    /**
     * A specific error code that categorizes the type of error, aiding in quick identification and resolution.
     * Format: int32
     */
    public int $code {
        set {
            $this->assigning('code', $value);
            $this->code = $value;
        }
    }
    /**
     * An array providing additional context about specific aspects of the error.
     */
    public \InfobipSDK\Collections\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\ErrorDetailsResponse\DetailsCollection $details;
    /**
     * The position of the entity in the request array that caused the error. An index of -1 indicates a general error not tied to a specific entity.
     * Format: int32
     */
    public int $index {
        set {
            $this->assigning('index', $value);
            $this->index = $value;
        }
    }
    /**
     * A descriptive message explaining the nature of the error.
     */
    public string $message;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'code' => is_int($value) ? $this->code = $value : parent::assignMember($name, $value),
            'details' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->details = new \InfobipSDK\Collections\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\ErrorDetailsResponse\DetailsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\ErrorDetailsItemResponse::class)) : parent::assignMember($name, $value),
            'index' => is_int($value) ? $this->index = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
