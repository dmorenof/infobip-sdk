<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c;

/**
 * ProblemDetailsResponse
 *
 * A structured response that provides detailed information about validation errors encountered during an API request.
 */
final class ProblemDetailsResponse extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'status',
        'title',
        'type',
    ];

    protected const array VALIDATION = [
        'status' => [
            'format' => 'int32',
        ],
    ];

    /**
     * An array containing detailed information about each error encountered.
     */
    public \InfobipSDK\Collections\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\ProblemDetailsResponse\ErrorsCollection $errors;
    /**
     * The HTTP status code indicating the nature of the error.
     * Format: int32
     */
    public int $status {
        set {
            $this->assigning('status', $value);
            $this->status = $value;
        }
    }
    /**
     * A short, human-readable summary of the error type. This title remains consistent across similar error occurrences, aiding in easy identification.
     */
    public string $title;
    /**
     * A unique identifier for the request, useful for tracing purposes. This ID helps in correlating logs and tracking the request through the system.
     */
    public string $traceId;
    /**
     * A URI reference that provides additional information about the error type.
     * Format: uri
     */
    public string $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'errors' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->errors = new \InfobipSDK\Collections\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\ProblemDetailsResponse\ErrorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\B3ed157de85ce51bb7c17933fb84ff4b3e9bcb9fb8576a5ae189b97589d5bd1c\ErrorDetailsResponse::class)) : parent::assignMember($name, $value),
            'status' => is_int($value) ? $this->status = $value : parent::assignMember($name, $value),
            'title' => is_string($value) ? $this->title = $value : parent::assignMember($name, $value),
            'traceId' => is_string($value) ? $this->traceId = $value : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
