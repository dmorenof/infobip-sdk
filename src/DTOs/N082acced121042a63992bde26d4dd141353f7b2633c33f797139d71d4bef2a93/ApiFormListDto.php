<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93;

/**
 * ApiFormListDto
 */
final class ApiFormListDto extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'forms',
    ];

    protected const array VALIDATION = [
        'limit' => [
            'format' => 'int32',
        ],
        'offset' => [
            'format' => 'int32',
        ],
    ];

    /**
     * Forms list
     */
    public \InfobipSDK\Collections\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\ApiFormListDto\FormsCollection $forms;
    /**
     * Number of returned forms
     * Format: int32
     */
    public int $limit {
        set {
            $this->assigning('limit', $value);
            $this->limit = $value;
        }
    }
    /**
     * Offset from beginning of list of available forms
     * Format: int32
     */
    public int $offset {
        set {
            $this->assigning('offset', $value);
            $this->offset = $value;
        }
    }
    /**
     * Total number of available forms
     * Format: int64
     */
    public int $total;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'forms' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->forms = new \InfobipSDK\Collections\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\ApiFormListDto\FormsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N082acced121042a63992bde26d4dd141353f7b2633c33f797139d71d4bef2a93\ApiFormDto::class)) : parent::assignMember($name, $value),
            'limit' => is_int($value) ? $this->limit = $value : parent::assignMember($name, $value),
            'offset' => is_int($value) ? $this->offset = $value : parent::assignMember($name, $value),
            'total' => is_int($value) ? $this->total = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
