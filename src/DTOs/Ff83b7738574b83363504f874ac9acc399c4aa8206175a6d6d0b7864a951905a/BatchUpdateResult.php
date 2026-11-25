<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\Ff83b7738574b83363504f874ac9acc399c4aa8206175a6d6d0b7864a951905a;

/**
 * BatchUpdateResult
 */
final class BatchUpdateResult extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
        'status' => [
            'format' => 'int32',
        ],
    ];

    /**
     * List of errors
     */
    public \InfobipSDK\Collections\N2a46bdef7a59052adf56f3586860f3d5ab1636f1aff3d3f91907d1203b8dad63\BatchUpdateResult\ErrorsCollection $errors;
    /**
     * Query used for company identification
     */
    public \InfobipSDK\DTOs\Ff83b7738574b83363504f874ac9acc399c4aa8206175a6d6d0b7864a951905a\BatchUpdateResult\QueryMap $query;
    /**
     * HTTP status
     * Format: int32
     */
    public int $status {
        set {
            $this->assigning('status', $value);
            $this->status = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'errors' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->errors = new \InfobipSDK\Collections\N2a46bdef7a59052adf56f3586860f3d5ab1636f1aff3d3f91907d1203b8dad63\BatchUpdateResult\ErrorsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N3206ab1528b990358dc5d8da723b52b5db6e1d582712d39b5ed66ac5c4b1e84f\BatchOperationError::class)) : parent::assignMember($name, $value),
            'status' => is_int($value) ? $this->status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
