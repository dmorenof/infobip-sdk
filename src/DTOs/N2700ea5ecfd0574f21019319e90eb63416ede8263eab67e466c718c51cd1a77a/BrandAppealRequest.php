<?php

declare(strict_types=1);

namespace InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a;

/**
 * BrandAppealRequest
 *
 * Request body for submitting a brand appeal.
 */
final class BrandAppealRequest extends \Dmorenof\SdkRuntime\DTO
{
    public const array REQUIRED_FIELDS = [
    'documents',
];

    protected const array VALIDATION = [
    'documents' => [
        'minItems' => 1,
        'maxItems' => 10,
    ],
    'explanation' => [
        'minLength' => 0,
        'maxLength' => 1024,
    ],
];

    /**
     * List of supporting documents attached to the appeal.
     */
    public \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandAppealRequest\DocumentsCollection $documents {
        set {
            $this->assigning('documents', $value);
            $this->documents = $value;
        }
    }
    /**
     * Optional explanation supporting the appeal. Maximum 1024 characters.
     */
    public string $explanation {
        set {
            $this->assigning('explanation', $value);
            $this->explanation = $value;
        }
    }

    protected function assignMember(string $name, mixed $value): void
    {
        match ($name) {
            'documents' => is_array($value) && array_is_list($value) && array_all($value, static fn (mixed $item): bool => $item instanceof \stdClass) ? $this->documents = new \InfobipSDK\Collections\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\BrandAppealRequest\DocumentsCollection(\Dmorenof\SdkRuntime\Hydrator::models($value, \InfobipSDK\DTOs\N2700ea5ecfd0574f21019319e90eb63416ede8263eab67e466c718c51cd1a77a\AppealDocument::class)) : parent::assignMember($name, $value),
            'explanation' => is_string($value) ? $this->explanation = $value : parent::assignMember($name, $value),
            default => parent::assignMember($name, $value),
        };
    }
}
