<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2;

/**
 * ErrorResponseV3
 *
 * Error information for failed batch operation items.
 */
final class ErrorResponseV3 extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'code',
        'message',
    ];

    protected const array VALIDATION = [
        'index' => [
            'format' => 'int32',
        ],
    ];

    public \InfobipSDK\Enums\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\ErrorCodeV3 $code;
    /**
     * Additional validation error details with specific property-level information.
     */
    public \InfobipSDK\Collections\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\ErrorResponseV3\DetailsCollection $details;
    /**
     * Index position of the failed item in the original request batch.
     * Format: int32
     */
    public int $index {
        set {
            $this->assigning('index', $value);
            $this->index = $value;
        }
    }
    /**
     * Human-readable error message describing what went wrong.
     */
    public string $message;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'code' => is_int($value) ? $this->code = \InfobipSDK\Enums\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\ErrorCodeV3::from($value) : parent::assignMember($name, $value),
            'details' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->details = new \InfobipSDK\Collections\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\ErrorResponseV3\DetailsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N41037c0c5bdf4509c49aaf5c9a141a8857afc7b3859839aa4c690d84fb75d2e2\ErrorDetail::class)) : parent::assignMember($name, $value),
            'index' => is_int($value) ? $this->index = $value : parent::assignMember($name, $value),
            'message' => is_string($value) ? $this->message = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
