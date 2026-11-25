<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53ea038e2044401649ce25e79296cd97fe7d6f7f97d15a035e41419183f810a1;

/**
 * DeleteSuppressionRequest
 *
 * Suppressions request.
 */
final class DeleteSuppressionRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
        'suppressions',
    ];

    protected const array VALIDATION = [
        'suppressions' => [
            'minItems' => 1,
            'maxItems' => 10,
        ],
    ];

    /**
     * Email addresses to delete from the suppression list. Number of destinations cannot exceed 10,000.
     */
    public \InfobipSDK\Collections\N53ea038e2044401649ce25e79296cd97fe7d6f7f97d15a035e41419183f810a1\DeleteSuppressionRequest\SuppressionsCollection $suppressions {
        set {
            $this->assigning('suppressions', $value);
            $this->suppressions = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'suppressions' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->suppressions = new \InfobipSDK\Collections\N53ea038e2044401649ce25e79296cd97fe7d6f7f97d15a035e41419183f810a1\DeleteSuppressionRequest\SuppressionsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N53ea038e2044401649ce25e79296cd97fe7d6f7f97d15a035e41419183f810a1\DeleteSuppression::class)) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
