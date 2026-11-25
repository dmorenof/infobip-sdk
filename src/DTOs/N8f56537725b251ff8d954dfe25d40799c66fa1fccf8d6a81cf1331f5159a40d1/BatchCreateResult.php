<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N8f56537725b251ff8d954dfe25d40799c66fa1fccf8d6a81cf1331f5159a40d1;

/**
 * BatchCreateResult
 */
final class BatchCreateResult extends \Dmorenof\SdkRuntime\DTO
{
    protected const array VALIDATION = [
    'index' => [
        'format' => 'int32',
    ],
    'status' => [
        'format' => 'int32',
    ],
];

    /**
     * List of errors
     */
    public \InfobipSDK\Collections\N2a46bdef7a59052adf56f3586860f3d5ab1636f1aff3d3f91907d1203b8dad63\BatchUpdateResult\ErrorsCollection $errors;
    /**
     * Id of created company
     * Format: int64
     */
    public int $id;
    /**
     * Index of company in request list
     * Format: int32
     */
    public int $index {
        set {
            $this->assigning('index', $value);
            $this->index = $value;
        }
    }
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
            'id' => is_int($value) ? $this->id = $value : parent::assignMember($name, $value),
            'index' => is_int($value) ? $this->index = $value : parent::assignMember($name, $value),
            'status' => is_int($value) ? $this->status = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
