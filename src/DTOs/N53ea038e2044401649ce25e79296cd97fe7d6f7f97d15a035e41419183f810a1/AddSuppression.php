<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N53ea038e2044401649ce25e79296cd97fe7d6f7f97d15a035e41419183f810a1;

/**
 * AddSuppression
 *
 * Suppression.
 */
final class AddSuppression extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'domainName',
    'emailAddress',
    'type',
];

    protected const array VALIDATION = [
    'emailAddress' => [
        'minItems' => 1,
        'maxItems' => 1000,
    ],
];

    /**
     * Domain name from which suppressions will be added.
     */
    public string $domainName;
    /**
     * Email addresses to add to suppression list.
     */
    public \InfobipSDK\Collections\StringCollection $emailAddress {
        set {
            $this->assigning('emailAddress', $value);
            $this->emailAddress = $value;
        }
    }
    public \InfobipSDK\Enums\N53ea038e2044401649ce25e79296cd97fe7d6f7f97d15a035e41419183f810a1\ApiAddSuppressionType $type;

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'domainName' => is_string($value) ? $this->domainName = $value : parent::assignMember($name, $value),
            'emailAddress' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => is_string($item)) ? $this->emailAddress = new \InfobipSDK\Collections\StringCollection($value) : parent::assignMember($name, $value),
            'type' => is_string($value) ? $this->type = \InfobipSDK\Enums\N53ea038e2044401649ce25e79296cd97fe7d6f7f97d15a035e41419183f810a1\ApiAddSuppressionType::from($value) : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
